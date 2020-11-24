<div class="uxgculture">
    <div class="uxgculture__inner">
        <?php 
            $culture_heading = get_field('culture_heading');
            if( $culture_heading ) {
        ?>
        <h3 class="uxgculture__heading"><?php echo $culture_heading ;?></h3>
        <?php 
            }
        ?>
        <?php 
            $culture_sub_heading = get_field('culture_sub_heading');
            if( $culture_sub_heading ) {
        ?>
        <h4 class="uxgculture__subheading"><?php echo $culture_sub_heading ;?></h4>
        <?php 
            }
        ?>
        <div class="uxgculture__imgcont">
            <div class="uxgculture__left">
                <?php
                    $culture_image_list = get_field('culture_image_list');
                    $index = 0;
                    if( $culture_image_list ) {
                        foreach($culture_image_list as $culture_image) {
                            if ($index === 0) {
                ?>
                    <img class="uxgculture__img" src="<?php echo $culture_image['image_path'] ;?>" alt="<?php echo $culture_image['image_path'] ;?>" />
                <?php 
                            }
                        $index++;
                        }
                    }
                ?>
            </div>
            <div class="uxgculture__right">
                <?php
                    $culture_image_list = get_field('culture_image_list');
                    $index = 0;
                    if( $culture_image_list ) {
                        foreach($culture_image_list as $culture_image) {
                            if ($index > 0 && $index < 5) {
                ?>
                <div class="uxgculture__imglist">
                    <img class="uxgculture__img" src="<?php echo $culture_image['image_path'] ;?>" alt="<?php echo $culture_image['image_path'] ;?>" />
                </div>
                <?php 
                            }
                        $index++;
                        }
                    }
                ?>
            </div>
        </div>
        <?php 
            $culture_button_label = get_field('culture_button_label');
            $recruitment_button_link_path = get_field('recruitment_button_link_path');
            if( $culture_button_label ) {
        ?>
        <button datahref="<?php echo $recruitment_button_link_path ;?>" class="btn btn--trans"><?php echo $culture_button_label ;?></button>
        <?php 
            }
        ?>
    </div>
</div>
<div class="uxgmodal">
    <div class="uxgmodal__inner">
        <?php
            $culture_image_list = get_field('culture_image_list');
            $index = 1;
        ?>
        <a class="uxgmodal__imageclose" href="javascript:void(0);" title="Close"></a>
        <div class="uxgmodal__imglistcont">
            <a class="uxgmodal__arrow uxgmodal--prev" href="javascript:void(0);" title="Previous"></a>
            <div class="uxgmodal__imgcont">
                <div id="uxgmodal-carousel" class="owl-carousel">
                    <?php
                        if( $culture_image_list ) {
                            foreach($culture_image_list as $culture_image) {
                    ?>
                        <div class="uxgmodal__imglist">
                            <h2 class="uxgmodal__imageindex">
                                <?php echo $index ;?> /
                                <?php echo count($culture_image_list) ;?>
                            </h2>
                                <img class="uxgmodal__img" src="<?php echo $culture_image['image_path'] ;?>" alt="<?php echo $culture_image['image_info'] ;?>" />
                            <h3 class="uxgmodal__imginfo"><?php echo $culture_image['image_info'] ;?></h3>
                        </div>
                    <?php 
                            $index++;
                        }
                    ?>
                </div>
            </div>
            <a class="uxgmodal__arrow uxgmodal--next" href="javascript:void(0);" title="Next"></a>
        </div>
        <?php 
            }
        ?>
    </div>
</div>