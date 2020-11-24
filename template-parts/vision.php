<div class="uxgvision">
    <div class="uxgvision__inner">
        <div class="uxgvision__left">
            <?php 
                $vision_heading = get_field('vision_heading');
                if( $vision_heading ) {
            ?>
            <h3 class="uxgvision__heading"><?php echo $vision_heading ;?></h3>
            <?php 
                }
            ?>
            <?php 
                $vision_sub_heading = get_field('vision_sub_heading');
                if( $vision_sub_heading ) {
            ?>
            <h4 class="uxgvision__subheading"><?php echo $vision_sub_heading ;?></h4>
            <?php 
                }
            ?>
            <?php 
                $vision_description = get_field('vision_description');
                if( $vision_description ) {
            ?>
            <p class="uxgvision__desc"><?php echo $vision_description ;?></p>
            <?php 
                }
            ?>
        </div>
        <div class="uxgvision__right">
            <?php
                $vision_list = get_field('vision_list');
                $index = 0;
                if( $vision_list ) {
                    foreach($vision_list as $vision) {
            ?>
            <div class="uxgvision__list">
                <img class="uxgvision__icon" src="<?php echo $vision['icon'] ;?>" alt="<?php echo $vision['bold_text'] ;?>" />
                <h5 class="uxgvision__boldtext"><?php echo $vision['bold_text'] ;?></h5>
                <p class="uxgvision__remtext"> <?php echo $vision['remaining_text'] ;?></p>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</div>