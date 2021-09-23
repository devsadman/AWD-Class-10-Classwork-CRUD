<?php
/**
 * msg show
 */
function msgShow($msg,$type='danger'){
    return "<p class=\"alert alert-{$type}\">{$msg} <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}
/**
 * email validation
 */
function emailCheck($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    }
}
/**
 * ins email
 */
function insEmail($email,array $emails){
    $array_email=explode('@',$email);
    $last=end($array_email);
    if(in_array($last,$emails)){
        return true;
    } else{
        return false;
    }

}
/**
 * age check
 */
function ageCheck($age){
    if($age>=18 && $age<=30){
        return true;
    } else{
        return false;
    }
}
function userLength($uname){
    $useLength='';
    $useLength=strlen($uname);
    if($useLength>=6) {
        return true;
    } else {
        return false;
    }
}

/**
 * cell check
 */
function CellCheck($cell){
    if(substr($cell,0,5)=='+8801'||substr($cell,0,4)=='8801'||substr($cell,0,2)=='01'){
        return true;
    } else {
        return false;
    } 
}
/**
 * old value
 */
function old($name){
    if(isset($_POST[$name])){
        return "$_POST[$name]";
    } else{
        return "";
    }
}
function formClear() {
    $_POST='';
}
?>