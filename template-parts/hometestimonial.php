<div class="uxgtstmnl">
    <div class="uxgtstmnl__inner">
        <?php 
            $testimonials_heading = get_field('testimonials_heading');
            if( $testimonials_heading ) {
        ?>
        <h4 class="uxgtstmnl__heading"><?php echo $testimonials_heading ;?></h4>
        <?php
            }
        ?>
        <?php 
            $testimonials_sub_heading = get_field('testimonials_sub_heading');
            if( $testimonials_sub_heading ) {
        ?>
        <h5 class="uxgtstmnl__subheading"><?php echo $testimonials_sub_heading ;?></h5>
        <?php
            }
        ?>
        <div class="uxgtstmnl__blocklistcont">
            <?php 
                $rows = get_field('testimonials_list');
                if( $rows ) {
                    foreach( $rows as $row ) {
            ?>
            <div class="uxgtstmnl__blocklist">
                <div class="uxgtstmnl__clntimgcnt">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php echo $row['icon_3x_path'] ;?>">
                        <source media="(min-width: 960px)" srcset="<?php echo $row['icon_2x_path'] ;?>">
                        <source media="(min-width: 560px)" srcset="<?php echo $row['icon_1x_path'] ;?>">
                        <img class="uxgtstmnl__clntimg" src="<?php echo $row['icon_1x_path'] ;?>" alt="<?php echo $row['client_name'] ;?>" />
                    </picture>
                </div>
                <h3 class="uxgtstmnl__clntname"><?php echo $row['client_name'] ;?></h3>
                <p class="uxgtstmnl__clntfeedback"><?php echo $row['client_feedback'] ;?></p>
                <h4 class="uxgtstmnl__clntdesgntn"><?php echo $row['client_designation'] ;?></h4>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
