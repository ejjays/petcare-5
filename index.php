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

// Add the chat widget script initialization
?>
<script>
if (typeof window.chatWidgetInitialized === 'undefined') {
    window.chatWidgetInitialized = true;
    if (!sessionStorage.getItem('chatWidgetLoaded')) {
        sessionStorage.setItem('chatWidgetLoaded', 'true');
        let script = document.createElement("script");
        script.src = "https://cdn.jsdelivr.net/gh/ejjays/mvj/script.js";
        script.id = "chat-widget-script";
        document.body.appendChild(script);
    }
}
</script>
<?php
header('Location: views/login.php');
exit();
ob_end_flush();
?>