<!-- start include/footer.php-->
</div> <!--end wrapper-->
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
        <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fproduct-view.php"><img class="html" src="images/html.png" alt="html"></a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhijirimaruo.com%2Fit261%2Ffinal-project%2Fproduct-view.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"><img class="html" src="images/css.png" alt="css"></a></li>
         
         <li class="leftbottom"><a href="https://www.facebook.com/erb"><img src="images/facebook.png" alt="facebook logo"></a></li>
         <li class="leftbottom2"><a href="https://www.instagram.com/erb/"><img src="images/insta.png" alt="Instagram logo"></a></li>
         <li class="leftbottom3"><a href="https://twitter.com/erbofhistory"><img src="images/twitter.png" alt="Twitter logo"></a></li>
         <li class="leftbottom4"><a href="#bodytop"><img src="images/back.png" alt="Back to top"></a></li>
         
         
     </ul>
    </footer>   

</body>
</html>