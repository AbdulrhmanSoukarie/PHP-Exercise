<!DOCTYPE html>
     <html>
         <head>
             <link rel="stylesheet" href="css/palindrome.css">
              <title>part-3 </title>      
         </head>
    <body>
            <form method="post">
         	<div class="input-group">

  	        <h2>Palindrome</h2>
  		    <label>Please Enter a Word </label>
  	     	<input type="text" name="word" required value="" > 
        	</div>
  	        <div class="input-group">
  		    <button type="submit" class="btn" name="submit">Enter</button>
  	        </div>
              <?php
               function reverse($palindrome){
                   $rev = strrev($palindrome);
                   if ($rev == $palindrome)
                   echo "this is a palindrome ";
                   else {
                    echo "Is not  a palindrome ";  
                   }             
                 }    
                 if(isset($_POST['submit'])){
                     reverse($_POST ['word']);
                 }          
                  ?>
			
			</form>
         </section>
       </div>
    </body>
  </html>