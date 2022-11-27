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

    .subDIv {
        width: 50%;
        float: left;
    }

    .text-div {
        width: 5%;
        float: left;
    }

    .box-div {
        width: 95%;
        float: left;
    }
</style>

<body>
    <div class="main-div">

        <div class="header">
            <p style="text-align: center;">চালান ফরম </p>
            <div class="subDIv">
                <p style="text-align: right; font-weight:bold; margin-right:40px;">টি , আর ফরম নং ৬(এস, আয় ৩৭ দ্রষ্টব্য )</p>
            </div>
            <div class="subDIv">
                <table>
                    <tr>
                        <td>১ম (মূল) কপি </td>
                        <td>২য় কপি </td>
                        <td>৩য় কপি </td>
                    </tr>
                </table>
            </div>
            <p style="margin-top: 50px;">চালান নং:................................................................................................... তারিখ: ............................................................... ২০১৯-০৮-২৮....................................................................................</p>
            <p>বাংলাদেশ ব্যাংক / সোনালী ব্যাংকের .............................................. Sonali Bank ltd. .....................................................জেলায় .......................Sonali Bank e-payment............................................................শাখার টাকা জমা দেয়ার চালান </p>

        </div>
        <div class="header">
            <div class="text-div">কোড নং </div>
            <div class="box-div">
                <div style="width: 25px; height: 25px; float:left;">
                    <table style="width: 25px;">
                        <tr style="width:25x; height: 25px;">
                            <td style="width:25x; height: 25px;"></td>
                        </tr>
                    </table>
                </div>

                <div style="width: 100px; height:25px; float:left; margin-left: 10px;">
                    <table>
                        <tr style="width:25px; height: 25px;">
                            <td style="width:25x; height: 25px;"></td>
                            <td style="width:25x; height: 25px;"></td>
                            <td style="width:25x; height: 25px;"></td>
                            <td style="width:25x; height: 25px;"></td>
                        </tr>
                    </table>
                </div>
                <div style="width: 100px; height:25px; float:left; margin-left: 10px;">
                    <table>
                        <tr style="width:25px; height: 25px;">
                            <td style="width:25x; height: 25px;"></td>
                            <td style="width:25x; height: 25px;"></td>
                            <td style="width:25x; height: 25px;"></td>
                            <td style="width:25x; height: 25px;"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="header">
            <table>
                <tr>
                    <td colspan="16">জমা প্রদানকারী কতৃক পূরণ করিতে হইবে </td>
                    <td colspan="3">টাকার অংক </td>
                    <td rowspan="2">বিভাগের নাম , চালানের পৃষ্ঠাঙ্কনকারী কর্মকর্তার নাম, পদবী ও দপ্তর </td>
                </tr>
                <tr>
                    <td colspan="4">যাহার মারফত প্রদত্ত হইল তাহার নাম ও ঠিকানা ।</td>
                    <td colspan="4">যে ব্যাক্তি / প্রতিষ্ঠানের পক্ষ হইতে টাকা প্রদত্ত হইলো তাহার নাম, পদবী ও ঠিকানা ।</td>
                    <td colspan="4">কি বাবদ জমা দেয়া হইলো তাহার বিবরণ ।</td>
                    <td colspan="4">মুদ্রা ও নোটের বিবরণ / ড্রাফট, পে-অর্ডার ও চেকের বিবরণ ।</td>
                    <td colspan="2">টাকা</td>
                    <td colspan="1"> পয়সা </td>
                </tr>
                <tr>
                    <td colspan="4">Name: Address:</td>
                    <td colspan="4">Name: Divine IT Limited Address:</td>
                    <td colspan="4">Monthly return</td>
                    <td colspan="4"></td>
                    <td colspan="2">১৫০,০০০.০০</td>
                    <td colspan="1">০০.০০</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                    <td colspan="4">মোট টাকা </td>
                    <td colspan="7">১৫০,০০০.০০</td>
                </tr>
                <tr>
                    <td colspan="14" style="text-align: left;">টাকা (কথায় )<br>One Lakh and Fifty Thousand Taka only</td>
                    <td colspan="9"></td>
                </tr>
                <tr>
                    <td colspan="14" style="text-align: left;">টাকা পাওয়া গেল </td>
                    <td colspan="9"></td>
                </tr>
                <tr>
                    <td colspan="10">
                        তারিখ <span> ২০১৯-০৮-২৮</span>
                    </td>
                    <td colspan="13">
                        ম্যানেজার<br> বাংলাদেশ ব্যাংক / সোনালী ব্যাংক
                    </td>
                </tr>
            </table>
        </div>
        <div class="header">
            <p style="font-weight: bold;">বিশেষ দ্রষ্টব্যঃ </p>
            <p>১। সংশ্লিষ্ট দপ্তরের সাথে যোগাযোগ করিয়া সঠিক কোড নম্বর জানিয়া লইবেন ।</p>
            <p>২। *যে সকল ক্ষেত্রে কর্মকর্তা কতৃক পৃষ্ঠাঙ্কন প্রয়োজন, সে সকল ক্ষেত্রে প্রযোজ্য হইবে ।</p><br>
            <p>বাংলাদেশ সরকারের ই-সিটিজেন সার্ভিস এপ্লিকেশন থেকে মুদ্রিত </p>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('Journal Printing');
$mpdf->AddPage('L');
$mpdf->WriteHTML($html);
$mpdf->Output();
