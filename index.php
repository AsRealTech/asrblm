<?php  // frontend index

$asr = $_GET["asr"] ?? "";

 $request1 = $_SERVER["REQUEST_URI"]; // returning path excluding domain name 
 $request = $_SERVER["HTTP_HOST"]; // returning domain name excluding path 
// $request = $_GET["REQUEST_URI"];
// echo $request;
// http://http://localhost /asrblm/

if($asr == ""){
    include_once"app/viewsfront/homeblade.php";
} else {
    switch($asr){
    case("$request/asrblm/"):
    include_once"app/viewsfront/homeblade.php";
    break;
    
    case("home"):
    include_once"app/viewsfront/homeblade.php";
    break;
    
    case("about"):
    include_once"app/viewsfront/about.php";
    break;
    
    case("register"):
    include_once"app/admin/views/register.php";
    break;
    
    case("login"):
        header("location: app/admin");
    // include_once"app/admin/views/login.php";
    break;
    
    default:
    include_once"app/admin/views/404.php";
    break;
    }
}