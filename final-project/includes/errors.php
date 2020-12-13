<?php // errors page

if(count($errors) > 0) : ?>
<div class="error"> <!--start errors div-->
<?php foreach($errors as $error): ?>
<p class="error"><?php echo $error; ?></p>
    <?php endforeach ?> <!--start endforeach-->
</div> <!--end errors div-->

<?php endif ?> <!--end endforeach-->