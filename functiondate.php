<?php 
// Function PHP
// 1.date
// 2.time
// 3.mktime
// 4.strtotime

//  contoh 1.date
//     echo date("l. d-M-Y");
//  Latihan date
//     echo date("d, M Y");

// contoh 2.time
    // echo date("l", time() + 172800);
    // echo date("l", time() + 60*60*24*100);
// Latihan 2.time
    // echo date("d M Y", time() + 60*60*24*100);

// contoh 3.mktime
// mktime(0,0,0,0,0,0);
// jam,menit,detik,bulan,tanggal,tahun
    //  echo date("l", mktime(0,0,0,6,21,2005));

// contoh 4.strtotime
    // echo date("l", strtotime("21 june 2005"));
?>