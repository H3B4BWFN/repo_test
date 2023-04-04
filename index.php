<?php
        session_start();
        if(! isset($_SESSION["connected"])) { header("Location: /login.php"); die(); }
        if($_SESSION["connected"] != 4) { header("Location: /login.php"); die(); }
?>
<html>
        <head>
                <title>page de test</title>
        </head>
        <body>
		<?php printf("<h1>Hello ".$_SERVER["REMOTE_ADDR"]); ?><br>
		<a href="logout.php">Disconnect</a>
        </body>
</html>
