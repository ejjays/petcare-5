<?php
ob_start();
session_start();
require_once('config/database.php');
<<<<<<< HEAD
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
=======

>>>>>>> 8207b2e (Update Code)
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header('Location: admin/dashboard.php');
        exit();
    } else if ($_SESSION['role'] === 'user') {
        header('Location: user/dashboard.php');
        exit();
    }
}

<<<<<<< HEAD
header('Location: views/login.php');
exit();
ob_end_flush();
?>
</body>
</html>
=======
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Management System</title>
</head>
<body>
    <?php
    header('Location: views/login.php');
    exit();
    ?>

    <script>(function(){var js,fs,d=document,id="tars-widget-script",b="https://tars-file-upload.s3.amazonaws.com/bulb/";if(!d.getElementById(id)){js=d.createElement("script");js.id=id;js.type="text/javascript";js.src=b+"js/widget.js";fs=d.getElementsByTagName("script")[0];fs.parentNode.insertBefore(js,fs)}})();window.tarsSettings = {"convid": "JNG3R7", "href": "https://chatbot.hellotars.com/conv/JNG3R7"};</script>
</body>
</html>

<?php
ob_end_flush();
?>
>>>>>>> 8207b2e (Update Code)


ey ey ey
