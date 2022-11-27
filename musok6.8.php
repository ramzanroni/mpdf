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
            <p style="text-align: right;">মূসক - ৬.৮</p>
            <p style="text-align: center;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার </p>
            <p style="text-align: center;">জাতীয় রাজস্ব বোর্ড </p>
            <p style="text-align: center; font-weight: bold;">ডেবিট  নোট </p>
            <p style="text-align: center;">[বিধি ৪০ উপবিধি (১) এর দফা (ছ) দ্রষ্টব্য ]</p><br>
            <p style="text-align: center;">উৎসে কর কর্তনকারী সত্তার ঠিকানা:</p>            
        </div>
        <div class="header">
            <div class="dividedDiv">
            <p style="text-align: left;">ফেরত প্রদানকারী ব্যক্তির -</p><br>
            <p style="text-align: left;">নাম:  </p><br>
            <p style="text-align: left;">বিআইএন:  </p><br>
            <p style="text-align: left;">মূল চালান নম্বর:  </p><br>
            <p style="text-align: left;">মূল চালান নম্বর:  </p><br>
            </div>
            <div class="dividedDiv">
            <p style="text-align: left;">ফেরত গ্রহণকারী ব্যক্তির -</p><br>
            <p style="text-align: left;">নাম:  </p><br>
            <p style="text-align: left;">বিআইএন:  </p><br>
            <p style="text-align: left;">ডেবিট নোট নম্বর:  </p><br>
            <p style="text-align: left;">ইস্যুর তারিখ:  </p><br>
            <p style="text-align: left;">ইস্যুর সময়:  </p><br>
            </div>
        </div>
        <div class="header">
            <p style="text-align: center;">সরবরাহের বিবরণ </p>
        </div>
        <div class="header">
            <table>
                <tr>
                    <td colspan="1">ক্রমিক সংখ্যা </td>
                    <td colspan="4">ফেরতপ্রাপ্ত সরবরাহের বিবরণ  </td>
                    <td colspan="2">সরবরাহের একক </td>
                    <td colspan="2">পরিমান </td>
                    <td colspan="2">একক মূল্য ১(টাকায়) </td>
                    <td colspan="2">মোট মূল্য (টাকায়)</td>
                </tr>
                <tr>
                <td colspan="1">(১)</td>
                <td colspan="4">(২)</td>
                <td colspan="2">(৩)</td>
                <td colspan="2">(৪)</td>
                <td colspan="2">(৫)</td>
                <td colspan="2">(৬)</td>
                </tr>
                <tr>
                    <td colspan="1"></td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="9"></td>
                    <td colspan="2" style="text-align: left;">
                        <p style="text-align: left;">মোট মূল্য</p>
                        <p style="text-align: left;">বাদ কর্তন:</p>
                        <p style="text-align: left;">মূসকসহ মূল্য </p>
                        <p style="text-align: left;">মূসকের পরিমান </p>
                        <p style="text-align: left;">সম্পূরক শুল্কের পরিমান </p>
                        <p style="text-align: left;">মোট কর</p>                         
                    </td>
                    <td colspan="2"></td>
                </tr>                
            </table>
            <p>ফেরতের কারণ </p>
            <table>
                <tr>
                    <td>
                    </td>
                </tr>
            </table>
        </div>
        <div class="header">
            <p>ক্ষমতাপ্রাপ্ত ব্যক্তির স্বাক্ষর-</p><br><br><br>
            
            <p>১ প্রতি একক পণ্য / সেবার মূসক ও সম্পূরক শুল্ক সহ মূল্য।<br>
            ২ ফেরত প্রদানের জন্য কোনো কর্তন থাকিলে উহার পরিমান ।<br>
            ৩ মূসক ও সম্পূরক শুল্কের যোগফল ।</p><br><br>

            <p>১ এসআরও নং-১৫৯ - আইন/২০১৭/০২- মূসক, তারিখ: ১ জুন, ২০১৭ দ্বারা প্রতিস্থাপিত ।</p>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('মূসক - ৬.১');
$mpdf->WriteHTML($html);
$mpdf->Output();
