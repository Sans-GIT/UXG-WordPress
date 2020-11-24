<div class="uxgplanbanner">
    <div class="uxgplanbanner__inner uxgplanbanner--ctraln">
        <?php 
            $plan_banner_title = get_field('plan_banner_title');
            if( $plan_banner_title ) {
        ?>
        <h2 class="uxgplanbanner__title"><?php echo $plan_banner_title ;?></h2>
        <?php 
            }
        ?>
        <?php 
            $plan_banner_heading = get_field('plan_banner_heading');
            if( $plan_banner_heading ) {
        ?>
        <h3 class="uxgplanbanner__heading"> <?php echo $plan_banner_heading ;?></h3>
        <?php 
            }
        ?>
    </div>
</div>
<?php 
    $plan_banner_description = get_field('plan_banner_description');
    if( $plan_banner_description ) {
?>
        
<div class="uxgplanbanner bg--white">
    <div class="uxgplanbanner__inner uxgplanbanner--ctraln">
        <h4 class="uxgplanbanner__desc"><?php echo $plan_banner_description ;?></h4>
    </div>
</div>
<?php 
    }
?>