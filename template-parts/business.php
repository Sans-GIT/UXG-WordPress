<div class="uxgbusiness">
    <div id="particlescontainer5"></div>
    <div class="uxgbusiness__innerhead">
        <div class="uxgbusiness__inner">
            <?php 
                $why_us_heading = get_field('why_us_heading');
                if( $why_us_heading ) {
            ?>
            <h3 class="uxgbusiness__heading"><?php echo $why_us_heading ;?></h3>
            <?php 
                }
            ?>
            <?php 
                $why_us_sub_heading = get_field('why_us_sub_heading');
                if( $why_us_sub_heading ) {
            ?>
            <h4 class="uxgbusiness__subheading"><?php echo $why_us_sub_heading ;?></h4>
            <?php 
                }
            ?>
        </div>
        <div class="uxgbusiness__blocklisthead">
            <?php 
                $rows = get_field('why_us_carousal_list');
                if( $rows ) {
            ?>
            <div class="uxgbusiness__blocklistcont">
                <div id="uxgbusiness-carousel" class="owl-carousel">
                    <?php 
                        $rows = get_field('why_us_carousal_list');
                        if( $rows ) {
                            foreach( $rows as $row ) {
                    ?>
                    <div class="uxgbusiness__blocklist <?php echo $row['modifier_class_name'] ;?>">
                        <a class="uxgbusiness__blocklistlink" href="<?php echo $row['link_path'] ;?>" title="<?php echo $row['heading'] ;?>" ></a>
                        <img class="uxgbusiness__blockicon" src="<?php echo $row['icon_path'] ;?>" alt="<?php echo $row['heading'] ;?>" />
                        <h6 class="uxgbusiness__blkheading"><?php echo $row['heading'] ;?></h6>
                        <p class="uxgbusiness__blkdesc"><?php echo $row['description'] ;?></p>
                    </div>
                    <?php 
                            }
                        }
                    ?>
                </div>
            </div>
            <?php 
                }
            ?>
        </div>
    </div>
</div>
