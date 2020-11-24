<?php 
    $about_recruitment_component_modifier_class_name = get_field('about_recruitment_component_modifier_class_name');
?>
<div class="uxgsearch <?php echo $about_recruitment_component_modifier_class_name ;?>">
<?php
?>
    <?php 
        $about_recruitment_component_inner_modifier_class_name = get_field('about_recruitment_component_inner_modifier_class_name');
    ?>
    <div class="uxgsearch__inner <?php echo $about_recruitment_component_inner_modifier_class_name ;?>">
    <?php
    ?>
        <?php 
            $about_recruitment_heading = get_field('about_recruitment_heading');
            if( $about_recruitment_heading ) {
        ?>
        <h4 class="uxgsearch__heading"><?php echo $about_recruitment_heading ;?></h4>
        <?php
            }
        ?>
        <?php 
            $about_recruitment_sub_heading = get_field('about_recruitment_sub_heading');
            if( $about_recruitment_sub_heading ) {
        ?>
        <h5 class="uxgsearch__subheading"><?php echo $about_recruitment_sub_heading ;?></h5>
        <?php
            }
        ?>
        <?php 
            $about_recruitment_description = get_field('about_recruitment_description');
            if( $about_recruitment_description ) {
        ?>
        <p class="uxgsearch__desc"><?php echo $about_recruitment_description ;?></p>
        <?php
            }
        ?>
        <?php 
            $about_recruitment_button_label = get_field('about_recruitment_button_label');
            $about_recruitment_button_link_path = get_field('about_recruitment_button_link_path');
            if( $about_recruitment_button_label ) {
        ?>
        <button datahref="<?php echo $about_recruitment_button_link_path ;?>" class="btn btn--white mar-tp--30"><?php echo $about_recruitment_button_label ;?></button>
        <?php
            }
        ?>
    </div>
    <div class="uxgsearch__bottombg"></div>
</div>
