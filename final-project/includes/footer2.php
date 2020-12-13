<!-- start include/footer.php-->
<footer>

    
     <ul>
     <li class="rightbottom">Copyright &copy; <?php 
         $startDate = 2020;
         $currentDate = date('Y');
         if($startDate == $currentDate) {
             echo $currentDate;
         } else {
             echo ' '.$startDate.' - '.$currentDate.'';
             
         } //end else
         
         
         
         ?></li>
        <li class="rightbottom">All Rights Reserved</li>
        <li class="rightbottom"><a href="../index.php">Web Design by Hijiri</a></li>
        <li><a href="<?php echo $htmlcheck ; ?>"><img class="html" src="images/html.png" alt="html"></a></li>
        <li><a href="<?php echo $csscheck ; ?>"><img class="html" src="images/css.png" alt="css"></a></li>
         
         
     </ul>
    </footer>   

</body>
</html>