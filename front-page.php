<?php 
get_header()
?>
<div class = "wrapper">
    <?php 
    $title = get_field('field_66277775749dd');
    $about = get_field('field_662777ea749de');
    // echo $_SERVER['REQUEST_URI'];
    ?>
    <h1><?php echo  $title ?></h1>
    <p class ="home__about"><?php echo $about ?></p>
</div>
<? get_footer()
?>