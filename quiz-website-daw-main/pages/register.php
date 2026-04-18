<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$error_msg = "";

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_btn'])) {
    $user = trim($_POST['username']);
    $pass = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if (strlen($user) < 4 || strlen($pass) < 4) {
        $error_msg = "Username and password must be at least 4 characters.";
    } elseif ($pass !== $confirm) {
        $error_msg = "Passwords do not match.";
    } else {
        $res = registerUser($pdo, $user, $pass);
        if ($res['status'] === "SUCCESS") {
            header("Location: index.php?msg=" . urlencode($res['message']));
            exit();
        } else {
            $error_msg = $res['message'];
        }
    }
}

include 'partials/header.php';
?>

<h1>Create Account</h1>
<p class="subtitle">Join the Web Mastery Quiz contest</p>

<?php if ($error_msg): ?>
    <div class="error"><?php echo $error_msg; ?></div>
<?php endif; ?>

<form method="POST" action="index.php?page=register">
    <div class="input-group">
        <label>Pick a Username</label>
        <input type="text" name="username" placeholder="e.g. jdoe123" required>
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="••••••••" required>
    </div>
    <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="••••••••" required>
    </div>
    <button type="submit" name="register_btn" class="btn">Create Account</button>
</form>

<div style="text-align: center; margin-top:20px;">
    <p style="font-size: 0.9rem; color: #94a3b8;">
        Already have an account? <a href="index.php"
            style="color: var(--primary); text-decoration: none; font-weight: 600;">Login here</a>
    </p>
</div>

<?php include 'partials/footer.php'; ?>