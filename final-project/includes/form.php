<!-- start form.php-->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    
    
    
    <div class="conleft">
    
    <div class="marvel">
    <label>Name</label>
    <input type="text" name="name" placeholder="Your Name(required)" value="<?php 
     if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
        <span><?php echo $nameErr; ?></span>
    </div> <!-- end marvel div-->
    
    
    
    
    
    <div class="marvel">
    <label>Email</label>
    <input type="email" name="email" placeholder="Email(required)" value="<?php 
     if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
    
        <span><?php echo $emailErr; ?></span>
    </div> <!-- end marvel div-->
    
    
    
    
    <div class="marvel">
     <label>Phone number</label>
    <input type="tel" name="tel" placeholder="xxx-xxx-xxxx(required)" value="<?php 
     if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']); ?>">
    
        <span><?php echo $telErr; ?></span>
    </div> <!-- end marvel div-->
    
    
    
    
    
    
    <div class="marvel">
    <label>Gender</label>
     <ul class="identification">
        
        <li><input type="radio" name="gender" value="Female"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked="checked"'; ?>       
                   >Female</li>
         <li><input type="radio" name="gender" value="Male"
            <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked="checked"'; ?>       
                   >Male</li>
        
    </ul>   
     <span><?php echo $genderErr; ?></span>
   </div> <!-- end marvel div-->
        
        
        <div class="marvel">   
    <label>Comments</label>
    <textarea name="comment" placeholder="Your comments"><?php if(isset($_POST['comment'])) echo htmlspecialchars($_POST['comment']); ?></textarea>
          
    <span><?php echo $commentErr; ?></span>     
         
        </div> <!-- end marvel div-->
    
    
    
    </div> <!-- end conleft div-->
    
    
    <div class="conright">
        
     <div class="marvel">
    <label>Where are you currenlty living?</label>
<select name="country">
    <option value="NULL"
<?php if(isset($_POST['country']) && $_POST == 'NULL') {
    echo 'selected = "unselected"';
} ?>>Select one</option>
    
    <option name="country" value="North America"
<?php if(isset($_POST['country']) && $_POST['country'] == 'North America') {
    echo 'selected = "selected"';
} ?>>North America</option>  
    
    <option name="country" value="South America"
<?php if(isset($_POST['country']) && $_POST['country'] == 'South America') {
    echo 'selected = "selected"';
} ?>>South America</option>  
    
    <option name="country" value="Asia"
<?php if(isset($_POST['country']) && $_POST['country'] == 'Asia') {
    echo 'selected = "selected"';
} ?>>Asia</option> 
    
    <option name="country" value="Europe"
<?php if(isset($_POST['country']) && $_POST['country'] == 'Europe') {
    echo 'selected = "selected"';
} ?>>Europe</option> 
       
    
    <option name="country" value="Africa"
<?php if(isset($_POST['country']) && $_POST['country'] == 'Africa') {
    echo 'selected = "selected"';
} ?>>Africa</option> 
    
    <option name="country" value="Oceania"
<?php if(isset($_POST['country']) && $_POST['country'] == 'Oceania') {
    echo 'selected = "selected"';
} ?>>Oceania</option>
    
         </select>
  <span><?php echo $countryErr; ?></span>       
         
         </div> <!-- end marvel div-->
    
    <div class="marvel">
     <label class="favo">Which songs are you interested in?</label>
    
    <ul class="identification">
<!--checkboxes are using    -->
        
        
        <li><input type="checkbox" name="epicrap[]" value="Harry Potter vs Luke Skywalker"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Harry Potter vs Luke Skywalker') echo 'checked="checked"'; ?>>Harry Potter vs Luke Skywalker</li>
        
        <li><input type="checkbox" name="epicrap[]" value="Donald Trump vs Joe Biden"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Donald Trump vs Joe Biden') echo 'checked="checked"'; ?>>Donald Trump vs Joe Biden</li>
        
        <li><input type="checkbox" name="epicrap[]" value="Jim Henson vs Stan Lee"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Jim Henson vs Stan Lee') echo 'checked="checked"'; ?>>Jim Henson vs Stan Lee</li>
        
        <li><input type="checkbox" name="epicrap[]" value="Albert Einstein vs Stephen Hawking"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Albert Einstein vs Stephen Hawking') echo 'checked="checked"'; ?>>Albert Einstein vs Stephen Hawking</li>
        
        <li><input type="checkbox" name="epicrap[]" value="Steven Spielberg vs Alfred Hitchcock"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Steven Spielberg vs Alfred Hitchcock') echo 'checked="checked"'; ?>>Steven Spielberg vs Alfred Hitchcock</li>
          
        <li><input type="checkbox" name="epicrap[]" value="Sir Isaac Newton vs Bill Nye"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Sir Isaac Newton vs Bill Nye') echo 'checked="checked"'; ?>>Sir Isaac Newton vs Bill Nye</li>
          
        <li><input type="checkbox" name="epicrap[]" value="Steve Jobs vs Bill Gates"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Steve Jobs vs Bill Gates') echo 'checked="checked"'; ?>>Steve Jobs vs Bill Gates</li>
          
        
        <li><input type="checkbox" name="epicrap[]" value="Gandhi vs Martin Luther King Jr"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Gandhi vs Martin Luther King Jr') echo 'checked="checked"'; ?>>Gandhi vs Martin Luther King Jr</li>
          
        <li><input type="checkbox" name="epicrap[]" value="James Bond vs Austin Powers"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'James Bond vs Austin Powers') echo 'checked="checked"'; ?>>James Bond vs Austin Powers</li>
          
        <li><input type="checkbox" name="epicrap[]" value="Doc Brown vs Doctor Who"
            <?php if(isset($_POST['epicrap']) && $_POST['epicrap'] == 'Doc Brown vs Doctor Who') echo 'checked="checked"'; ?>>Doc Brown vs Doctor Who</li>
          
        
        
    
            
    </ul>
    
    <span><?php echo $epicrapErr; ?></span>
    
    </div> <!-- end marvel div-->
    
    
    
    
    
    <div class="marvel">
    <label>Privacy Policy</label>
        <input type="radio" name="privacy" value="<?php 
        if(isset($_Post['privacy'])) echo htmlspecialchars($_POST['privacy']) ;?>">
    I'm not a Robot
    
    <span><?php echo $privacyErr; ?></span>
    </div> <!-- end marvel div-->
    
    </div> <!-- end conright div-->
    
     <p class="reset"><input type="submit" value="Confirm Button!"></p>
    
     <p class="reset"><a href="">Reset</a></p>
    </form>   