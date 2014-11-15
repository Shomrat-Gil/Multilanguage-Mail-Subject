<?php
/*
email multi language subject utf-8 encoding
*/
$from = '=?UTF-8?B?'.base64_encode($from_name).'?= < '.$from_mail.'>';
$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

?>