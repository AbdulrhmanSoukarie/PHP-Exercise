<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/Yearly.css">
</head>
<body>
  

<?php
$Salary_tax = 0;
$Social_security = 0 ;
 $real_sarl = 0 ;
 $Tax_amount = 0 ;
 $month_salary = 0 ;
 $tax_amount_monthly = 0 ;
 $social_fee_monthly = 0;
 $remaning_month = 0 ;
$year = "";
$month = "";

 if(isset($_POST['submit']))

 {   
     $salary = $_POST['salary'];
     $fretax =$_POST['freetax'];
     $selected_radio = $_POST['yearmonth'];
    
     if($salary < 10000 ) {
        if ($selected_radio == "yearly")  { 

            $year = "yearly";
            $month = "monthly";
             $real_sarl = round($salary) ;
           
             $Social_security = round($salary * (4/100));
             $Salary_tax = round(($salary + $fretax ) - $Social_security );
     
             $month_salary = round( $real_sarl/ 12);
            $social_fee_monthly = round($Social_security /12);
             $remaning_month = round($Salary_tax / 12); 
           }
   
 
     else if ($selected_radio == "monthly") {
          $year = "Monthly";
          $month = "Year";
       $real_sarl = round($salary +$fretax) ;
      
       $Social_security = round($salary * (4/100));
       $Salary_tax = round(($salary + $fretax ) -  $social ); 
       
       $month_salary = round( $real_sarl * 12);
     
       $social_fee_monthly = round(   $Social_security * 12);
       $remaning_month = round($Salary_tax * 12);
     } }
     

     else if ( $salary < 25000 && $salary > 10000  ) {
         
           if ($selected_radio == "yearly")  { 

             $year = "yearly";
             $month = "monthly";
              $real_sarl = round($salary) ;
              $Tax_amount = round($salary * (11 / 100));
              $Social_security = round($salary * (4/100));
              $Salary_tax = round(($salary + $fretax ) - (  $Tax_amount + $Social_security ));
      
              $month_salary = round( $real_sarl/ 12);
              $tax_amount_monthly =round($Tax_amount/ 12);
              $social_fee_monthly = round($Social_security /12);
              $remaning_month = round($Salary_tax / 12); 
            }
    
  
      else if ($selected_radio == "monthly") {
           $year = "Monthly";
           $month = "Year";
        $real_sarl = round($salary +$fretax) ;
        $Tax_amount = round($salary * (11 / 100));
        $Social_security = round($salary * (4/100));
        $Salary_tax = round(($salary + $fretax ) - ($Tax_amount+ $social )); 
        
        $month_salary = round( $real_sarl * 12);
        $tax_amount_monthly =round($Tax_amount * 12);
        $social_fee_monthly = round(   $Social_security * 12);
        $remaning_month = round($Salary_tax * 12);
      } }

      else if ( $salary < 50000 && $salary > 25000  ) {
         
        if ($selected_radio == "yearly")  { 

          $year = "yearly";
          $month = "monthly";
           $real_sarl = round($salary) ;
           $Tax_amount = round($salary * (30 / 100));
           $Social_security = round($salary * (4/100));
           $Salary_tax = round(($salary + $fretax ) - (  $Tax_amount + $Social_security ));
   
           $month_salary = round( $real_sarl/ 12);
           $tax_amount_monthly =round($Tax_amount/ 12);
           $social_fee_monthly = round($Social_security /12);
           $remaning_month = round($Salary_tax / 12); 
         }
 

   else if ($selected_radio == "monthly") {
        $year = "Monthly";
        $month = "Year";
     $real_sarl = round($salary +$fretax) ;
     $Tax_amount = round($salary * (30 / 100));
     $Social_security = round($salary * (4/100));
     $Salary_tax = round(($salary + $fretax ) - ($Tax_amount+ $social )); 
     
     $month_salary = round( $real_sarl * 12);
     $tax_amount_monthly =round($Tax_amount * 12);
     $social_fee_monthly = round(   $Social_security * 12);
     $remaning_month = round($Salary_tax * 12);
   } }

   else if ( $salary > 50000  ) {
         
    if ($selected_radio == "yearly")  { 

      $year = "yearly";
      $month = "monthly";
       $real_sarl = round($salary) ;
       $Tax_amount = round($salary * (45 / 100));
       $Social_security = round($salary * (4/100));
       $Salary_tax = round(($salary + $fretax ) - (  $Tax_amount + $Social_security ));

       $month_salary = round( $real_sarl/ 12);
       $tax_amount_monthly =round($Tax_amount/ 12);
       $social_fee_monthly = round($Social_security /12);
       $remaning_month = round($Salary_tax / 12); 
     }


else if ($selected_radio == "monthly") {
    $year = "Monthly";
    $month = "Year";
 $real_sarl = round($salary +$fretax) ;
 $Tax_amount = round($salary * ( 45 / 100));
 $Social_security = round($salary * (4/100));
 $Salary_tax = round(($salary + $fretax ) - ($Tax_amount+ $social )); 
 
 $month_salary = round( $real_sarl * 12);
 $tax_amount_monthly =round($Tax_amount * 12);
 $social_fee_monthly = round(   $Social_security * 12);
 $remaning_month = round($Salary_tax * 12);
} }
 }

?>

<form action="" method="Post">
<div class = "flx-1">
<label for="">Salary in usd</label> 

<input type="number" placeholder="Enter salary in USD" value="<?php echo isset($_POST['salary']) ? $_POST['salary'] : '' ?>" name="salary" required > 

<label for="">Free tax</label>
<input type="number" name="freetax"  placeholder="Social security fee in USD" value="<?php echo isset($_POST['freetax']) ? $_POST['freetax'] : '' ?>" required> 

<div class= "radio">
<label for="male">yearly</label>
<input type="radio" id="yearly" name="yearmonth" value="yearly" required>

<label for="female">Monthly</label> 
<input type="radio" id="monthly" name="yearmonth" value="monthly" required >
</div>




<button id="calculateBtn" type="submit" name="submit" >Calculate</button>
</div>
 <div class="flx">
<form >
            <table style="width:50%">
                <tr>
                    <th></th>
                    <th><?php echo $year ; ?></th>
                    <th><?php echo $month ;?></th>
                </tr>
                <tr>
                    <td>Total salary</td>
                    <td><?php echo $real_sarl; ?></td>
                    <td><?php echo $month_salary; ?></td>
                </tr>
                <tr>
                    <td>Tax amount</td>
                    <td><?php echo $Tax_amount; ?></td>
                    <td><?php echo $tax_amount_monthly; ?></td>
                </tr>
                <tr>
                    <td>Social security fee</td>
                    <td><?php echo $Social_security; ?></td>
                    <td><?php echo  $social_fee_monthly; ?></td>
                </tr>
                <tr>
                    <td>Salary after tax</td>
                    <td><?php echo  $Salary_tax; ?></td>
                    <td><?php echo  $remaning_month; ?></td>
                </tr>
            </table>
        </form>
        </div>
</form>


</body>
</html>