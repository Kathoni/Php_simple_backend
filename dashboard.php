<?php
session_start();
include 'datab.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Add data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $content = $_POST['content'];
    $stmt = $pdo->prepare("INSERT INTO data (user_id, content) VALUES (?, ?)");
    $stmt->execute([$user_id, $content]);
}

// Delete data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM data WHERE id = ?");
    $stmt->execute([$id]);
}

// Search data
$search = $_GET['search'] ?? '';
$stmt = $pdo->prepare("SELECT * FROM data WHERE user_id = ? AND content LIKE ?");
$stmt->execute([$user_id, "%$search%"]);
$data = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="dashboard">
    <h1>Welcome</h1>
    <form method="POST">
        <label>Add Data:</label>
        <input type="text" name="content" required>
        <input type="submit" name="add" value="Add">
    </form>
    <form method="GET">
        <label>Search:</label>
        <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>">
        <input type="submit" value="Search">
    </form>
    <h2>Data List</h2>
    <ul>
        <?php foreach ($data as $row): ?>
            <li>
                <?php echo htmlspecialchars($row['content']); ?>
                <a href="?delete=<?php echo $row['id']; ?>" style="color: red;">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
