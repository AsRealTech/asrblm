<?php // admin index
session_start();
include_once("inc/config.php");
$user = $_SESSION["user"];

$asr = $_GET["asr"] ?? "";
//  $request1 = $_SERVER["REQUEST_URI"]; // returning path excluding domain name 
//  $request = $_SERVER["HTTP_HOST"]; // returning domain name excluding path 
// // $request = $_GET["REQUEST_URI"];
// // echo $request . $request1;
// // http://localhost:2024 /app/admin/

if(isset($user)){
    switch($asr){
    
        case(""):
        include_once"views/adminblade.php";
        break;
        
        case("admin"):
        include_once"views/adminblade.php";
        break;
        
        case("about"):
        include_once"views/about.php";
        break;
        
        case("register"):
        include_once"views/register.php";
        break;
        
        case("settings"):
        include_once"views/settings.php";
        break;
        
        case("logout"):
            include_once"views/logout.php";
            break;    

        default:
        include_once"views/404.php";
        break;
    }
} else {
    header("location: ../");
}
 

?>



