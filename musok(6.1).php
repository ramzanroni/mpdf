<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'default_font' => 'nikosh', 'mode' => 'utf-8', 'format' => 'A4-L'
]);

$html = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: nikosh;
        font-size: 13px;
        font-weight: normal;
    }


    .header {
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }



    p {
        margin: 0px;
        padding: 0px;
    }


    td {
        border: 1px solid;
        font-weight: normal;
        border: 1px solid;
        text-align: center;
    }

    th {
        border: 1px solid;
        font-weight: normal;
        border: 1px solid;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }


    .topSide {
        text-align: right !important;
    }

    small {
        float: right;
    }
</style>

<body>
    <div class="main-div">

        <div class="header">
            <table>
                <tr>
                    <td style="text-align: right; border-bottom:none;" colspan="21">মূসক - ৬.১</td>
                </tr>
                <tr>
                    <td colspan="21" style="text-align:center; border-top:none;">
                        <p style="text-align: center;">প্রতিষ্ঠানের নাম, ঠিকানা ও ব্যবসা সনাক্তকরণ সংখ্যা </p>
                        <p style="text-align: center;">ক্রয় হিসাব পুস্তক </p>
                        <p style="text-align: center;">(পণ্য বা সেবা প্রক্রিয়াকরণে সম্পৃক্ত এমন নিবন্ধিত বা তালিকাভুক্ত ব্যাক্তির জন্য প্রযোজ্য )</p>
                        <p style="text-align: center;">[বিধি ৪০(১) এর দফা (ক ) এবং ৪১ এর দফা (ক ) দ্রষ্টব্য ]</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="21">
                        <p style="text-align: center;">পণ্য/সেবার উপকরণ ক্রয় </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="1">ক্রমিক সংখ্যা </td>
                    <td colspan="1">তারিখ </td>
                    <td colspan="2">মজুদ উপকরণের প্রারম্ভিক জের</td>
                    <td colspan="14">ক্রয়কৃত উপকরণ </td>
                    <td colspan="2">উপকরণের প্রাম্ভিক জের </td>
                    <td rowspan="3">মন্তব্য </td>
                </tr>
                <tr>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td rowspan="2">পরিমান (একক )</td>
                    <td rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                    <td rowspan="2">চালানপত্র/বিল জব এন্ট্রি নম্বর </td>
                    <td rowspan="2">তারিখ </td>
                    <td colspan="3">বিক্রেতা / সরবরাহকারী </td>
                    <td rowspan="2">বিবরণ</td>
                    <td rowspan="2">পরিমান</td>
                    <td rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                    <td rowspan="2">সম্পূরক শুক্ক (যদি থাকে )</td>
                    <td rowspan="2">মূসক </td>
                    <td colspan="2">মোট উপকরণের পরিমান </td>
                    <td colspan="2">পণ্য প্রস্তুত/প্রক্রিয়া করণে উপকরণের ব্যবহার </td>
                    <td rowspan="2">পরিমান (একক )</td>
                    <td rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                </tr>
                <tr>

                    <td colspan="1">নাম </td>
                    <td colspan="1">ঠিকানা </td>
                    <td colspan="1">নিবন্ধন /তালিকাভুক্তি /জাতীয় পরিচয়পত্র নং</td>
                    <td colspan="1">পরিমান (একক )</td>
                    <td colspan="1">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                    <td colspan="1">পরিমান (একক )</td>
                    <td colspan="1">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                </tr>
                <tr>
                    <td>(১)</td>
                    <td>(২)</td>
                    <td>(৩)</td>
                    <td>(৪)</td>
                    <td>(৫)</td>
                    <td>(৬)</td>
                    <td>(৭)</td>
                    <td>(৮)</td>
                    <td>(৯)</td>
                    <td>(১০)</td>
                    <td>(১১)</td>
                    <td>(১২)</td>
                    <td>(১৩)</td>
                    <td>(১৪)</td>
                    <td>(১৫)</td>
                    <td>(১৬)</td>
                    <td>(১৭)</td>
                    <td>(১৮)</td>
                    <td>(১৯)</td>
                    <td>(২০)</td>
                    <td>(২১)</td>
                </tr>
                <tr style="height: 40px; !important">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="header">
            <p style="font-weight: bold;">বিশেষ দ্রষ্টব্যঃ </p>
            <p>১। অর্থনৈতিক কার্যক্রম সংশ্লিষ্ট সকল প্রকার ক্রয়ের তথ্য এই ফরমে অন্তর্ভুক্ত করিতে হইবে ।</p>
            <p>২। যে ক্ষেত্রে অনিবন্ধিত ব্যক্তির নিকট হইতে পণ্য ক্রয় করা হইবে সেই ক্ষেত্রে উক্ত ব্যক্তির পূর্নাঙ্গ নাম, ঠিকানা ও জাতীয় পরিচয়পত্র নম্বর যথাযথভাবে সংশ্লিষ্ট কলাম [(৭),(৮) ও (৯)] এ আবশ্যিকভাবে উল্ল্যেখ করিতে হইবে ।</p>
            <p>৩। উপকরণ ক্রয়ের স্বপক্ষে প্রামানিক দলিল হিসেবে বিল অব এন্ট্রি বা চালানপত্র কপি সংরক্ষণ করিতে হইবে ।</p>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('Journal Printing');
