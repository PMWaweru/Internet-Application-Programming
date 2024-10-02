<?php
class fncs{
	public function setMsg(){
        if(is_array[$values]){
            $_SESSION[$name]=$values;
        }else{
            $_SESSION[$name]='<span class=""'.$class.'">'.$value.  '</span>';

        }
        
}
	public function getMsg(){
        if(isset($_SESSION[$name])){
            $_SESSION =$_SESSION[$name];
            unset($_SESSION[$name]);
            return $_SESSION;
        }
}}