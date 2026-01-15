<?php
//$arraybuah =['Mangga','Apel','Pisang','Jeruk'];
$arraybuah [0]= 'Mangga';
$arraybuah [1]= 'Apel';
$arraybuah [2]= 'Pisang';            
$arraybuah [3]= 'Jeruk';
$arraybuah [4]= 'Durian';
$arraybuah [5]= 'Nanas';
//array numerik -> index angka
$jmldata = count (value: $arraybuah);//6
for ($i=0; $i < $jmldata ; $i++) { 
    echo $arraybuah[$i]."<br>";
}
