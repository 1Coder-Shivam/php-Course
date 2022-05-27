<?php
//A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
echo "COOKIES<br>";
// A cookie is created with the setcookie() function.
//syntax to set a cookie
echo time();
setcookie("cotegory", "Books",time() + 86400*30, "/");
echo "The cookie is set"
?>