$mpdf->AddPage('L');
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: nikosh;
        font-size: 13px;
        font-weight: normal;
    }

    .main-div {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 50px;
    }

    .header {
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }

    .header-text {
        float: left;
    }

    .header-text p {
        text-align: left;
    }

    .header-part {
        width: 50%;
        float: left;
    }

    .info {
        float: right;
        color: green;
    }

    hr.divider {
        border: 0;
        border-top: 1px solid black;
        width: 132px;
        margin: 0;

    }

    h2 {
        margin: 0px;
        padding: 0px;
    }

    p {
        margin: 0px;
        padding: 0px;
    }


    td {
        border-bottom: 1px solid;
        font-weight: normal;
    }

    .th-row {
        border: 1px solid;
        font-weight: normal;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    .signeture-part {
        width: 20%;
        float: left;
        margin: 15px;
    }

    .signType {
        border: none;
    }

    .signTypeTD {
        border: none;
    }

    .coverImg {
        width: 80%;
        margin-left: 77px;

    }
</style>

<body>
    <div class="main-div">

        <div class="header">
            <table>
                <thead>
                    <tr>
                        <th colspan="4" style="text-align: left;">
                            <div class="header">

                                <img class="coverImg" src="cover.jpeg" alt="">
                            </div>
                            <div class="header-text">
                                <p>Purchase Invoice, No. 20</p>
                                <p>Date: 13/10/2022</p>
                            </div>
                        </th>
                    </tr>
                    <tr class="th-row">
                        <th>Code/Br.</th>
                        <th>GL Account, Br.:/Description</th>
                        <th>Debit</th>
                        <th>Credit</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1130010/1</td>
                        <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td>100.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2001010/1</td>
                        <td> Trade Payables(AP)-LB, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                        <td></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>In word: One Hundred </td>
                        <td>100.00</td>
                        <td>100.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="header">
            <table style="border: none;">
                <tr style="border: none;">
                    <td class="signTypeTD">
                        <div class="signType">
                            <p> for Demo</p>
                            <div style="border-bottom: 1px solid black !important;width: 50px;">
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </td>
                    <td class="signTypeTD">
                        <div class="signType">
                            <p>Checked</p>
                            <div style="border-bottom: 1px solid black !important;width: 50px;">
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </td>
                    <td class="signTypeTD">
                        <div class="signType">
                            <p>Approved</p>
                            <div style="border-bottom: 1px solid black !important;width: 50px;">
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>

                    </td>
                    <td class="signTypeTD">
                        <div class="signType">
                            <p>Received</p>
                            <div style="border-bottom: 1px solid black !important;width: 50px;">
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="header">
            <p>Created on : 13/10/2022 05:02:31 pm hr. user: admin</p>
            <p>Printed on : 24/10/2022 02:26:07 pm</p>
        </div>
    </div>
</body>

</html> -->