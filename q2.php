
<?php
//  i used 7 insted of 6 cause of the # 

function isHexCode($str){
    if (($str[0] === "#") && (strlen($str) == 7)) {
        if(ctype_xdigit( substr( $str,1)))
            echo   "true";
 

        else
            echo "false";
    }
    else 
        echo "false str";
echo "<br/>";

    
}
isHexCode("#35ac223");
isHexCode("#CD5C5C");
isHexCode("#EAECEE");
isHexCode("#CD5C58C");
isHexCode("#CD5C&C");
isHexCode("CD5C5C");

 
?> 