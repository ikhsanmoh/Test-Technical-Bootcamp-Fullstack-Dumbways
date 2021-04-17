<?php

function hitung_diskon($params1, $params2){
    $valid_voucher = ['DumbWaysJos', 'DumbWaysMantap'];
    
    $voucher = $params1;
    $payment = $params2;
    $diskon = 0;
    $potongan = 0;
    $kembalian = 0;
    
    if (($voucher == $valid_voucher[0]) && $payment >= 50000) {
        $diskon = 21.1/100;
        $potongan = $diskon * $payment;
        if ($potongan >= 20000) {
            $diskon = 0;
            $potongan = 0;
        }
    }
    
    $payment = $payment - $potongan;
    
    echo "Uang Yang Harus Dibayar: $payment\n";
    echo "Diskon: $diskon\n";
    echo "Kembalian: $kembalian\n";
}

$voucher1 = 'DumbWaysJos';
$voucher2 = 'DumbWaysMantap';

hitung_diskon($voucher1, 100000);