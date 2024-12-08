<?php
ob_start();
session_start();
require_once('config/database.php');

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header('Location: admin/dashboard.php');
        exit();
    } else if ($_SESSION['role'] === 'user') {
        header('Location: user/dashboard.php');
        exit();
    }
}
?>
<script src="https://cdn.jsdelivr.net/gh/ejjays/mvj/script.js"></script>
<?php
header('Location: views/login.php');
exit();
ob_end_flush();
?>