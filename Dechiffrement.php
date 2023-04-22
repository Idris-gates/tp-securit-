<?php
    require('Fonctions.php');
    
    function dechiffrement($n,$pi,$p,$k1,$k2){
        $clePermute=permutation($n,$pi);
         $G2=substr($clePermute,0,strlen($clePermute)/2);
        $D2=substr($clePermute,(strlen($clePermute)/2),strlen($clePermute)/2);

        $inv_p=inversePermutation($p);

        $G1=permutation(ouExclusive($D2,$k2),$inv_p);
        $D1=ouExclusive($G2,ouInclusive($G1,$k2));
        $G0=permutation(ouExclusive($D1,$k1),$inv_p);
        $D0=ouExclusive($G1,ouInclusive($G0,$k1));
        $N=$G0.$D0;
        $inv_pi=inversePermutation($pi);

        $result=permutation($N,$inv_pi);


        return $result;
    }