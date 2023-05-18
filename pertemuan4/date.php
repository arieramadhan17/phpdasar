<?php 
    // echo date("l, d-M-Y");

    // echo time();
    // echo date("l", time()+60*60*24*100);

    //mktime membuat sendiri detik
    //mktime(0,0,0,0,0,0)
    // jam, menit, bulan, tanggal, tahun
    //echo date("l", mktime(0,0,0,01,13,1998));

    //strtotime
    echo date("l", strtotime("13-01-1998"));

?>