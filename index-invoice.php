<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'default_font' => 'nikosh'
]);
// // function printJournal($trnNo, $typeNo, $db, $dbase = NULL)
// // {
// //     if (!$dbase) {
// //         $dbase = $_SESSION["DatabaseName"];
// //     }

// //     $SQL = 'SELECT ' . $dbase . '.gltrans.type, ' . $dbase . '.gltrans.trandate, ' . $dbase . '.gltrans.periodno, ' . $dbase . '.gltrans.account, ' . $dbase . '.gltrans.narrative,';
// //     $SQL .= '' . $dbase . '.gltrans.amount, ' . $dbase . '.gltrans.posted,' . $dbase . '.chartmaster.modify_code, ' . $dbase . '.chartmaster.accountname, ' . $dbase . '.gltrans.tag, ' . $dbase . '.tags.tagdescription, ' . $dbase . '.gltrans.userid as postedby, ' . $dbase . '.gltrans.create_time FROM ' . $dbase . '.gltrans, ' . $dbase . '.chartmaster, ' . $dbase . '.tags ';
// //     $SQL .= 'WHERE ' . $dbase . '.gltrans.tag = ' . $dbase . '.tags.tagref and ' . $dbase . '.gltrans.account = ' . $dbase . '.chartmaster.accountcode AND ' . $dbase . '.gltrans.type="' . $typeNo . '"  AND ';
// //     $SQL .= '' . $dbase . '.gltrans.typeno = "' . $trnNo . '" ORDER BY ' . $dbase . '.gltrans.counterindex';
// //     $TransResult = DB_query($SQL, $db);
// //     include('includes/PDFStarter.php');

// //     $typeSQL = 'SELECT typename,
// //                              typeno
// //                       FROM   ' . $dbase . '.systypes
// //                       WHERE  typeid = ' . $typeNo;

// //     $TypeResult = DB_query($typeSQL, $db);

// //     if (DB_num_rows($TypeResult) == 0) {
// //         prnMsg(_('No transaction of this type with id') . ' ' . $typeNo, 'error');
// //         echo $menuUrl;
// //     } else {
// //         $myrow = DB_fetch_row($TypeResult);
// //         DB_free_result($TypeResult);
// //         $TransName = $myrow[0];
// //     }

// //     // letterhead image processing by Hasan
// //     $letterheadData = explode('/', $_SESSION['letterhead']);
// //     $letterheadData[1] = $dbase;
// //     $letterheadData = implode('/', $letterheadData);

// //     // company name processing by Hasan
// //     //$_SESSION['CompanyRecord']['coyname'];
// //     $csql = DB_fetch_assoc(DB_query("select coyname from {$dbase}.companies where coycode=1", $db));
// //     $companyName = $csql["coyname"];








