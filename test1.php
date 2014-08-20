<?
require_once("cookie_session.php");
$_SESSION['str_var'] = "anything";
$_SESSION['int_var'] = 19;
$_SESSION['bool_var'] = true;
?>
Session is Changed in this page<br/>
<a href="test2.php">Click here to show what is put in session</a>