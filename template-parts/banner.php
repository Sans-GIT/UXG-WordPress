<div class="uxgbanner bg-grdnt--white">
    <div class="uxgbanner__inner">
        <div class="uxgbanner__left">
            <?php 
                $banner_heading = get_field('banner_heading');
                if( $banner_heading ) {
            ?>
            <h2 class="uxgbanner__heading">
                <?php echo $banner_heading ;?>
            </h2>
            <?php 
                }
            ?>
            <?php 
                $banner_description = get_field('banner_description');
                if( $banner_description ) {
            ?>
            <p class="uxgbanner__info uxgbanner--normalinfo">
                <?php echo $banner_description ;?>
            </p>
            <?php 
                }
            ?>
            <?php 
                $banner_button_label = get_field('banner_button_label');
                $banner_button_link_path = get_field('banner_button_link_path');
                if( $banner_button_label ) {
            ?>
            <button datahref="<?php echo $banner_button_link_path ;?>" class="btn">
                <?php echo $banner_button_label ;?>
            </button>
            <?php 
                }
            ?>
        </div>
        <?php 
            $banner_image_path = get_field('banner_image_path');
            $banner_heading = get_field('banner_heading');
            if( $banner_image_path ) {
        ?>
        <img class="uxgbanner__img pos-tp--0" src="<?php echo $banner_image_path ;?>" alt="<?php echo $banner_heading ;?>" />
        <?php 
            }
        ?>
    </div>
</div>
<div class="uxgbnrbtm">
    <div class="uxgbnrbtm__inner">
        <div class="uxgbnrbtm__infosctn">
            <?php 
                $rows = get_field('banner_information_contents');
                if( $rows ) {
                    foreach( $rows as $row ) {
            ?>
            <div class="uxgbnrbtm__infosctnlist">
                <a class="uxgbnrbtm__infosctnlink" href="<?php echo $row['link_path'] ; ?>" title="<?php echo $row['heading'] ; ?>"></a>
                <img class="uxgbnrbtm__infosctnimg" src="<?php echo $row['icon'] ; ?>" alt="<?php echo $row['heading'] ; ?>" />
                <div class="uxgbnrbtm__infosctncontent">
                    <h4 class="uxgbnrbtm__infosctnttl"><?php echo $row['heading'] ; ?></h4>
                    <p class="uxgbnrbtm__infosctndesc"><?php echo $row['description'] ; ?></p>
                </div>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</div>