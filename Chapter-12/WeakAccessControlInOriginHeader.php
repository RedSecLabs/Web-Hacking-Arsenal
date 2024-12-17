<!-- page # 440 -->
<?php
header("Access-Control-Allow-Origin: https://browsersec.net");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");
$sensitiveInfo = "This is sensitive data.";
if  (isset($_SERVER['HTTP_ORIGIN'])  &&  $_SERVER['HTTP_ORIGIN'] === "https://browsersec.com") {
    header("Access-Control-Allow-Origin: https://browser sec.net");
    echo $sensitiveInfo;
} else {
    $normalInfo = "This is non-sensitive data.";echo $normalInfo;
}
?> 