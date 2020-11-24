<div class="uxgkeytech">
    <div id="particlescontainer4"></div>
    <div class="uxgkeytech__inner">
        <div class="uxgkeytech__left">
            <?php 
                $technology_image_path = get_field('technology_image_path');
                $technology_heading = get_field('technology_heading');
                if( $technology_image_path ) {
            ?>
            <img class="uxgkeytech__image" src="<?php echo $technology_image_path ;?>" alt="<?php echo $technology_heading ;?>" />
            <?php 
                }
            ?>
        </div>
        <div class="uxgkeytech__right">
            <?php 
                $technology_heading = get_field('technology_heading');
                if( $technology_heading ) {
            ?>
            <h4 class="uxgkeytech__heading"><?php echo $technology_heading ;?></h4>
            <?php 
                }
            ?>
            <?php 
                $technology_sub_heading = get_field('technology_sub_heading');
                if( $technology_sub_heading ) {
            ?>
            <h5 class="uxgkeytech__subheading"><?php echo $technology_sub_heading ;?></h5>
            <?php 
                }
            ?>
            <?php 
                $technology_description = get_field('technology_description');
                if( $technology_description ) {
            ?>
            <p class="uxgkeytech__desc"><?php echo $technology_description ;?></p>
            <?php 
                }
            ?>
        </div>
    </div>
</div>
