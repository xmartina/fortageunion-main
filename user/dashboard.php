<?php
require_once ('../include/config.php');

if ($auth === $decode){
    echo require_once ('dashboard-auth.php');
} else {
    echo "This Script isnt Licenced Please contacr Script Owner";
}
?>