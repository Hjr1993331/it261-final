<?php
// product view page
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


if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
} else {
    header('Location:product.php');
}
$sql = 'SELECT * FROM ERB WHERE ERBID = '.$id.'';

//connect to the database

$iConn = 
@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) { // show the records

while($row = mysqli_fetch_assoc($result)) {
    $SongName = stripslashes($row['SongName']);
    $ReleaseDate = stripslashes($row['ReleaseDate']);
    $Director = stripslashes($row['Director']);
    $Animator = stripslashes($row['Animator']);
    $SetDesigner = stripslashes($row['SetDesigner']);
    $Assistant = stripslashes($row['Assistant']);
    $URL = stripslashes($row['URL']);
    $Description = stripslashes($row['Description']);
    $Feedback = '';
   }

} else {
    $Feedback = 'Sorry,';
}

include('includes/header3.php');  ?>

<!-- starts product-view.php-->  

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


<h2 class="productview">Welcome to "<?php echo $SongName; ?>" Page</h2>
<main class="view">

<?php 
if($Feedback == '') {
    echo '<ul class="feedback">';
    echo '<li class="feedback2"><b>Release Date: </b>'.$ReleaseDate.' </li>';
    echo '<li class="feedback2"><b>Director: </b>'.$Director.' </li>';
    echo '<li class="feedback2"><b>Animator: </b>'.$Animator.' </li>';
    echo '<li class="feedback2"><b>Set Designer: </b>'.$SetDesigner.' </li>';
    echo '<li class="feedback2"><b>Assistant: </b>'.$Assistant.' </li>';
    echo '<li class="feedback2"><b>URL: </b><a href="'.$URL.'">'.$SongName.' </a>\'s YouTube page</li>';
      echo '</ul>';
    
     
    echo '<br>';
    
    echo '<p class="goback"><a href="product.php">Go back to the product page!</a></p>';
} else {
    echo $Feedback;
    
}// ends else    
    ?>
</main>


<aside class="view2">
<?php
  if($Feedback == '') {
    echo '<img class="upload" src="uploads/product'.$id.'.jpg" alt="'.$SongName.'">';
    echo '<p class="feedback3"><b>Discription:</b> '.$Description.'</p>';  
  } else {
      echo $Feedback;
  }
    
    //release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
      
    ?>


</aside>

<!-- ends product-view.php-->    
    
<?php 
include('includes/footer3.php');

