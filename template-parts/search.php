<?php 
    $recruitment_component_modifier_class_name = get_field('recruitment_component_modifier_class_name');
?>
<div class="uxgsearch <?php echo $recruitment_component_modifier_class_name ;?>">
<?php
?>
    <?php 
        $recruitment_component_inner_modifier_class_name = get_field('recruitment_component_inner_modifier_class_name');
    ?>
    <div class="uxgsearch__inner <?php echo $recruitment_component_inner_modifier_class_name ;?>">
    <?php
    ?>
        <?php 
            $recruitment_heading = get_field('recruitment_heading');
            if( $recruitment_heading ) {
        ?>
        <h4 class="uxgsearch__heading"><?php echo $recruitment_heading ;?></h4>
        <?php
            }
        ?>
        <?php 
            $recruitment_sub_heading = get_field('recruitment_sub_heading');
            if( $recruitment_sub_heading ) {
        ?>
        <h5 class="uxgsearch__subheading"><?php echo $recruitment_sub_heading ;?></h5>
        <?php
            }
        ?>
        <?php 
            $recruitment_description = get_field('recruitment_description');
            if( $recruitment_description ) {
        ?>
        <p class="uxgsearch__desc"><?php echo $recruitment_description ;?></p>
        <?php
            }
        ?>
        <?php 
            $recruitment_button_label = get_field('recruitment_button_label');
            $recruitment_button_link_path = get_field('recruitment_button_link_path');
            if( $recruitment_button_label ) {
        ?>
        <button datahref="<?php echo $recruitment_button_link_path ;?>" class="btn btn--white mar-tp--30"><?php echo $recruitment_button_label ;?></button>
        <?php
            }
        ?>
    </div>
    <div class="uxgsearch__bottombg"></div>
</div>
