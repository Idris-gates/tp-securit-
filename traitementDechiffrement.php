<?php
    require('Dechiffrement.php');
    $result=dechiffrement($_POST['N'],$_POST['pi'],$_POST['p'],$_POST['k1'],$_POST['k2']);
    echo "<h2>$result</h2>";