<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once("vendor/autoload.php");
use Yvesniyo\IntouchSms\SmsSimple;
/** @var \Yvesniyo\IntouchSms\SmsSimple */
$phone="0788760349";
$messi="Hello world";
$sms = new SmsSimple();
$sms->recipients([$phone])
    ->message($messi)
    ->sender("intouchSenderId")
    ->username("intouchUsername")
    ->password("intouchPassword")
    ->apiUrl("www.intouchsms.co.rw/api/sendsms/.json")
    ->callBackUrl("");
print_r($sms->send());
?>