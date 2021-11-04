<?php
require("composer.json");
$html = $_GET["html"];
$converted_text =  stripe_tags($html);
echo json_encode(array("result" => $converted_text));
?>
