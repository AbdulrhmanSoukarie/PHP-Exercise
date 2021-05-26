<link rel="stylesheet" href="css/style.css">
  
    <div class="login-form">
  
    <form method="POST" action="safe.php">
    <div class="form-title">
    <h1>Registration</h1></div>
    <?php
    
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields")
        {
            echo '<p class="middle" >Fill in all fields</p>';
        }
        else if ($_GET["error"] == "UvalideChar") {
             echo '<p class="middle">Unvalide Char Username or name </p>';
        }
        else if ($_GET["error"] == "email") {
            echo '<p class="middle">Please Check your email </p>';
       }   
       else if ($_GET["error"] == "passwordsdontmatch") {
        echo '<p class="middle">Password mismatch</p>';
   }  
   else if ($_GET["error"] == "OnlyNumbers") {
    echo '<p class="middle">add correct Phone number or Social Security Number</p>';
} 
    }
    ?>
       
    <label><input type="text" placeholder = "Full Name " name= "name"></label>
    <label><input type="text" placeholder = "Username " name= "username"></label>
    <label><input type="password" placeholder = "Password" name= "password"></label>
    <label><input type="password" placeholder = "Confirm Password" name= "conferm_password"></label>
    <label><input type="email" placeholder = "Email " name= "email"></label>
    <label><input type="tel" placeholder = "Phone " name= "phone"></label>
    <label><input type="date" placeholder = "Date of Birth " name= "birthday"></label>
    <label><input type="number" placeholder = "Social Security Number " name= "number"></label>
    <button name="registration" type="submit" >Sign up</button>
    </form>
    
    
    <form  action="safe.php" method="POST">
    <div class="form-title">
    <h1>Log In</h1></div>
    <input type="text" placeholder = "Full Name" name= "username">
    <input type="password" placeholder = "Username" name= "pwd">
    
    <button name="submit" type="submit" >Sign In</button>
    </form>
    
    </div>