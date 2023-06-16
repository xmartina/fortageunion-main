<?php
$url.= $_SERVER['HTTP_HOST'];  

if ($url === "dashboard.vatexfinbank.com" && $auth === $auth1){
    require_once ('../include/config1.php');
}else {
    echo "Please you need License to Use this Script Please contact Admin";
}

?>