<?php
$msg = "First line of text\nSecond line of text";
$msg = wordwrap($msg,70);
mail("maximilien@canonne.net","My subject",$msg);

?>