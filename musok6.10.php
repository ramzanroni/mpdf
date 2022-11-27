<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'default_font' => 'nikosh', 'mode' => 'utf-8'
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
            <p style="text-align: right;">মূসক - ৬.১০</p>
            <p style="text-align: center;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার </p>
            <p style="text-align: center;">জাতীয় রাজস্ব বোর্ড </p>
            <p style="text-align: center; font-weight: bold;">২(দুই) লক্ষ টাকার অধিক মূল্যমানের ক্রয়-বিক্রয় চালানপত্রের তথ্য</p>
            <p style="text-align: center;">[বিধি ৪২ এর উপ-বিধি (১) দ্রষ্টব্য]</p><br>         
        </div>
        <div class="header">
            <div class="dividedDiv">
            <p style="text-align: left;">নিবন্ধিত/তালিকাভুক্ত ব্যক্তির নাম: ..............................................</p><br>

            </div>
            <div class="dividedDiv">
            <p style="text-align: left;">বিআইএন: ..............................................</p><br>
            </div>
        </div>
        <div class="header">
            <p style="text-align: center;">সরবরাহের বিবরণ </p>
        </div>
        <div class="header">
        <p>অংশ -ক: ক্রয় হিসাব তথ্য </p>
            <table>
                <tr>
                    <td colspan="1" rowspan="2">ক্রমিক সংখ্যা </td>
                    <td colspan="12">ক্রয় </td>
                </tr>
                <tr>
                    <td colspan="2">চালানপত্র নং </td>
                    <td colspan="2">ইস্যুর তারিখ</td>
                    <td colspan="2"> মূল্য</td>
                    <td colspan="2">বিক্রেতার নাম</td>
                    <td colspan="2">বিক্রেতার ঠিকানা</td>
                    <td colspan="2">বিক্রেতার বিআইএন / জাতীয় পরিচয় নং *</td>
                </tr>                
                <tr>
                    <td colspan="1">(১)</td>
                    <td colspan="2">(২)</td>
                    <td colspan="2">(৩)</td>
                    <td colspan="2">(৪)</td>
                    <td colspan="2">(৫)</td>
                    <td colspan="2">(৬)</td>
                    <td colspan="2">(৬)</td>
                </tr>
                <tr>
                    <td colspan="5">সর্বমোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>                
            </table>
            <br>
            <p>অংশ -ক: বিক্রয় হিসাব তথ্য </p>
            <table>
                <tr>
                    <td colspan="1" rowspan="2">ক্রমিক সংখ্যা </td>
                    <td colspan="12">বিক্রয় </td>
                </tr>
                <tr>
                    <td colspan="2">চালানপত্র নং </td>
                    <td colspan="2">ইস্যুর তারিখ</td>
                    <td colspan="2"> মূল্য</td>
                    <td colspan="2">ক্রেতার নাম</td>
                    <td colspan="2">ক্রেতার ঠিকানা</td>
                    <td colspan="2">ক্রেতার বিআইএন / জাতীয় পরিচয় নং *</td>
                </tr>                
                <tr>
                    <td colspan="1">(১)</td>
                    <td colspan="2">(২)</td>
                    <td colspan="2">(৩)</td>
                    <td colspan="2">(৪)</td>
                    <td colspan="2">(৫)</td>
                    <td colspan="2">(৬)</td>
                    <td colspan="2">(৬)</td>
                </tr>
                <tr>
                    <td colspan="5">সর্বমোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>                
            </table>
            
        </div>
        <div class="header">
            <p>দায়িত্বপ্রাপ্ত ব্যক্তির নাম ও স্বাক্ষর:</p>
            <p>নাম:</p>
            <p>তারিখ:</p><br><br>
            
            
            
            <p style="font-weight: bold;">**যে কোনো অনিবন্ধিত ব্যক্তির নিকট হইতে পণ্য/সেবা ক্রয় করা হইবে বা অনিবন্ধিত ব্যক্তির নিকট পণ্য/সেবা বিক্রয় করা হইবে সেই ক্ষেত্রে উক্ত ব্যক্তির পূনাঙ্গ নাম, ঠিকানা ও জাতীয় পরিচয়পত্র নম্বর যথাযথ ভাবে সংশ্লিষ্ট কলাম [(৭),(৮)ও (৯)] এ আবশ্যিকভাবে উল্লেখ করিতে হইবে ।  </p>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('মূসক - ৬.১');
$mpdf->WriteHTML($html);
$mpdf->Output();
