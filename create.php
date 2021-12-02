<?php
//Includ config file
require_once "config.php";

//Define variables and initialize with empty values
$name = $adress = $salary = "";
$name_err = $adress_err = $salary_err = "";

//Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //Validate name 
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
       $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    //Validate adress

}








?>
