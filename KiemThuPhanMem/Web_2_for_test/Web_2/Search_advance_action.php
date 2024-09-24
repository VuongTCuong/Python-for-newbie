<?php
    $from=$_POST['from'];
    $to=$_POST['to'];
    $link="location:Search-result.php?from=" .$from . "&to=" .$to;
    header($link);
?>