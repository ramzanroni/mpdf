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

    .logo {
        width: 30%;
        float: left;
    }

    .middleDiv {
        width: 70%;
        float: left;
    }

    .info {
        width: 50%;
        float: left;
    }

    .bdLogo {
        width: 55px;
        height: 55px;
        padding-left: 200px;
    }

    .musok {
        border: 1px solid;
        padding: 5px;
    }

</style>

<body>
    <div class="main-div">
        <div class="header">
            <div class="middleDiv">
                <p style="text-align: center; margin-left: 300px;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার </p>
                <p style="text-align: center; margin-left: 300px;">জাতীয় রাজস্ব বোর্ড </p>
            </div>
            <div class="logo">
                <span class="musok">মূসক - ৬.৪</span>
            </div>

        </div>
        <div class="header">
            <p style="text-align: center; font-weight: bold;">চুক্তিভিত্তিক উৎপাদনের চালানপত্র</p>
            <p style="text-align: center; font-weight: bold;">[বিধি ৪০ এর উপ-বিধি(১) এর দফা (ঘ) দ্রষ্টব্য]</p>
        </div>
        <div class="header">
            <div class="info">
                <p style="text-align: left;">গ্রহীতার নাম:</p>
                <p style="text-align: left;">গ্রহীতার বিআইএন:</p>
                <p style="text-align: left;">গন্তব্যস্থল: </p>
            </div> 
            
            <div class="info">
                <p style="text-align: left;">নিবন্ধিত ব্যক্তির নাম: </p>
                <p style="text-align: left;">নিবন্ধিত ব্যক্তির বিআইএন: </p>
                <p style="text-align: left;">চালানপত্র ইস্যুর ঠিকানা: </p>
                <p style="text-align: left;">চালানপত্র নম্বর: </p>
                <p style="text-align: left;">ইস্যুর তারিখ: </p>
                <p style="text-align: left;">ইস্যুর সময়:</p>
            </div>
        </div>

        <div class="header">
            <table>
                <tr>
                    <td colspan="1">ক্রমিক সংখ্যা</td>
                    <td colspan="4">প্রকৃতি (উপকরণ বা উৎপাদিত পণ্য)</td>
                    <td colspan="4">পণ্যের বিবরণ </td>
                    <td colspan="2">পরিমান </td>
                    <td colspan="2">মন্তব্য </td>
                </tr>
                <tr>
                    <td colspan="1">(১)</td>
                    <td colspan="4">(২)</td>
                    <td colspan="4">(৩)</td>
                    <td colspan="2">(৪)</td>
                    <td colspan="2">(৫)</td>
                </tr>
                <tr>
                    <td colspan="1">(১)</td>
                    <td colspan="4">(২)</td>
                    <td colspan="4">(৩)</td>
                    <td colspan="2">(৪)</td>
                    <td colspan="2">(৫)</td>
                </tr>
                <tr>
                    <td colspan="1">(১)</td>
                    <td colspan="4">(২)</td>
                    <td colspan="4">(৩)</td>
                    <td colspan="2">(৪)</td>
                    <td colspan="2">(৫)</td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td colspan="4"></td>
                <td colspan="4">সর্বমোট </td>
                <td colspan="2"></td>
                <td colspan="2"></td>
            </tr>
                

            </table>
        </div>
        <div class="header" style="margin-top: 100px;">
            <span class="footer">
            <span> দায়িত্বপ্রাপ্ত ব্যক্তির স্বাক্ষর:</span><br>
            <span>নাম:</span>
            </span>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('মূসক - ৬.১');
$mpdf->AddPage('L');
$mpdf->WriteHTML($html);
$mpdf->Output();
