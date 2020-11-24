<div class="uxghire">
    <div id="particlescontainer8"></div>
    <div class="uxghire__inner">
        <div class="uxghire__left">
            <?php 
                $hire_heading = get_field('hire_heading');
                if( $hire_heading ) {
            ?>
            <h3 class="uxghire__heading"><?php echo $hire_heading ;?></h3>
            <?php 
                }
            ?>
            <?php 
                $hire_sub_heading = get_field('hire_sub_heading');
                if( $hire_sub_heading ) {
            ?>
            <h4 class="uxghire__subheading"><?php echo $hire_sub_heading ;?></h4>
            <?php 
                }
            ?>
            <?php 
                $hire_description = get_field('hire_description');
                if( $hire_description ) {
            ?>
            <p class="uxghire__desc"><?php echo $hire_description ;?></p>
            <?php 
                }
            ?>
            <?php 
                $hire_button1_label = get_field('hire_button1_label');
                $hire_button1_link_path = get_field('hire_button1_link_path');
                if( $hire_button1_label ) {
            ?>
            <button datahref="<?php echo $hire_button1_link_path ;?>" class="btn"><?php echo $hire_button1_label ;?></button>
            <?php 
                }
            ?>
            <?php 
                $hire_button2_label = get_field('hire_button2_label');
                $hire_button2_link_path = get_field('hire_button2_link_path');
                if( $hire_button2_label ) {
            ?>
            <button datahref="<?php echo $hire_button2_link_path ;?>" class="btn btn--trans"><?php echo $hire_button2_label ;?></button>
            <?php 
                }
            ?>
            <?php 
                $hire_mobile_image_path = get_field('hire_mobile_image_path');
                $hire_heading = get_field('hire_heading');
                if( $hire_mobile_image_path ) {
            ?>
            <img class="uxghire__image hide--desktop" src="<?php echo $hire_mobile_image_path ;?>" alt="<?php echo $hire_heading ;?>" />
            <?php 
                }
            ?>
            <?php 
                $hire_image_path = get_field('hire_image_path');
                $hire_heading = get_field('hire_heading');
                if( $hire_image_path ) {
            ?>
            <img class="uxghire__image hide--mobile" src="<?php echo $hire_image_path ;?>" alt="<?php echo $hire_heading ;?>" />
            <?php 
                }
            ?>
        </div>
        <div class="uxghire__right">
            <?php 
                $rows = get_field('hire_list');
                if( $rows ) {
                    foreach( $rows as $row ) {
            ?>
            <div class="uxghire__blocks <?php echo $row['modifier_class_name'] ;?>">
                <a href="<?php echo $row['link_path'] ;?>" title="<?php echo $row['heading'] ;?>" class="uxghire__blocklink"></a>
                <span class="uxghire__blockicon">
                    <img class="uxghire__blockimage" src="<?php echo $row['icon'] ;?>" alt="<?php echo $row['heading'] ;?>" />
                </span>
                <h5 class="uxghire__blockheading"><?php echo $row['heading'] ;?></h5>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>