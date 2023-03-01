<?php
include "../control/Process.php"
?>
<html>
    <head>

    </head>
    <body bgcolor="Yellow">  
        <title>
            HomePage
        </title>
        <br><br><br>
        <center><h1>Registration form</h1> </center>
        
        <center>
        <form action="" method="post" enctype="multipart/form-data">
        <table>
     
        <tr>
            <th><b>First Name: </b></th>
            <th><input type="text" name="firstname" Size="20"/> <?php 
            echo $firstnameerr; ?> </th>
        <tr>
             <th><b>Last Name: </b> </th>
             <th><input type="text" name="lastname" size="20"/><?php
          echo $lastnameerr;
          ?>  </th>
        </tr>
        <tr>
             <th>  <b>Permanent Address: </b></th>
             <th><input type="text" address="address" size="20"/> </th>
        </tr>
         <tr>
            <th><b> Phone Number: </b></th>
            <th><input type="Text"  name="phone"size="20"/><?php
          echo $phoneerr; ?> </th>
        </tr>
         <tr>
          <th><b> Email Address: </b></th>
          <th><input type="text" id="email" name="email"size="20"/> <?php
          echo $emailerr;
          ?></th>
         </tr>
        
        <tr>
            <th> Gender: </th> 
            <th><input type="radio"  name="Gender" value="Male">Male> <?php
             echo $radioerr;  ?></th>    
            
        
        </tr>
        <tr>
            <th></th>    
            <th><input type="radio"  name="Gender" value="Female">Female</th>
           
        </tr>
        <tr>
            <th> </th>    
            <th><input type="radio"  name="Gender" value="Other">Other</th>
        </tr>




        <tr>
            <th> Upload Your CV:</th>
            
         <th><input type="file" name="CVfile" ><?php 
          echo $CVerr;?></th>
         
        </tr>
        <tr>
            <th> Upload Your NID Copy:</th>
            
         <th><input type="file" name="NIDfile" ><?php 
          echo $niderr;?></th>
         
        </tr>
        <tr>
            <th><b>Password: </b></th>
            <th><input type="password" name="password" size="20"/> <?php
            echo $passworderr;
            ?></td></th>
         </tr>
        <tr>
            <th><b>Conferm Password: </b></th>
            <th><input type="password" name="confermpassword" size="20"/> <?php
            echo $confermpassworderr;
            ?></td> </th>
        </tr>
        
         <tr>
            <th></th>
            <th><button>Submit :)</button></th>
            <th></th>
        </tr>
        
        <tr>
            <th></th>
            <th><button>Reset :(</button></th>
        </tr>

         </form>
         
        
         <?php echo $dataerr; ?>
         </table>
         </form>

        
         
        </center>

</body>

</html>