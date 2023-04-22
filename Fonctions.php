<?php
    
    function  permutation($cle, $perm){
        if(strlen($cle)!=strlen($perm)){
            return -1;
        }
        $clePermute = "";
        for ($i=0; $i < strlen($perm); $i++) { 
            $index=(int)$perm[$i];
            $clePermute=$clePermute.$cle[$index];
        }
        return $clePermute;
    }

    function ouExclusive($cle1,$cle2){
        if(strlen($cle1)!=strlen($cle2)){
            return -1;
        }
        $result = "";
        for ($i=0; $i < strlen($cle1); $i++) { 
           if(($cle1[$i] == "0" AND $cle2[$i] == "0") OR ($cle1[$i] == "1" AND $cle2[$i] == "1")){
            $result = $result."0";
           }else{
            $result = $result."1";
           }
        }
        return $result;
    }

    function ouInclusive($cle1, $cle2){
        if(strlen($cle1)!=strlen($cle2)){
            return -1;
        }
        $result = "";
        for ($i=0; $i < strlen($cle1); $i++) { 
           if($cle1[$i] == "0" AND $cle2[$i] == "0"){
            $result = $result."0";
           }else{
            $result = $result."1";
           }
        }
        return $result;
    }

    function etLogique($cle1, $cle2){
        if(strlen($cle1)!=strlen($cle2)){
            return -1;
        }
        $result = "";
        for ($i=0; $i < strlen($cle1); $i++) { 
           if($cle1[$i] == "1" AND $cle2[$i] == "1"){
            $result = $result."1";
           }else{
            $result = $result."0";
           }
        }
        return $result; 
    }

function decalageGauche($cle,$ordre){
    $decal=substr($cle,0,$ordre);
    $reste=substr($cle,$ordre,strlen($cle)-$ordre);
    return $reste.$decal;
}

function decalageDroit($cle,$ordre){
    $taille=strlen($cle);
    $diff=$taille-$ordre;

    $decal=substr($cle,strlen($cle)-$ordre,$ordre);
    $reste=substr($cle,0,$diff);
    return $decal.$reste;
}

function inversePermutation($fonctionPermutation){
        $result="";
        for ($i=0; $i < strlen($fonctionPermutation); $i++){
            
            $position=(string)$i;
            $result=$result.strpos($fonctionPermutation,$position);
        }
        return $result;

    }
