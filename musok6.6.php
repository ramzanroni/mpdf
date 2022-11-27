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
    .dividedDiv{
        width:50%;
        float:left;
    }

</style>

<body>
    <div class="main-div">
        <div class="header">
            <p style="text-align: right;">মূসক - ৬.৬</p>
            <p style="text-align: center;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার </p>
            <p style="text-align: center;">জাতীয় রাজস্ব বোর্ড </p>
            <p style="text-align: center;">উৎসে কর কর্তন সনদপত্র  </p>
            <p style="text-align: center;">[বিধি ৪০ উপবিধি (১) এর দফা (চ) দ্রষ্টব্য ]</p><br>
            <p style="text-align: center;">উৎসে কর কর্তনকারী সত্তার ঠিকানা:</p>            
        </div>
        <div class="header">
            <div class="dividedDiv">
            <p style="text-align: left;">উৎসে কর কর্তনকারী সত্তার  বিআইএন (প্রযোজ্য ক্ষেত্রে):</p><br>
            <p style="text-align: left;">উৎসে কর কর্তন সনদপত্র নং:</p><br>
            </div>
            <div class="dividedDiv">
            <br><br>
            <p style="text-align: left;">জারির তারিখ:</p><br>
            </div>
        </div>
        <div class="header">
            <p style="text-align: left;">এই মর্মে প্রত্যয়ন প্রত্যায়ন করা যাইতেছে যে, আইনের ধারা ৪৯ অনুযায়ী উৎসে কর কর্তনযোগ্য সরবরাহ হইতে প্রযোজ্য মূল্য সংযোজন কর বাবদ উৎসে কর কর্তন করা হইলো । কর্তনকৃত মূল্য সংযোজন কর্মের অর্থ বুক ট্রান্সফার/ট্রেজারি চালান/দলিলপত্রে বৃদ্ধিকারী সমন্বয়ের মাধ্যমে সহকারী কোষাগারে প্রদান করা হইয়াছে । কপি এতদসঙ্গে সংযুক্ত করা হইলো (প্রযোজ্য ক্ষেত্রে )</p><br><br>
        </div>
        <div class="header">
            <table>
                <tr>
                    <td rowspan="2">ক্রমিক সংখ্যা </td>
                    <td colspan="4">সরবরাহকারীর </td>
                    <td colspan="4">সংশ্লিষ্ট কর চালানপত্র </td>
                    <td colspan="2" rowspan="2">মোট সরবরাহ মূল্য১ (টাকা)</td>
                    <td colspan="2" rowspan="2">মূসকের পরিমান (টাকা )</td>
                    <td colspan="2" rowspan="2">উৎসে কর্তনকৃত মূসকের পরিমান (টাকা )</td>
                </tr>
                <tr>
                   <td colspan="2">নাম </td>
                   <td colspan="2">বিআইএন </td>
                   <td colspan="2">নম্বর</td>
                   <td colspan="2">ইস্যুর তারিখ</td>
                </tr>
                <tr>
                    <td colspan="1">(১)</td>
                    <td colspan="2">(২)</td>
                    <td colspan="2">(৩)</td>
                    <td colspan="2">(৪)</td>
                    <td colspan="2">(৫)</td>
                    <td colspan="2">(৬)</td>
                    <td colspan="2">(৭)</td>
                    <td colspan="2">(৮)</td>
                </tr>
                <tr>
                    <td colspan="1"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="9"></td>
                    <td colspan="2">0</td>
                    <td colspan="2">0</td>
                    <td colspan="2">0</td>
                </tr>
                
            </table>
        </div>
        <div class="header">
            <p>ক্ষমতাপ্রাপ্ত কর্মকর্তার স্বাক্ষর-</p><br><br>
            <p>স্বাক্ষর: ................</p>
            <p>নাম: ..................</p><br>
            <p>১ মূসক ও সম্পূরক শুল্ক (যদি থাকে ) সহ মূল্য ।</p>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('মূসক - ৬.১');
$mpdf->AddPage('L');
$mpdf->WriteHTML($html);
$mpdf->Output();
