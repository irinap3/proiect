<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/header.css"/>
    <link rel="stylesheet" type="text/css" href="/css/top-menu.css"/>
    <link rel="stylesheet" type="text/css" href="/css/footer-menu.css"/>
        <title>Style Design SRL</title>
    <link rel="icon" type="image/x-icon" href="/images/icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
        .bar2 p
       {
           animation-name: anim1;
           animation-duration: 3s;
           animation-iteration-count: infinite;
           animation-direction: alternate;
       }
       @keyframes anim1 {
           from {margin-left:30%;}
           to {margin-left: 50%;}
       }
       
   </style>
<body>

<?php

$currentUrl = trim($_SERVER["REQUEST_URI"], "/");
if ($currentUrl != "") { 
    $urlParts = explode("/", $currentUrl);
    $lastUrl = array_pop($urlParts);
    $currentPageId = substr($lastUrl, strpos($lastUrl, "_") + 1);
} else {
    $currentPageId = 1;
}



$sqlCurrentPage = "SELECT * FROM pages WHERE id = " . $currentPageId;
$result = $conn->query($sqlCurrentPage);

if (!$result || mysqli_num_rows($result) == 0) {
    http_response_code(404);
    include("404.php");
    exit();
}

$currentPage = $result->fetch_assoc();

?>


<a href="/" title="Home Page"><img class="logo" src="/images/icon.jpg" alt="Icon Image"></a>