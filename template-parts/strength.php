<div class="uxgstrength">
    <div class="uxgstrength__inner">
        <div class="uxgstrength__left">
            <?php 
                $strength_heading = get_field('strength_heading');
                if( $strength_heading ) {
            ?>
            <h3 class="uxgstrength__heading"><?php echo $strength_heading ;?></h3>
            <?php 
                }
            ?>
            <?php 
                $strength_sub_heading = get_field('strength_sub_heading');
                if( $strength_sub_heading ) {
            ?>
            <h4 class="uxgstrength__subheading"><?php echo $strength_sub_heading ;?></h4>
            <?php 
                }
            ?>
        </div>
        <?php 
            $strength_description = get_field('strength_description');
            if( $strength_description ) {
        ?>
        <p class="uxgstrength__descheading"><?php echo $strength_description ;?></p>
        <?php 
            }
        ?>
    </div>
</div>