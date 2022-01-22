<?php   
    function toCorrectString($str){
        $str = htmlspecialchars($str);
        $str = urldecode($str);
        $str = trim($str);
        return stripslashes($str);
    }
?>