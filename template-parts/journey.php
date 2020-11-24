<?php 
    $journey_modifier_class_name = get_field('journey_modifier_class_name');
?>
<div class="uxgblogs <?php echo $journey_modifier_class_name ;?>">
<?php 
?>
    <div id="particlescontainer11"></div>
    <div class="uxgblogs__inner">
        <div class="uxgblogs__left">
            <?php 
                $journey_heading = get_field('journey_heading');
                if( $journey_heading ) {
            ?>
            <h4 class="uxgblogs__heading"><?php echo $journey_heading ;?></h4>
            <?php 
                }
            ?>
            <?php 
                $journey_sub_heading = get_field('journey_sub_heading');
                if( $journey_sub_heading ) {
            ?>
            <h5 class="uxgblogs__subheading"><?php echo $journey_sub_heading ;?></h5>
            <?php 
                }
            ?>
            <?php 
                $journey_button_label = get_field('journey_button_label');
                $journey_button_link_path = get_field('journey_button_link_path');
                if( $journey_button_label ) {
            ?>
            <button datahref="<?php echo $journey_button_link_path ;?>" class="btn btn--trans hide--mobile"><?php echo $journey_button_label ;?></button>
            <?php 
                }
            ?>
            <div class="owl-controls clickable">
                <div class="owl-buttons">
                    <div class="owl-prev uxgblogs__prev"></div>
                    <div class="owl-next uxgblogs__next"></div>
                </div>
            </div>
        </div>
        <div class="uxgblogs__rightparent">
            <div class="uxgblogs__right">
                <div class="hide--mobile">
                    <div id="uxgblogs-carousel" class="owl-carousel">
                        <?php 
                            $rows = get_field('journey_list');
                            if( $rows ) {
                                foreach( $rows as $row ) {
                        ?>
                        <div class="uxgblogs__section">
                            <a class="uxgblogs__link" href="<?php echo $row['link_path'] ; ?>" title="<?php echo $row['description'] ; ?>"></a>
                            <img src="<?php echo $row['image_path'] ; ?>" alt="<?php echo $row['description'] ; ?>" loading="lazy">
                            <h6 class="uxgblogs__title"><?php echo $row['year'] ; ?></h6>
                            <p class="uxgblogs__desc"><strong><?php echo $row['description'] ; ?></strong></p>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="hide--desktop">
                    <?php 
                        $rows = get_field('journey_list');
                        if( $rows ) {
                            foreach( $rows as $row ) {
                    ?>
                    <div class="uxgblogs__section">
                        <a class="uxgblogs__link" href="<?php echo $row['link_path'] ; ?>" title="<?php echo $row['description'] ; ?>"></a>
                        <h6 class="uxgblogs__title"><?php echo $row['year'] ; ?></h6>
                        <p class="uxgblogs__desc"><strong><?php echo $row['description'] ; ?></strong></p>
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <?php 
                $journey_button_label = get_field('journey_button_label');
                $journey_button_link_path = get_field('journey_button_link_path');
                if( $journey_button_label ) {
            ?>
            <button datahref="<?php echo $journey_button_link_path ;?>" class="btn btn--trans hide--desktop"><?php echo $journey_button_label ;?></button>
            <?php 
                }
            ?>
        </div>
    </div>
</div>