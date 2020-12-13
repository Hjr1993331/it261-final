<?php
//people.php
include('config.php');

session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}


include('includes/header.php');
?>

<!-- starts product.php-->

<nav>  

<?php 
//Notification message
if(isset($_SESSION['success'])) :?>
<div class="goal">

<h3><?php echo $_SESSION['success'];
    
    
    unset($_SESSION['success']);
    
    ?>
    
    </h3>  
    
    </div><!--closing goal div-->
    <?php endif ?>
    
  <div class="goal">  
<?php
    if(isset($_SESSION['UserName'])) : ?>
<h3> Hello,
<b><?php echo $_SESSION['UserName']; ?>
    </b>!</h3>

<br>
<p><a href="index.php?logout='1' ">Log out!</a></p>

</div> <!-- closing goal div-->

<?php endif ?>

    
       
    </nav> 
 </div> <!--closing id top-->     
    
<div id="wrapper">     

<div class="producttop">
    <h1 class="top_thx"><?php echo $mainHead; ?></h1>
    <img class="adminer" src="images/adminer.png" alt="adminer pic">
    <h2 class="inline2">For more information</h2>    
    </div> <!-- ends producttop div-->

<main class="inline">
    
    <ul>
    
    <?php
$sql = 'SELECT * FROM ERB';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0 ) { 

while($row = mysqli_fetch_assoc($result)) {

    
    echo '<li class="bold"><a href="product-view.php?id='.$row['ERBID'].'">'.$row['SongName'].'</a></li>';
    

} 

    
    
} else { 
    
    echo 'Nobody home!';
    
    
} 



@mysqli_free_result($result);



@mysqli_close($iConn);
 
  ?>
        </ul>    
</main>
<aside class="pro">
<img class="cus" src="images/customer.png" alt="customer image">
</aside>

<!-- ends product.php-->    
    
<?php
include('includes/footer.php');
