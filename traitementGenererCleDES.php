<?php
    require('GenererCleDES.php');
    $result=GenererCles($_POST['key'],$_POST['function']);
    echo "<h2>$result</h2>";