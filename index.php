<?php
ob_start();
session_start();
require_once('config/database.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>PetCare</title>
    <script>
        // Force inject chat widget across all pages
        (function injectChatWidget() {
            // Create container if it doesn't exist
            if (!document.getElementById('chat-widget-container')) {
                const container = document.createElement('div');
                container.id = 'chat-widget-container';
                document.body.appendChild(container);
            }

            // Load the chat widget script
            const loadScript = () => {
                const script = document.createElement('script');
                script.src = 'https://cdn.jsdelivr.net/gh/ejjays/mvj/script.js';
                script.async = true;
                script.defer = true;
                
                // Force script to remain on page
                script.setAttribute('data-permanent', 'true');
                
                // Ensure script loads even after redirects
                script.onload = () => {
                    // Store in sessionStorage that script is loaded
                    sessionStorage.setItem('chatWidgetLoaded', 'true');
                };
                
                document.body.appendChild(script);
            };

            // Check if script needs to be loaded
            if (!sessionStorage.getItem('chatWidgetLoaded')) {
                loadScript();
            }

            // Recheck every 1 second to ensure widget stays present
            setInterval(() => {
                if (!document.querySelector('script[src*="ejjays/mvj/script.js"]')) {
                    loadScript();
                }
            }, 1000);
        })();
    </script>
</head>
<body>
    <div id="chat-widget-container"></div>
<?php
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header('Location: admin/dashboard.php');
        exit();
    } else if ($_SESSION['role'] === 'user') {
        header('Location: user/dashboard.php');
        exit();
    }
}

header('Location: views/login.php');
exit();
ob_end_flush();
?>
</body>
</html>