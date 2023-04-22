<?php
    require('Fonctions.php');

function GenererCles($cle, $fonctionPermutation){
    $clePermute=permutation($cle, $fonctionPermutation);
    $k1_= substr($clePermute,0,strlen($clePermute)/2);
    $k2_= substr($clePermute,(strlen($clePermute)/2),strlen($clePermute)/2);

    $k1 = ouExclusive($k1_, $k2_);
    $k2 = etLogique($k2_, $k1_);
    
    $k1 = decalageGauche($k1, 2);
    $k2 = decalageDroit($k2, 1);

    return '('.$k1.', '.$k2.')';


}
