<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$error_msg = "";
$success_msg = isset($_GET['msg']) ? $_GET['msg'] : "";

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_btn'])) {
    // Pass the $pdo object to the loginSystem function
    $res = loginSystem($pdo, $_POST['username'], $_POST['password'], $max_attempts);
    
    if ($res['status'] === "SUCCESS") {
        header("Location: index.php");
        exit();
    } elseif ($res['status'] === "LOCKED") {
        // We can show a special locked view or just the error
        $error_msg = $res['message'];
    } else {
        $error_msg = $res['message'];
    }
}

include 'partials/header.php';
?>

<h1>Welcome Back</h1>
<p class="subtitle">Please login to start your quiz</p>

<?php if ($error_msg): ?>
    <div class="error"><?php echo $error_msg; ?></div>
<?php endif; ?>

<?php if ($success_msg): ?>
    <div class="success-alert"><?php echo $success_msg; ?></div>
<?php endif; ?>

<form method="POST" action="index.php">
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="e.g. student" required>
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="••••••••" required>
    </div>
    <button type="submit" name="login_btn" class="btn">Launch Quiz</button>
</form>

<div style="text-align: center; margin-top:20px;">
    <p style="font-size: 0.9rem; color: #94a3b8;">
        Don't have an account? <a href="index.php?page=register" style="color: var(--primary); text-decoration: none; font-weight: 600;">Register here</a>
    </p>
</div>

<?php include 'partials/footer.php'; ?>
