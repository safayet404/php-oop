<?php

$to = "hossainsafayet187@gmail.com";
$from = "test@example.com";
$subject = "jibon kemon mara dicche bhai?";

$body = "hello bhai \n bibahito jibon kemon jacche?";
$header = "From: {$from}\r\n";
echo mail($to,$subject,$body,$header);