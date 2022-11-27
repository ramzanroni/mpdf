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
            <p style="text-align: center;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার </p>
            <p style="text-align: center;">জাতীয় রাজস্ব বোর্ড </p>
        </div>
        <div class="header">
            <table>
                <tr>
                    <td style="text-align: right; border-bottom:none;" colspan="21">মূসক - ৪.৩</td>
                </tr>
                <tr>
                    <td colspan="21" style="text-align:center; border-top:none; border-bottom:none;">
                        <p style="text-align: center; font-weight: bold;">উপকরণ - উৎপাদ সহগ (Input-Output Coefficient) ঘোষণা <br> (বিধি ২১ দ্রষ্টব্য ) </p>
                    </td>
                </tr>
                ><tr>
                    <td colspan="21" style="text-align:center; border-top:none;">
                        <p style="text-align:left; font-weight: bold;">প্রতিষ্ঠানের নাম:</p>
                        <p style="text-align:left; font-weight: bold;">ঠিকানা:</p>
                        <p style="text-align:left; font-weight: bold;">বিন:</p>
                        <p style="text-align:left; font-weight: bold;">দাখিলের তারিখ:</p>
                        <p style="text-align:left; font-weight: bold;">ঘোষিত সহগ অনুযায়ী পণ্য/সেবার প্রথম সরবরাহের তারিখ :</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">ক্রমিক সংখ্যা </td>
                    <td rowspan="2">পণ্যের এইস এস কোড /সেবা কোড </td>
                    <td rowspan="2">সরবরাহতব্য পণ্য /সেবাই নাম ও বর্ণনা (প্রযোজ্য ক্ষেত্রে ব্র্যান্ড নাম সহ )</td>
                    <td rowspan="2">সরবরাহের একক </td>
                    <td colspan="8">একক পণ্য/সেবা সরবরাহে ব্যবহার্য যাবতীয় উপকরণের/কাঁচামালের ও প্যাকিং সামগ্রীর বিবরণ, পরিমান ও ক্রয়মূল্য (উপকরণভিত্তিক অপচয়ের শতকরা হার সহ )</td>
                    <td colspan="3">মূল্য সংযোজনের বিবরণ </td>
                    <td colspan="1">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="1">বিবরণ</td>
                    <td colspan="2">অপচয়সহ পরিমান </td>
                    <td colspan="1">ক্রয় মূল্য </td>
                    <td colspan="2">অপচয়ের পরিমান</td>
                    <td colspan="2">শতকরা হার </td>
                    <td colspan="2">মূল্য সংযোজনের খাত </td>
                    <td colspan="1">মূল্য</td>
                    <td colspan="1"></td>
                </tr>
                <tr>
                    <td colspan="1">(১)</td>
                    <td colspan="1">(২)</td>
                    <td colspan="1">(৩)</td>
                    <td colspan="1">(৪)</td>
                    <td colspan="1">(৫)</td>
                    <td colspan="2">(৬)</td>
                    <td colspan="1">(৭)</td>
                    <td colspan="2">(৮)</td>
                    <td colspan="2">(৯)</td>
                    <td colspan="2">(১০)</td>
                    <td colspan="1">(১১)</td>
                    <td colspan="1">(১২)</td>
                </tr>
            </table>
        </div>
        <div class="header">
            <p style="font-weight: bold;">বিশেষ দ্রষ্টব্যঃ </p>
            <p>১। যেকোন পণ্য বা সেবা সরবরাহের পূর্ববর্তী ১৫ দিনের মধ্যে অনলাইনে মূসক কম্পিউটার সিস্টেমে বা সংশ্লিষ্ট বিভাগীয় কর্মকর্তার দপ্তরে উপকরণ -উৎপাদ সহগ ঘোষণা দাখিল করিতে হইবে ।</p>
            <p>২। পণ্য মূল্য বা মোট উপকরণ/কাঁচামালের মূল্য ৭.৫% এর বেশি পরিবর্তন হইলে নতুন ঘোষণা দাখিল করিতে হইবে ।</p>
            <p>৩। উপকরণ ক্রয়ের স্বপক্ষে প্রামাণিক দলিল হিসাবে বিল অব এন্টি বা চালানপত্রের কপি সংযুক্ত করিতে হইবে ।</p>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('Journal Printing');
$mpdf->AddPage('L');
$mpdf->WriteHTML($html);
$mpdf->Output();
