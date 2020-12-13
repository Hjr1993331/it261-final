<?php 
include('server.php');
include('includes/header2.php');







?>

<!-- starts register.php-->  

<h1 class="register"><?php echo $mainHead; ?></h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
<fieldset>    
<label>Full Name</label>
<input type="text" name="FullName" placeholder="Your Full Name(required)" value="<?php if(isset($_POST['FullName'])) echo $_POST['FullName']; ?>">   

    
<label>User Name</label>
<input type="text" name="UserName" placeholder="Your User Name(required)" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">    
    
<label>Email</label>
<input type="text" name="Email" placeholder="Your Email(required)" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>">    
    
<label>Password</label>
<input type="password" name="Password_1" placeholder="Create Your New Password(required)">    

<label>Confirm Password</label>
<input type="password" name="Password_2" placeholder="Confirm Password(required)">
    
<button type="submit" class="btn"  name="reg_user">Register</button>  
    
<button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' ">RESET</button>    

<?php 
include('includes/errors.php');
    ?>
    
    </fieldset>    
</form>

<p class="center">Already a memeber? Please <a href="login.php">sign in</a>!</p>


<!-- ends register.php--> 

<?php 
include('includes/footer2.php');
?>













