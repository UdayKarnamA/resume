<?php

$strName = $_POST["name"];
$strEmail = $_POST["email"];
$strMobile = nl2br($_POST["mobile"]);
$strSub = nl2br($_POST["subject"]);
$strMsg = nl2br($_POST["msg"]);

$body="Job-title:$strSub \r\n
Name:$strName \r\n
Email:$strEmail \r\n
Phone:$strMobile \r\n
Subject:$strSub \r\n
Message:$strMsg";
$from=$strEmail;

$to='udayka782@gmail.com'; // removed for spam protection

mail($to,$from,$body);

echo "<script> alert('Your Form has been Submitted successfully'); window.location.href='index.html'; </script>";

?>