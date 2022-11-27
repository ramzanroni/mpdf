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
            <p style="text-align: center;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার </p>
            <p style="text-align: center;">জাতীয় রাজস্ব বোর্ড </p>
        </div>
        <div class="header">
            <table>
                <tr>
                    <td style="text-align: right; border-bottom:none;" colspan="22">মূসক - ৬.১</td>
                </tr>
                <tr>
                    <td colspan="22" style="text-align:center; border-top:none;">
                        <p style="text-align: center;">প্রতিষ্ঠানের নাম, ঠিকানা ও ব্যবসা সনাক্তকরণ সংখ্যা </p>
                        <p style="text-align: center;">বিক্রয় হিসাব পুস্তক </p>
                        <p style="text-align: center;">(পণ্য বা সেবা প্রক্রিয়াকরণে সম্পৃক্ত এমন নিবন্ধিত বা তালিকাভুক্ত ব্যাক্তির জন্য প্রযোজ্য )</p>
                        <p style="text-align: center;">[বিধি ৪০(১) এর দফা (ক ) এবং ৪১ এর দফা (ক ) দ্রষ্টব্য ]</p>
                    </td>
                </tr>

                <tr>
                    <td colspan="1">ক্রমিক সংখ্যা </td>
                    <td colspan="1">তারিখ </td>
                    <td colspan="2">উৎপাদিত পণ্য /সেবার প্রারাম্ভিক জের </td>
                    <td colspan="2">উৎপাদন </td>
                    <td colspan="2">মোট উৎপাদিত পণ্য/সেবা </td>
                    <td colspan="4">ক্রেতা/সরবরাহগ্রহীতা </td>
                    <td colspan="2">চালানপত্রের বিবরণ</td>
                    <td colspan="5">বিক্রিত/সরবরাহকৃত পণ্যের বিবরণ</td>
                    <td colspan="2">পণ্যের প্রান্তিক জের </td>
                    <td rowspan="3">মন্তব্য </td>
                </tr>
                <tr>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td rowspan="2">পরিমান (একক )</td>
                    <td rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                    <td rowspan="2">পরিমান (একক )</td>
                    <td rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                    <td rowspan="2">পরিমান (একক )</td>
                    <td rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                    <td rowspan="2">নাম </td>
                    <td rowspan="2">ঠিকানা </td>
                    <td colspan="2" style="border-bottom: none;">নিবন্ধন /তালিকাভুক্তি /জাতীয় পরিচয়পত্র নং</td>
                    <td rowspan="2">নম্বর </td>
                    <td rowspan="2">তারিখ </td>
                    <td rowspan="2">বিবরণ </td>
                    <td rowspan="2">পরিমান </td>
                    <td rowspan="2">করযোগ্য মূল্য</td>
                    <td rowspan="2">সম্পূরক শুল্ক (যদি থাকে )</td>
                    <td rowspan="2">মূসক</td>
                    <td rowspan="2">পরিমান (একক )</td>
                    <td rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                </tr>
                <tr style="border: none;">
                    <td colspan="2" style="border-top: none;"></td>
                </tr>
                <tr>
                    <td colspan="1">(১)</td>
                    <td colspan="1">(২)</td>
                    <td colspan="1">(৩)</td>
                    <td colspan="1">(৪)</td>
                    <td colspan="1">(৫)</td>
                    <td colspan="1">(৬)</td>
                    <td colspan="1">(৭)=(৩+৫)</td>
                    <td colspan="1">(৮)=(৪+৬)</td>
                    <td colspan="1">(৯)</td>
                    <td colspan="1">(১০)</td>
                    <td colspan="2">(১১)</td>
                    <td colspan="1">(১২)</td>
                    <td colspan="1">(১৩)</td>
                    <td colspan="1">(১৪)</td>
                    <td colspan="1">(১৫)</td>
                    <td colspan="1">(১৬)</td>
                    <td colspan="1">(১৭)</td>
                    <td colspan="1">(১৮)</td>
                    <td colspan="1">(১৯)</td>
                    <td colspan="1">(২০)</td>
                    <td colspan="1">(২১)</td>
                </tr>

            </table>
        </div>
        <div class="header">
            <p style="font-weight: bold;">বিশেষ দ্রষ্টব্যঃ </p>
            <p>* যেইক্ষেত্রে অনিবন্ধিত ব্যক্তির নিকট পণ্য বিক্রয় করা হইবে সেইক্ষেত্রে উক্ত ব্যক্তির পূনাঙ্গ নাম, ঠিকানা ও জাতীয় পরিচয়পত্র নম্বর যথাযথভাবে সংশ্লিষ্ট কলামে [(৯),(১০)ও(১১)] আবশ্যিকভাবে উল্লেখ করিতে হইবে ।</p>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('মূসক - ৬.১');
$mpdf->AddPage('L');
$mpdf->WriteHTML($html);
$mpdf->Output();
