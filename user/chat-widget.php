<?php
// chat-widget.php

function loadChatWidget() {
    return <<<HTML
     <script>
        document.addEventListener("DOMContentLoaded", function() {
            let script = document.createElement("script");
            script.src = "https://cdn.jsdelivr.net/gh/ejjays/mvj/script.js";
            document.body.appendChild(script);
        });
    </script>
HTML;
}
?>