<?php // this is my login page - a simple form

include('server.php');
include('includes/header2.php');

?>

<!-- starts login.php-->

<h1 class="register"><?php echo $mainHead; ?></h1>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
    <fieldset>
    <label>User Name</label>
       <input type="text" name="UserName" placeholder="Your User Name(required)" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">  
    
    <label>Password</label>    
    <input type="password" name="Password" placeholder="Your Password(required)">
    <?php 
    include('includes/errors.php');    
        ?>    
        
   <button type="submit" class="btn"  name="login_user">Login</button>   
        
    <button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' ">RESET</button>
        
    </fieldset>
    
    
    
</form>    


<p class="center">Haven't Registered? <a href="register.php">Register Here</a>!</p>


<!-- ends login.php-->

<?php 
include('includes/footer2.php');
?>
