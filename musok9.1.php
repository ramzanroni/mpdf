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

    .dividedDiv {
        width: 50%;
        float: left;
    }
</style>

<body>
    <div class="main-div">
        <div class="header">
            <p style="text-align: right;">মূসক - ৯.১</p>
            <p style="text-align: center;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার </p>
            <p style="text-align: center;">জাতীয় রাজস্ব বোর্ড </p><br>
            <p style="text-align: center; font-weight: bold;">মূল্য সংযোজন কর দাখিলপত্র </p>
            <p style="text-align: center;">[বিধি ৪৭ এর উপ-বিধি (১) দ্রষ্টব্য]</p><br>
        </div>
        <div class="header">
            <table>
                <tr>
                    <td colspan="10">অংশ-১: করদাতার তথ্য </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left;">(১) ব্যবসায় সনাক্তকরণ সংখ্যা </td>
                    <td colspan="1">:</td>
                    <td colspan="6" style="text-align: left;"></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left;">(২) করদাতার নাম </td>
                    <td colspan="1">:</td>
                    <td colspan="6" style="text-align: left;"></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left;"> (৩) করদাতার ঠিকানা </td>
                    <td colspan="1">:</td>
                    <td colspan="6" style="text-align: left;"></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left;">(৪)ব্যবসার প্রকৃতি </td>
                    <td colspan="1">:</td>
                    <td colspan="6" style="text-align: left;"></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left;">(৫) অর্থনৈতিক কার্যক্রম এর প্রকৃতি </td>
                    <td colspan="1">:</td>
                    <td colspan="6" style="text-align: left;"></td>
                </tr>

            </table>
            <br>
            <table>
                <tr>
                    <td colspan="10">অংশ-১: করদাতার তথ্য </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left;">(১) কর মেয়াদ </td>
                    <td colspan="1">:</td>
                    <td colspan="6" style="text-align: left;">July / 2019</td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left;">(২) বিগত কর মেয়াদে কোনো কার্যক্রম সম্পাদিত হইয়াছে কি?</td>
                    <td colspan="1">:</td>
                    <td colspan="6" style="text-align: left;">
                        <div class="header">
                            <div style="width: 50%; float:left;">
                                <div style="width: 25px; height: 25px; float:left;">
                                    <table style="width: 40px;">
                                        <tr style="width:25x; height: 25px;">
                                            <td style="width:25x; height: 25px;"></td>
                                            <td style="width:25x; height: 25px;  border:none;">হ্যা</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div style="width: 50%; float:left; margin-top:15px;">
                                <div style="width: 25px; height: 25px; float:left;">
                                    <table style="width: 40px;">
                                        <tr style="width:25x; height: 25px;">
                                            <td style="width:25x; height: 25px;"></td>
                                            <td style="width:25x; height: 25px; border:none;">না </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <p style="text-align:center;">[যদি না হয় তাহা হইলে অংশ-১,২ এবং ১০ পূরণ করুন ]</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: left;"> (৩) পেশের তারিখ </td>
                    <td colspan="1">:</td>
                    <td colspan="6" style="text-align: left;">
                    <div style="width: 100px; height:25px; float:left; margin-left: 10px;">
                        <table>
                            <tr style="width:25px; height: 25px;">
                                <td style="width:25x; height: 25px;"></td>
                                <td style="width:25x; height: 25px;"></td>
                                <td style="width:25x; height: 25px;">/</td>
                                <td style="width:25x; height: 25px;"></td>
                                <td style="width:25x; height: 25px;"></td>
                                <td style="width:25x; height: 25px;">/</td>
                                <td style="width:25x; height: 25px;"></td>
                                <td style="width:25x; height: 25px;"></td>
                                <td style="width:25x; height: 25px;"></td>
                                <td style="width:25x; height: 25px;"></td>
                            </tr>
                        </table>
                    </div>
                    </td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td colspan="12">অংশ-৩: সরবরাহ প্রদান -প্রদেয় কর </td>
                    <td colspan="2" rowspan="2"></td>
                </tr>
                <tr>
                    <td colspan="4">সরবরাহের প্রকৃতি </td>
                    <td colspan="2">নোট</td>
                    <td colspan="2">মূল্য (ক)</td>
                    <td colspan="2">মূসক (খ)</td>
                    <td colspan="2">এসডি (গ)</td>                    
                </tr>
                <tr>
                    <td colspan="2" rowspan="2" style="text-align: left;" >শুন্যহার বিশিষ্ট পণ্য/সেবা </td>
                    <td colspan="2">সরাসরি রপ্তানি </td>
                    <td colspan="2">১</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>                    
                    <td colspan="2">সাবফর্ম-ক </td>                    
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;">প্রচ্ছন্ন রপ্তানি </td>
                    <td colspan="2">২</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>                    
                    <td colspan="2">সাবফর্ম-ক </td>                    
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left;">অব্যাহতিপ্রাপ্ত পণ্য/সেবা </td>
                    <td colspan="2">৩</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>                    
                    <td colspan="2">সাবফর্ম-ক</td>                    
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left;">আদর্শ হারের পণ্য/সেবা </td>
                    <td colspan="2">৪</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>                    
                    <td colspan="2">সাবফর্ম-ক</td>                    
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left;">সর্বোচ্চ খুচরা মূলভিত্তিক পণ্য/সেবা </td>
                    <td colspan="2">৫</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>                    
                    <td colspan="2">সাবফর্ম-ক</td>                    
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left;">বিশেষ স্কীমভিত্তিক পণ্য/সেবা </td>
                    <td colspan="2">৬</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>                    
                    <td colspan="2">সাবফর্ম-ক</td>                    
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left;">আদর্শ করহার ব্যতীত ভিন্ন করহার ভিত্তিক পণ্য/সেবা</td>
                    <td colspan="2">৭</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>                    
                    <td colspan="2">সাবফর্ম-ক</td>                    
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left;">খুচরা/পাইকারি ভিত্তিক সরবরাহ </td>
                    <td colspan="2">৮</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>                    
                    <td colspan="2">সাবফর্ম-ক</td>                    
                </tr>
                <tr>
                    <td colspan="4" style="font-weight:bold; text-align: left;">মোট বিক্রয়মূল্য ও মোট প্রদেয় কর </td>
                    <td colspan="2" style="font-weight:bold;">৯</td>
                    <td colspan="2" style="font-weight:bold;">0.00</td>
                    <td colspan="2" style="font-weight:bold;">0.00</td>
                    <td colspan="2" style="font-weight:bold;">0.00</td>                    
                    <td colspan="2"></td>                    
                </tr>
            </table><br>

            <table>
                <tr>
                    <td colspan="12">অংশ-৪: ক্রয় - উপকরণ কর </td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="6">ক্রয়ের প্রকৃতি </td>
                    <td colspan="2">নোট</td>
                    <td colspan="2">মূল্য (ক)</td>
                    <td colspan="2">মূসক (খ)</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2" style="text-align: left;">শুন্যহার বিশিষ্ট পণ্য/সেবা</td>
                    <td colspan="2" style="text-align: left;">স্থানীয় ক্রয় </td>
                    <td colspan="2">১০</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;">আমদানি  </td>
                    <td colspan="2">১১</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2" style="text-align: left;">অব্যাহতিপ্রাপ্ত পণ্য/সেবা</td>
                    <td colspan="2" style="text-align: left;">স্থানীয় ক্রয় </td>
                    <td colspan="2"> ১২</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;">আমদানি  </td>
                    <td colspan="2"> ১৩</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2" style="text-align: left;">আদর্শ হারের পণ্য/সেবা </td>
                    <td colspan="2" style="text-align: left;">স্থানীয় ক্রয় </td>
                    <td colspan="2"> ১৪</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;">আমদানি  </td>
                    <td colspan="2"> ১৫ </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2" style="text-align: left;">আদর্শ করহার ব্যতিত ভিন্ন করহার ভিত্তিক পণ্য/সেবা </td>
                    <td colspan="2" style="text-align: left;">স্থানীয় ক্রয় </td>
                    <td colspan="2">১৬</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"> আমদানি  </td>
                    <td colspan="2"> ১৭</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left;">সুনির্দিষ্ট কর </td>
                    <td colspan="2" style="text-align: left;">স্থানীয় ক্রয় </td>
                    <td colspan="2"> ১৮</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2" style="text-align: left;">রেয়াতযোগ্য নয় এরূপ পণ্য/সেবা(স্থানীয় ক্রয়)</td>
                    <td colspan="2" style="text-align: left;">টার্নওভার প্রতিষ্ঠান হইতে</td>
                    <td colspan="2">১৯</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;">অনিবন্ধিত প্রতিষ্ঠান হইতে   </td>
                    <td colspan="2"> ২০</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2" style="text-align: left;">রেয়াতযোগ্য নয় এরূপ পণ্য/সেবা (যেসকল করদাতা শুধুমাত্র অব্যাহতিপ্রাপ্ত /প্রমিত হার ব্যতীত অন্যান্য হারের বিপরীত পণ্য/সেবা বিক্রয় করেন ) </td>
                    <td colspan="2" style="text-align: left;">স্থানীয় ক্রয় </td>
                    <td colspan="2"> ২১</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;">আমদানি</td>
                    <td colspan="2"> ২২</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align: left;">মোট উপকরণ কর রেয়াত  </td>
                    <td colspan="2"> ২৩</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম-ক</td>
                </tr>
            </table><br>

            <table>
            <tr>
                <td colspan="12">অংশ-৫: বৃদ্ধিকারী সমন্বয় (মূল্য সংযোজন কর) </td>
                <td colspan="2" rowspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" >সমন্বয় ঘটনা </td>
                <td colspan="2">নোট</td>
                <td colspan="4">পরিমান </td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">সরবরাহ গ্রহীতা কতৃক উৎসে কর্তনের জন্য </td>
                <td colspan="2">২৪ 
                </td>
                <td colspan="4"></td>
                <td colspan="2">সাবফর্ম-ঘ </td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">ব্যাংকিং চ্যানেলে মূল্য পরিশোধিত হয় নাই এমন সরবরাহের জন্য</td>
                <td colspan="2"> ২৫ 
                </td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">ডেবিট নোটের জন্য </td>
                <td colspan="2"> ২৬ 
                </td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">অন্যকোনো সমন্বয় ঘটনার জন্য (নিচে বর্ণনা করুন)</td>
                <td colspan="2"> ২৭ 
                </td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left; font-weight: bold;">মোট বৃদ্ধিকারী সমন্বয় </td>
                <td colspan="2">২৮ 
                </td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            </table><br>
            <table>
            <tr>
                <td colspan="12">অংশ-৬: হ্রাসকারী সমন্বয় (মূল্য সংযোজন কর)</td>
                <td colspan="2" rowspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" >সমন্বয় ঘটনা </td>
                <td colspan="2">নোট</td>
                <td colspan="4">পরিমান </td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">প্রদত্ত সরবরাহ হইতে কতৃক উৎসে কর্তনের জন্য </td>
                <td colspan="2">২৯</td>
                <td colspan="4"></td>
                <td colspan="2">সাবফর্ম-ঘ </td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">আমদানি পর্যায়ে অগ্রিম মূল্য সংযোজন কর </td>
                <td colspan="2"> ৩০ </td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">রপ্তানিকৃত কাঁচামালের বিপরীতে প্রদেয় মূল্য সংযোজন কর</td>
                <td colspan="2">৩১</td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">ক্রেডিট নোট ইস্যুর জন্য </td>
                <td colspan="2"> ৩২</td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left;">অন্যকোনো সমন্বয় ঘটনার জন্য (নিচে বর্ণনা করুন)</td>
                <td colspan="2"> ৩৩ </td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left; font-weight: bold;">মোট হ্রাসকারী সমন্বয় </td>
                <td colspan="2"> ৩৪</td>
                <td colspan="4"></td>
                <td colspan="2"></td>
            </tr>
            </table><br>

            <table>
                <tr>
                    <td colspan="12">অংশ-৬: হ্রাসকারী সমন্বয় (মূল্য সংযোজন কর)</td>
                </tr>
                <tr>
                    <td colspan="7" style="font-weight: bold;">আইটেম </td>
                    <td colspan="2" style="font-weight: bold;">নোট </td>
                    <td colspan="3" style="font-weight: bold;">পরিমান</td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">বর্তমান কর মেয়াদে প্রদেয় মোট মূসক (সমাপনী জের ব্যতীত ) (৯খ-২৩খ+২৮-৩৪) </td>
                    <td colspan="2">৩৫ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">সমাপনী জের এর সহিত সমন্বয়ের পর বর্তমান করমেয়াদে প্রদেয় মোট মূসক (৩৫-৫১) </td>
                    <td colspan="2"> ৩৬ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">বর্তমান করমেয়াদে প্রদেয় মোট সম্পূরক শুল্ক (সমাপনী জের ব্যতীত)(৯গ+৩৯-৪০-৪১) </td>
                    <td colspan="2"> ৩৭ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">সমাপনী জের এর সহিত সমন্বয়ের পর বর্তমান করমেয়াদে প্রদেয় মোট সম্পূরক শুল্ক (৩৭-৫১) </td>
                    <td colspan="2"> ৩৮ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">ডেবিট নোট ইস্যুর জন্য সমন্বয়কৃত সম্পূরক শুল্ক  </td>
                    <td colspan="2"> ৩৯ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">ক্রেডিট নোট ইস্যুর জন্য সমন্বয়কৃত সম্পূরক শুল্ক  </td>
                    <td colspan="2"> ৪০ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">রপ্তানিকৃত কাঁচামালের বিপরীতে প্রদেয় সম্পূরক শুল্ক  </td>
                    <td colspan="2"> ৪১  </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">অপরিশোধিত মূসকের জন্য সুদ  </td>
                    <td colspan="2">৪২ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">অপরিশোধিত সম্পূরক শুল্ক এর জন্য সুদ  </td>
                    <td colspan="2"> ৪৩ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">অর্থদণ্ড ও জরিমানা  </td>
                    <td colspan="2"> ৪৪ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">আবগারি শুল্ক  </td>
                    <td colspan="2"> ৪৫ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">উন্নয়ন সারচার্জ </td>
                    <td colspan="2"> ৪৬ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">তথ্য প্রযুক্তি উন্নয়ন সারচার্জ  </td>
                    <td colspan="2"> ৪৭ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">স্বাস্থ্য সুরক্ষা সারচার্জ  </td>
                    <td colspan="2"> ৪৮ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">পরিবেশ সুরক্ষা সারচার্জ  </td>
                    <td colspan="2"> ৪৯ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">শেষ করমেয়াদের সমাপনী জের (মূল্য সংযোজন কর ) </td>
                    <td colspan="2"> ৫০ </td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align: left;">শেষ করমেয়াদের সমাপনী জের (সম্পূরক শুল্ক) </td>
                    <td colspan="2"> ৫১</td>
                    <td colspan="3"></td>
                </tr>
            </table><br>

            <table>
                <tr>
                    <td colspan="12">অংশ-৮: কর পরিশোধের তফসিল (ট্রেজারী জমা)</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="4" style="font-weight: bold;">আইটেম </td>
                    <td colspan="2" style="font-weight: bold;">নোট </td>
                    <td colspan="4" style="font-weight: bold;">অর্থনৈতিক কোড </td>
                    <td colspan="2" style="font-weight: bold;">পরিমান</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;"> বর্তমান কর মেয়াদে পরিশোধিত মোট মূসক  </td>
                    <td colspan="2">৫২  </td>
                    <td colspan="4" style="text-align:left;"> ১/১১৩৩/অপারেশনাল কোড/০৩১১</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;">  বর্তমান করমেয়াদে পরিশোধিত মোট সম্পূরক শুল্ক  </td>
                    <td colspan="2">৫৩ </td>
                    <td colspan="4" style="text-align:left;">১/১১৩৩/অপারেশনাল কোড/০৭১১-০৭২১৪</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;"> অপরিশোধিত মূসকের জন্য সুদ   </td>
                    <td colspan="2"> ৫৪  </td>
                    <td colspan="4" style="text-align:left;"> ১/১১৩৩/অপারেশনাল কোড/০৩১১</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;"> অপরিশোধিত সম্পূরক শুল্ক এর জন্য সুদ   </td>
                    <td colspan="2">৫৫ </td>
                    <td colspan="4" style="text-align:left;">১/১১৩৩/অপারেশনাল কোড/০৭১১-০৭২১</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;">অর্থদণ্ড ও জরিমানা  </td>
                    <td colspan="2"> ৫৬  </td>
                    <td colspan="4" style="text-align:left;">১/১১৩৩/অপারেশনাল কোড/১৯০১</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;">আবগারি শুল্ক  </td>
                    <td colspan="2">৫৭ </td>
                    <td colspan="4" style="text-align:left;"> ১/১১৩৩/অপারেশনাল কোড/০৬০১</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;">উন্নয়ন সারচার্জ  </td>
                    <td colspan="2"> ৫৮ </td>
                    <td colspan="4" style="text-align:left;">১/১১৩৩/অপারেশনাল কোড/২২২৫</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;">তথ্য প্রযুক্তি উন্নয়ন সারচার্জ  </td>
                    <td colspan="2"> ৫৯ </td>
                    <td colspan="4" style="text-align:left;">১/১১৩৩/অপারেশনাল কোড/২২১</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;"> স্বাস্থ্য সুরক্ষা সারচার্জ  </td>
                    <td colspan="2"> ৬০  </td>
                    <td colspan="4"  style="text-align:left;">১/১১৩৩/অপারেশনাল কোড/২২১২</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:left;"> পরিবেশ সুরক্ষা সারচার্জ  </td>
                    <td colspan="2">৬১ </td>
                    <td colspan="4"  style="text-align:left;"> ১/১১৩৩/অপারেশনাল কোড/২২১৩</td>
                    <td colspan="2"></td>
                    <td colspan="2">সাবফর্ম - ছ </td>
                </tr>
                <tr>
                    <td colspan="12"  style="font-weight: bold;">অংশ-৯:সমাপনী জের (পরবর্তী কর মেয়াদের প্রারাম্ভিক জের)</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="6" style="font-weight: bold;">আইটেম </td>
                    <td colspan="2" style="font-weight: bold;">নোট </td>
                    <td colspan="4" style="font-weight: bold;">পরিমান</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align:left;">সমাপনী জের (মূল্য সংযোজন কর) </td>
                    <td colspan="2" style="text-align:left;">৬২ </td>
                    <td colspan="4" style="text-align:left;"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align:left;">সমাপনী জের (সম্পূরক শুল্ক) </td>
                    <td colspan="2" style="text-align:left;">৬৩ </td>
                    <td colspan="4" style="text-align:left;"></td>
                    <td colspan="2"></td>
                </tr>               
            </table><br>

            <table>
                <tr>
                    <td colspan="12">অংশ-১০: ঘোষণা </td>
                </tr>
                <tr>
                    <td colspan="12" style="text-align:left;">আমি ঘোষণা করিতেছি যে, এই দাখিলপত্রে প্রদত্ত তথ্য, সত্য ও নির্ভুল ।</td>
                </tr>
                <tr>
                    <td colspan="4">নাম </td>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <td colspan="4">পদবী  </td>
                    <td colspan="4"></td>
                    <td colspan="4" rowspan="4"></td>
                </tr>
                <tr>
                    <td colspan="4">তারিখ</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td colspan="4">মোবাইল নম্বর</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td colspan="4">ইমেইল </td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td colspan="8"> </td>
                    <td colspan="4">স্বাক্ষর </td>
                </tr>
            </table>
        </div>
        <div class="header">
        <p style="text-align:center; "><span style="border-bottom: 1px solid;">সাবফর্ম সমূহ</span> </p>
        <p> সাবফর্ম -ক (নোট ১, ২, ৩, ৪, ৫, ৬, ৭, ১০, ১১, ১২, ১৩, ১৪, ১৫, ১৬, ১৭, ১৯, ২০, ২১, ২২ এর জন্য প্রযোজ্য)</p><br>

        <p>নোট ১</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ২</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ৩</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ৪</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ৭</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ১০</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ১১</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ১৪</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ১৫</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ১৬</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ১৯</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>নোট ২০</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
        <p>সাবফর্ম -খ (নোট ৮ এর জন্য প্রযোজ্য)</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">ক্যাটাগরী </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য (ক) </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(খ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(গ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="2">বাণিজ্যিক আমদানিকারক  </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">পেট্রোলিয়াম জাতীয় পণ্য  </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">সুপার শপ  </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">মেডিসিন জাতীয় পণ্য</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="8">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>

            <p>সাবফর্ম -গ (নোট ৬, ১৮ এর জন্য প্রযোজ্য)</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার বর্ণনা  </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার কোড </td>
                    <td colspan="2" style="font-weight: bold;">পণ্য/সেবার নাম  </td>
                    <td colspan="2" style="font-weight: bold;">পরিমাপের একক (ক) </td>
                    <td colspan="2" style="font-weight: bold;">পরিমাণ(খ) </td>
                    <td colspan="2" style="font-weight: bold;">প্রকৃত বিক্রয়/ক্রয় মূল্য(গ)  </td>
                    <td colspan="2" style="font-weight: bold;">সম্পূরক শুল্ক(ঘ) </td>
                    <td colspan="2" style="font-weight: bold;"> মূল্য সংযোজন কর(ঙ) </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
            <p>    সাবফর্ম - ঘ (নোট ২৪ - "সরবরাহকারীর সরবরাহ হইতে উৎস কর্তনের জন্য " এর জন্য প্রযোজ্য)</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">সরবরাহকারীর বিআইএন নম্বর </td>
                    <td colspan="2" style="font-weight: bold;">সরবরাহকারীর নাম </td>
                    <td colspan="2" style="font-weight: bold;">সরবরাহকারীর ঠিকানা  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য</td>
                    <td colspan="2" style="font-weight: bold;">কর্তিত মূল্য সংযোজন কর</td>
                    <td colspan="2" style="font-weight: bold;"> ইনভয়েস নং (মূসক-১১, বিল নম্বর ইত্যাদি)</td>
                    <td colspan="2" style="font-weight: bold;">ইনভয়সের তারিখ </td>
                    <td colspan="2" style="font-weight: bold;"> একাউন্ট কোড </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="6">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
            <p>সাবফর্ম -ঙ (নোট ২৯-"প্রদত্ত সরবরাহ হইতে উৎসে কর্তনের জন্য " এর জন্য প্রযোজ্য )</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">ক্রেতার বিআইএন নম্বর </td>
                    <td colspan="2" style="font-weight: bold;">ক্রেতার নাম </td>
                    <td colspan="2" style="font-weight: bold;">ক্রেতার ঠিকানা  </td>
                    <td colspan="2" style="font-weight: bold;">মূল্য</td>
                    <td colspan="2" style="font-weight: bold;">কর্তিত মূল্য সংযোজন কর</td>
                    <td colspan="2" style="font-weight: bold;"> ইনভয়েস নং (মূসক-১১, বিল নম্বর ইত্যাদি)</td>
                    <td colspan="2" style="font-weight: bold;">ইনভয়সের তারিখ </td>
                    <td colspan="2" style="font-weight: bold;"> একাউন্ট কোড </td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="6">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table><br>
            <p>সাবফর্ম -ছ (নোট ৫২, ৫৩, ৫৪, ৫৫, ৫৬, ৫৭, ৫৮, ৫৯ ৬০, ৬১ এর জন্য প্রযোজ্য)</p><br>
            <p>নোট ৫২</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">চালান নম্বর</td>
                    <td colspan="2" style="font-weight: bold;">তারিখ</td>
                    <td colspan="2" style="font-weight: bold;">একাউন্ট কোড </td>
                    <td colspan="2" style="font-weight: bold;">পরিমান</td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table>
            <p>নোট ৫৩</p>
            <table>
                <tr>
                    <td colspan="2" style="font-weight: bold;">চালান নম্বর</td>
                    <td colspan="2" style="font-weight: bold;">তারিখ</td>
                    <td colspan="2" style="font-weight: bold;">একাউন্ট কোড </td>
                    <td colspan="2" style="font-weight: bold;">পরিমান</td>
                    <td colspan="2" style="font-weight: bold;">মন্তব্য</td>
                </tr>
                <tr>
                    <td colspan="4">মোট </td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>';


$mpdf->SetTitle('মূসক - ৬.১');
$mpdf->WriteHTML($html);
$mpdf->Output();
