<div class="uxgvalues">
    <div class="uxgvalues__inner">
        <div class="uxgvalues__left">
            <?php 
                $values_heading = get_field('values_heading');
                if( $values_heading ) {
            ?>
            <h3 class="uxgvalues__heading"><?php echo $values_heading ;?></h3>
            <?php 
                }
            ?>
            <?php 
                $values_sub_heading = get_field('values_sub_heading');
                if( $values_sub_heading ) {
            ?>
            <h4 class="uxgvalues__subheading"><?php echo $values_sub_heading ;?></h4>
            <?php 
                }
            ?>
        </div>
        <div class="uxgvalues__right">
            <?php
                $values_list = get_field('values_list');
                $index = 0;
                if( $vision_list ) {
                    foreach($values_list as $value) {
            ?>
            <div class="uxgvalues__list">
                <img class="uxgvalues__icon" src="<?php echo $value['icon'] ;?>" alt="<?php echo $value['topic'] ;?>" />
                <h5 class="uxgvalues__topic"><?php echo $value['topic'] ;?></h5>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</div>