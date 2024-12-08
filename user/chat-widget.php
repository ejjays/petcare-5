<?php
// chat-widget.php

function loadChatWidget() {
    return <<<HTML
    <script>
        if (!window.chatWidgetLoaded) {
            window.chatWidgetLoaded = true;
            let script = document.createElement("script");
            script.src = "https://cdn.jsdelivr.net/gh/ejjays/mvj/script.js";
            script.id = "chat-widget-script";
            document.body.appendChild(script);
        }
    </script>
HTML;
}
?>