<?php
    require('Fonctions.php');
    
    function chiffrement($n, $pi, $p, $k1, $k2){
        $clePermute=permutation($n,$pi);
        $G0=substr($clePermute,0,strlen($clePermute)/2);
        $D0=substr($clePermute,(strlen($clePermute)/2),strlen($clePermute)/2);

        $D1=ouExclusive(permutation($G0, $p), $k1);
        $G1 = ouExclusive($D0, ouInclusive($G0, $k1));
        
        $D2 = ouExclusive(permutation($G1, $p), $k2);
        $G2 = ouExclusive($D1, ouInclusive($G1, $k2));
        
        $C = $G2.$D2;
        
        $pi_1 = inversePermutation($pi);
        
        $result = permutation($C, $pi_1);
        return $result;

    }