<?php 
    $latest_blogs_modifier_class_name = get_field('latest_blogs_modifier_class_name');
?>
<div class="uxgblogs <?php echo $latest_blogs_modifier_class_name ;?>">
<?php 
?>
    <div id="particlescontainer11"></div>
    <div class="uxgblogs__inner">
        <div class="uxgblogs__left">
            <?php 
                $latest_blogs_heading = get_field('latest_blogs_heading');
                if( $latest_blogs_heading ) {
            ?>
            <h4 class="uxgblogs__heading"><?php echo $latest_blogs_heading ;?></h4>
            <?php 
                }
            ?>
            <?php 
                $latest_blogs_description = get_field('latest_blogs_description');
                if( $latest_blogs_description ) {
            ?>
            <h5 class="uxgblogs__subheading"><?php echo $latest_blogs_description ;?></h5>
            <?php 
                }
            ?>
            <?php 
                $latest_blogs_button_label = get_field('latest_blogs_button_label');
                $latest_blogs_button_link_path = get_field('latest_blogs_button_link_path');
                if( $latest_blogs_button_label ) {
            ?>
            <button datahref="<?php echo $latest_blogs_button_link_path ;?>" class="btn btn--trans hide--mobile"><?php echo $latest_blogs_button_label ;?></button>
            <?php 
                }
            ?>
        </div>
        <div class="uxgblogs__rightparent">
            <div class="uxgblogs__right">
                <?php 
                    $latest_blogs_modifier_class_name = get_field('latest_blogs_modifier_class_name');
                    if( $latest_blogs_modifier_class_name !== "uxgblogs--listthree" ) {
                ?>
                <div id="uxgblogs-carousel" class="owl-carousel">
                    <?php echo delicious_recent_posts(); ?>
                </div>
                <?php 
                    }
                ?>
                <?php 
                    $latest_blogs_modifier_class_name = get_field('latest_blogs_modifier_class_name');
                    if( $latest_blogs_modifier_class_name === "uxgblogs--listthree" ) {
                ?>
                    <?php echo delicious_recent_posts(); ?>
                <?php 
                    }
                ?>
            </div>
            <?php 
                $latest_blogs_button_label = get_field('latest_blogs_button_label');
                $latest_blogs_button_link_path = get_field('latest_blogs_button_link_path');
                if( $latest_blogs_button_label ) {
            ?>
            <button datahref="<?php echo $latest_blogs_button_link_path ;?>" class="btn btn--trans hide--desktop"><?php echo $latest_blogs_button_label ;?></button>
            <?php 
                }
            ?>
        </div>
    </div>
</div>