$html = '<!DOCTYPE html>
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

    hr {
        height: 2px;
        background: black;
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
        border: 1px solid;
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
                <tbody>';
// while ($TransRow = DB_fetch_array($TransResult)) {
//     if ($TransRow['amount'] > 0) {
//         $DebitAmount = number_format($TransRow['amount'], 2);
//         $DebitTotal += $TransRow['amount'];
//         $CreditAmount = '';
//     } else {
//         $CreditAmount = number_format(-$TransRow['amount'], 2);
//         $CreditTotal += $TransRow['amount'];
//         $DebitAmount = '';
//     }
//     $userposted = $TransRow['postedby'];
//     $create_time = $TransRow['create_time'];
//     $journalDate = $TransRow['trandate'];
//     $pdf->line($Left_Margin, $YPos - $line_height * 2, $Left_Margin, $YPos + $line_height);
//     $pdf->line($Left_Margin + 35, $YPos - $line_height, $Left_Margin + 35, $YPos + $line_height);
//     $pdf->line($Left_Margin + 400, $YPos - $line_height * 2, $Left_Margin + 400, $YPos + $line_height);
//     $pdf->line($Left_Margin + 462, $YPos - $line_height * 2, $Left_Margin + 462, $YPos + $line_height);
//     $pdf->line($Left_Margin + 525, $YPos - $line_height * 2, $Left_Margin + 525, $YPos + $line_height);
//     $YPos -= ($line_height);


//     $pdf->line($Left_Margin, $YPos + $line_height, $Page_Width - $Right_Margin, $YPos + $line_height); // Horizantal Lines Tops
//     $LeftOvers = $pdf->addTextWrap($Left_Margin + 2, $YPos, 300 - $Left_Margin, $FontSize, $TransRow['modify_code']);
//     $LeftOvers = $pdf->addTextWrap($Left_Margin + 40, $YPos, 300 - $Left_Margin, $FontSize, $TransRow['accountname'] . ', GL Project: ' . $TransRow['tagdescription']);

//     //	$LeftOvers = $pdf->addTextWrap($Left_Margin+207,$YPos,300-$Left_Margin,$FontSize, $TransRow['narrative']);
//     $LeftOvers = $pdf->addTextWrap($Left_Margin + 200, $YPos, 300 - $Left_Margin, $FontSize, $DebitAmount, 'right');
//     $LeftOvers = $pdf->addTextWrap($Left_Margin + 263, $YPos, 300 - $Left_Margin, $FontSize, $CreditAmount, 'right');
//     $pdf->line($Left_Margin + 35, $YPos - $line_height, $Left_Margin + 35, $YPos + $line_height);
//     $YPos -= ($line_height);

//     $LeftOvers = $pdf->addTextWrap($Left_Margin + 2, $YPos, 500 - $Left_Margin, $FontSize, '/');
//     $LeftOvers = $pdf->addTextWrap($Left_Margin + 5, $YPos, 500 - $Left_Margin, $FontSize, $TransRow['tag']);
//     $LeftOvers = $pdf->addTextWrap($Left_Margin + 40, $YPos, 400 - $Left_Margin, $FontSize, $TransRow['narrative']);

//     // if clause not working //to be fixed                       if (strlen($LeftOvers)>0){
//     $YPos -= ($line_height);
//     $pdf->line($Left_Margin + 35, $YPos - $line_height, $Left_Margin + 35, $YPos + $line_height);
//     $LeftOvers = $pdf->addTextWrap($Left_Margin + 40, $YPos, 400, $FontSize, $LeftOvers);    //prints Narration line 2
//     //                        }


//     if ($YPos < 60) {
//         $pdf->line($Left_Margin, $YPos, $Page_Width - $Right_Margin, $YPos);
//         $pdf->newPage();
//         $YPos = $Page_Height;
//         $YPos -= ($line_height * 7);
//         $pdf->addJpegFromFile($letterheadData, $Left_Margin, $YPos, 0, 100);

//         $LeftOvers = $pdf->addTextWrap($Left_Margin, $YPos, 300 - $Left_Margin, $FontSize, $TransName . _(' No.') . ' ' . $trnNo);
//         $YPos -= ($line_height);
//         $DatePos = $YPos;

//         $YPos -= ($line_height * 2);
//         $pdf->line($Left_Margin, $YPos + $line_height, $Page_Width - $Right_Margin, $YPos + $line_height); // Horizantal Lines tops
//         $LeftOvers = $pdf->addTextWrap($Left_Margin + 2, $YPos, 300 - $Left_Margin, $FontSize, _('Code/Br.'));
//         $LeftOvers = $pdf->addTextWrap($Left_Margin + 40, $YPos, 300 - $Left_Margin, $FontSize, _('GL Account, GL Br. : /Description'));
//         // $LeftOvers = $pdf->addTextWrap($Left_Margin+207,$YPos,300-$Left_Margin,$FontSize, _('Description'));
//         $LeftOvers = $pdf->addTextWrap($Left_Margin + 200, $YPos, 300 - $Left_Margin, $FontSize, _('Debit'), 'right');
//         $LeftOvers = $pdf->addTextWrap($Left_Margin + 263, $YPos, 300 - $Left_Margin, $FontSize, _('Credit'), 'right');
//     }
// }

$html .= '<tr>
                            <td>1130010/1</td>
                            <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                            <td>100.00</td>
                            <td></td>
                        </tr>';
$html .= '<tr>
                            <td>1130010/1</td>
                            <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                            <td>100.00</td>
                            <td></td>
                        </tr>';
$html .= '<tr>
                            <td>1130010/1</td>
                            <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                            <td>100.00</td>
                            <td></td>
                        </tr>';
$html .= '<tr>
                            <td>1130010/1</td>
                            <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                            <td>100.00</td>
                            <td></td>
                        </tr>';
$html .= '<tr>
                            <td>1130010/1</td>
                            <td>Inventory-Stationery-CA, GL Project: None তুরস্কের কয়লাখনিতে বিস্ফোরণে</td>
                            <td>100.00</td>
                            <td></td>
                        </tr>';


// // // table footer will be here 

$html .= '<tr>
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
<td class="signTypeTD" style="width:12% !important;">
    <p> for Demo</p>
    <br>
    <br>
<hr>
</td>
<td class="signTypeTD"  style="width:12% !important;">

</td>
<td class="signTypeTD" style="width:12% !important;">
<p> Checked</p>
<br>
<br>
<hr>
</td>
<td class="signTypeTD"  style="width:12% !important;">

</td>
<td class="signTypeTD" style="width:12% !important;">
<p> Approved</p>
<br>
<br>
<hr>
</td>
<td class="signTypeTD"  style="width:12% !important;">

</td>
<td class="signTypeTD" style="width:12% !important;">
<p> Received</p>
<br>
<br>
<hr>
</td>
<td class="signTypeTD"  style="width:12% !important;">

</td>
</tr>
</table>
</div>
';
// // $usql = DB_fetch_assoc(DB_query("select realname from {$dbase}.www_users where userid='{$userposted}'", $db));
// // $userposted = (!empty($usql["realname"]) ? $usql["realname"] : $userposted);

// // $LeftOvers = $pdf->addTextWrap($Left_Margin, $YPos, 300 - $Left_Margin, $FontSize, 'Created on : ' . date("d/m/Y h:i:s a", strtotime($create_time)) . ' hr. By: ' . $userposted);
// // $LeftOvers = $pdf->addTextWrap($Left_Margin, $DatePos, 300 - $Left_Margin, $FontSize, _('Date') . ' ' . ConvertSQLDate($journalDate));

// // date_default_timezone_set('Asia/Dhaka');
// // $date = date('d/m/Y h:i:s a', time());
// // $pdf->addTextWrap($Left_Margin, $YPos - 10, 300 - $Left_Margin, $FontSize, 'Printed on : ' . $date);
$html .= '<div class="header">
<p>Created on : 13/10/2022 05:02:31 pm hr. user: admin</p>
<p>Printed on : 24/10/2022 02:26:07 pm</p>
</div>
</div>
</body>

</html>';


// // $usql = DB_fetch_assoc(DB_query("select realname from {$dbase}.www_users where userid='{$userposted}'", $db));
// // $userposted = (!empty($usql["realname"]) ? $usql["realname"] : $userposted);

// // $LeftOvers = $pdf->addTextWrap($Left_Margin, $YPos, 300 - $Left_Margin, $FontSize, 'Created on : ' . date("d/m/Y h:i:s a", strtotime($create_time)) . ' hr. By: ' . $userposted);
// // $LeftOvers = $pdf->addTextWrap($Left_Margin, $DatePos, 300 - $Left_Margin, $FontSize, _('Date') . ' ' . ConvertSQLDate($journalDate));

// // date_default_timezone_set('Asia/Dhaka');
// // $date = date('d/m/Y h:i:s a', time());
// // $pdf->addTextWrap($Left_Margin, $YPos - 10, 300 - $Left_Margin, $FontSize, 'Printed on : ' . $date);



$mpdf->SetTitle('Journal Printing');

$mpdf->WriteHTML($html);
$mpdf->Output();
// }
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