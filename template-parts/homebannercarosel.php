<div class="uxgbanner">
    <div id="particlescontainer1"></div>
    <div id="uxgbanner-carousel" class="owl-carousel">
        <?php 
            $rows = get_field('banner_carousel_list');
            if( $rows ) {
                foreach( $rows as $row ) {
        ?>
        <div class="uxgbanner__inner">
            <div class="uxgbanner__left">
                <h2 class="uxgbanner__heading">
                    <?php echo $row['heading'] ;?>
                </h2>
                <p class="uxgbanner__info">
                    <?php echo $row['sub_heading'] ;?>
                </p>
                <button datahref="<?php echo $row['button_link_path'] ;?>" class="btn">
                    <?php echo $row['button_label'] ;?>
                </button>
            </div>
            <img class="uxgbanner__img" src="<?php echo $row['big_image'] ;?>" alt="<?php echo $row['heading'] ;?>" />
            <div class="uxgbanner__centerinfo fade-in">
                <div class="uxgbanner__centerinfoleft">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php echo $row['small_image_3x_path'] ;?>">
                        <source media="(min-width: 960px)" srcset="<?php echo $row['small_image_2x_path'] ;?>">
                        <source media="(min-width: 560px)" srcset="<?php echo $row['small_image_1x_path'] ;?>">
                        <img class="uxgbanner__centerinfoimg" src="<?php echo $row['small_image_1x_path'] ;?>" alt="<?php echo $row['information_message'] ;?>" />
                    </picture>
                </div>
                <div class="uxgbanner__centerinforight">
                    <p class="uxgbanner__centerinfomsg">
                        <?php echo $row['information_message'] ;?>
                    </p>
                </div>
            </div>
        </div>
        <?php 
                }
            }
        ?>
    </div>
</div>