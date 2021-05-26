<?php 
if (isset($_POST["registration"])){
  $name= $_POST["name"];
  $username= $_POST["username"];
  $password=$_POST["password"];
  $confirmed_password =$_POST["conferm_password"];
  $email =$_POST["email"];
  $phone =$_POST["phone"];
  $birthday =$_POST["birthday"];
  $secnumber =$_POST["number"];

 
   
  if (empty($name) || empty($username) || empty($password) || empty($confirmed_password) || empty($email) || empty($phone) || empty($secnumber) || empty($birthday)) {

       header("location: home.php?error=emptyfields");
       exit();
    
  }
 
   else if (!preg_match("/^[a-zA-Z0-9]*$/" , $username ,$name)) {

    header("location: home.php?error=UvalideChar");
         exit();
}
 else if (!filter_var($email, FILTER_VALIDATE_EMAIL )) {
    header("location: home.php?error=email");
    exit();
}
 else if ($password !== $confirmed_password ) {
    header("location: home.php?error=passwordsdontmatch");
    exit();
}
 else if (!is_numeric($phone) || !is_numeric($secnumber)) {
    header("location: home.php?error=OnlyNumbers");
    exit();
}


else {
    echo "you sign up succesfully";
    exit();
} 

}




if (isset($_POST["submit"])) {

    $username = $_POST["username"];
     $password = $_POST["pwd"];
    if(!empty($username) && !empty($password)){
        if($username == 'abed' && $password == '123'){

          
            echo '<p> Welcome ' . $username . ' your pass word ' . $password ;
        }

    else {
        echo "Please enter correct uername or password";
    }
    }
    else {
        echo "please fill all Field";
    }
}

?>