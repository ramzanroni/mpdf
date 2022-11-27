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
                    <td style="text-align: right; border-bottom:none;" colspan="30">মূসক - ৬.২.১</td>
                </tr>
                <tr>
                    <td colspan="30" style="text-align:center; border-top:none;">
                        <p style="text-align: center;">প্রতিষ্ঠানের নাম, ঠিকানা ও ব্যবসা সনাক্তকরণ সংখ্যা </p>
                        <p style="text-align: center;">ক্রয় বিক্রয় হিসাব </p>
                        <p style="text-align: center;">(পণ্য বা সেবা প্রক্রিয়াকরণে সম্পৃক্ত নয় (ব্যবসায়ী) এমন নিবন্ধিত বা তালিকাভুক্ত ব্যক্তির জন্য প্রযোজ্য )</p>
                        <p style="text-align: center;">[বিধি ৪০(১) এর দফা (ক ) এবং ৪১ এর দফা (ক ) দ্রষ্টব্য ]</p>
                    </td>
                </tr>

                <tr>
                    <td colspan="1">ক্রমিক সংখ্যা </td>
                    <td colspan="1">তারিখ </td>
                    <td colspan="2">বিক্রয়যোগ্য পণ্যের প্রারম্ভিক জের </td>
                    <td colspan="2">ক্রয় </td>
                    <td colspan="2">মোট পণ্য </td>
                    <td colspan="4">বিক্রেতার তথ্য </td>
                    <td colspan="3">ক্রয় চালানপত্র/বিল অব এন্ট্রির বিবরণ </td>
                    <td colspan="5">বিক্রিত/সরবরাহকৃত পণ্যের বিবরণ</td>
                    <td colspan="4">ক্রেতার তথ্য</td>
                    <td colspan="2">বিক্রয় চালানপত্রের বিবরণ </td>
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
                    <td rowspan="2">করযোগ্য মূল্য(সকল প্রকার কর ব্যতীত )</td>
                    <td rowspan="2" colspan="1" >সম্পূরক শুল্ক (যদি থাকে )</td>
                    <td colspan="2" rowspan="2">মূসক</td>
                    <td colspan="1" rowspan="2">নাম </td>
                    <td colspan="1" rowspan="2">ঠিকানা </td>
                    <td colspan="2" rowspan="2">নিবন্ধন /তালিকাভুক্তি /জাতীয় পরিচয়পত্র নং</td>
                    <td colspan="1" rowspan="2">নম্বর </td>
                    <td colspan="1" rowspan="2">তারিখ </td>
                    <td colspan="1" rowspan="2">পরিমান (একক )</td>
                    <td colspan="1" rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত )</td>
                </tr>
                <tr style="border: none;">
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
                    <td colspan="2">(১৮)</td>
                    <td colspan="1">(১৯)</td>
                    <td colspan="1">(২০)</td>
                    <td colspan="2">(২১)</td>
                    <td colspan="1">(২২)</td>
                    <td colspan="1">(২৩)</td>
                    <td colspan="1">(২৪)</td>
                    <td colspan="1">(২৫)</td>
                    <td colspan="1">(২৬)</td>
                </tr>
                <tr>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="2"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="2"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="2"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                </tr>
            </table>
        </div>
        <div class="header">
            <p style="font-weight: bold;">বিশেষ দ্রষ্টব্যঃ </p>
            <p>* যেইক্ষেত্রে অনিবন্ধিত ব্যক্তির নিকট হইতে পণ্য ক্রয় বা অনিবন্ধিত ব্যক্তির নিকট পণ্য বিক্রয় করা হইবে সেইক্ষেত্রে উক্ত ব্যক্তির পূর্ণাঙ্গ নাম, ঠিকানা ও জাতীয়  পরিচয়পত্র নং যথাযথভাবে সংশ্লিষ্ট কলামে [(৯),(১০),(১১),(১৯),(২০)ও(২১)] আবশ্যিকভাবে উল্লেখ করিতে হইবে  ।</p>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('মূসক - ৬.১');
$mpdf->AddPage('L');
$mpdf->WriteHTML($html);
$mpdf->Output();
