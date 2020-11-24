<?php 
    $odc_modifier_class = get_field('odc_modifier_class');
?>
<div class="uxgoperations <?php echo $odc_modifier_class ;?>">
<?php
?>
    <div id="particlescontainer2"></div>
    <div class="uxgoperations__inner">
        <div class="uxgoperations__left">
            <?php 
                $odc_heading = get_field('odc_heading');
                if( $odc_heading ) {
            ?>
            <h3 class="uxgoperations__heading"><?php echo $odc_heading ;?></h3>
            <?php
                }
            ?>
            <?php 
                $odc_sub_heading = get_field('odc_sub_heading');
                if( $odc_sub_heading ) {
            ?>
            <h4 class="uxgoperations__subheading">
            <?php echo $odc_sub_heading ;?>
            </h4>
            <?php
                }
            ?>
            <?php 
                $odc_description = get_field('odc_description');
                if( $odc_description ) {
            ?>
            <p class="uxgoperations__descinfo"><?php echo $odc_description ;?></p>
            <?php
                }
            ?>
            <?php 
                $odc_button = get_field('odc_button');
                if( $odc_button ) {
            ?>
            <button class="btn"><?php echo $odc_button ;?></button>
            <?php
                }
            ?>
            <?php 
                $odc_mobile_image_path = get_field('odc_mobile_image_path');
                $odc_description = get_field('odc_description');
                if( $odc_mobile_image_path ) {
            ?>
            <img class="uxgoperations__image hide--desktop" src="<?php echo $odc_mobile_image_path ;?>" alt="<?php echo $odc_description ;?>" />
            <?php
                }
            ?>
            <?php 
                $odc_image = get_field('odc_image');
                $odc_description = get_field('odc_description');
                if( $odc_image ) {
            ?>
            <img class="uxgoperations__image hide--mobile" src="<?php echo $odc_image ;?>" alt="<?php echo $odc_description ;?>" />
            <?php
                }
            ?>
        </div>
        <div class="uxgoperations__right">
            <?php 
                $rows = get_field('home_odc_right_section');
                if( $rows ) {
                    foreach( $rows as $row ) {
            ?>
            <div class="uxgoperations__blocks <?php echo $row['modifier_class_name'] ;?>">
                <a class="uxgoperations__blocklink" href="<?php echo $row['link_path'] ;?>" title="<?php echo $row['heading'] ;?>"></a>
                <span class="uxgoperations__iconcont <?php echo $row['icon_modifier_class_name'] ;?>">
                    <img class="uxgoperations__icon" src="<?php echo $row['icon'] ;?>" alt="<?php echo $row['heading'] ;?>" />
                </span>
                <h5 class="uxgoperations__blockheading"><?php echo $row['heading'] ;?></h5>
                <p class="uxgoperations__blockinfo"><?php echo $row['description'] ;?></p>
            </div>
            <?php	
                    }
                }
            ?>
        </div>
    </div>
</div>