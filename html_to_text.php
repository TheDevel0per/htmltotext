<?php
$html =  $_GET["html"];
$converted_text = strip_tags($html);
echo json_encode(array("reslut => $converted_text"));
?>