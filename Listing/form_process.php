<?php 
$name_error = $city_error = $category_error = $contact_error = $email_error = "";
$name = $city = $category = $contact = $email = "";

//form submitted with post method
if ($_SERVER["REQUEST_METHOD"]) == "POST"){
    if(empty($_POST["listingname"])){
        $name_error= "Name is required";
    }else{
        $name = test_input($_POST["listingname"]);
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $name_error= "Only letter and white space allowed";
        }
    }

    if(empty($_POST["listingcity"])){
        $city_error= "City is required";
    }else{
        $city = test_input($_POST["listingcity"]);
        if(!preg_match("/^[a-zA-Z]*$/",$city)){
            $city_error= "Only letter and white space allowed";
        }
    }

    if(empty($_POST["listingcontact"])){
        $contact_error= "Contact number required";
    }else {
        $contact = test_input($_POST["listingcontact"]);
    }

    if(empty($_POST["listingemail"])){
        $email_error= "Email required";
    }else{
        $email= test_input($_POST["listingemail"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error="Invalid email address";
        }
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}


?>