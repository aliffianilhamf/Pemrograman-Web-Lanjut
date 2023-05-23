<?php
session_start();
/*
 * melakukan perhitungan aritmatika sederhana
 * 
 * @param $nilai1
 * @param $nilai2
 * @param $opr : operator perhitungan
 * @retur angka numerik hasil perhitungan
 */

function hitung($nilai1, $nilai2, $opr)
{
    $nilai1 = (int)$nilai1;
    $nilai2 = (int)$nilai2;

    if ($opr == '+') {
        return $nilai1 + $nilai2;
    } else if ($opr == '-') {
        return $nilai1 - $nilai2;
    } else if ($opr == 'x') {
        return $nilai1 * $nilai2;
    } else if ($opr == '/') {
        return $nilai1 / $nilai2;
    } else {
        echo "Error!";
    }
}

/*
 * Meyinmpan operasi dan hasil perhitungan dalam session
 * 
 * @param $nilai1
 * @param $nilai2
 * @param $opr : operator perhitungan
 * @param $hasil : hasil perhitungan
 * @return jumlah riwayat yang tersimpan saat inii
 */

function add_session_hist($nilai1, $nilai2, $opr, $hasil)
{
    $new_calc = [$nilai1, $nilai2, $opr, $hasil];
    if (!isset($_SESSION['history'])) {
        $_SESSION['history'] = [$new_calc];
    } else {
        array_push($_SESSION['history'], $new_calc);
    }

    return count($_SESSION['history']);
}
