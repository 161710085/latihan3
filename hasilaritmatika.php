<?php
require_once'aritmatika.php';


$penjumlahan = new penjumlahan;
$penjumlahan ->set_penjumlahan(50,20);
echo "=========================".'<br>';
echo "Perhitungan Bilangan 50 dengan 20".'<br>';
echo "=========================".'<br>';
echo "penjumlahan=  "
.$penjumlahan->get_penjumlahan().'<br>';
echo "pengurangan=  "
.$penjumlahan->get_pengurangan().'<br>';
echo "perkalian= "
.$penjumlahan->get_perkalian().'<br>';
echo "pembagian=  "
.$penjumlahan->get_pembagian().'<br>';


  ?>