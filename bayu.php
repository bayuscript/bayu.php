<?php
 $nilai = readline("masukan nilai :" );

 if(($nilai >=80.00) && ($nilai <=100.00)){
    $bobot = 4.00 ;
    $grade = "A" ;
 }elseif(($nilai >=75) && ($nilai <=79.99)){
    $bobot = 3.75 ;
    $grade = "A-" ;
 }elseif(($nilai >=70.00) && ($nilai <=74.99)){
    $bobot = 3.50 ;
    $grade = "B+" ;
 }elseif(($nilai >=65.00) && ($nilai <=69.99)){
    $bobot = 3.00 ;
    $grade = "B" ;
 }elseif(($nilai >=55.00) && ($nilai <=64.99)){
    $bobot = 2.00 ;
    $grade = "C" ;
 }elseif(($nilai >=30.00) && ($nilai <=54.99)){
    $bobot = 1.00 ;
    $grade = "D" ;
 }elseif(($nilai >00.00) && ($nilai <=29.99)){
    $bobot = 0.00 ;
    $grade = "E" ;
 }else{
    $bobot =0.00;
    $grade ="T";
 }

 echo "nilai = ".number_format((float)$nilai,2)."\n";
 echo "bobot = " . number_format((float)$bobot,2)."\n";
 echo "grade = " .$grade;

?>