<div class="uxgoperations bg--blu3"">
    <div class="uxgoperations__inner no--ltrtimg">
        <div class="uxgoperations__left">
            <?php 
                $industry_heading = get_field('industry_heading');
                if( $industry_heading ) {
            ?>
            <h3 class="uxgoperations__heading"><?php echo $industry_heading ;?></h3>
            <?php 
                }
            ?>
            <?php 
                $industry_sub_heading = get_field('industry_sub_heading');
                if( $industry_sub_heading ) {
            ?>
            <h4 class="uxgoperations__subheading"><?php echo $industry_sub_heading ;?></h4>
            <?php 
                }
            ?>
            <?php 
                $industry_description = get_field('industry_description');
                if( $industry_description ) {
            ?>
            <p class="uxgoperations__descinfo"><?php echo $industry_description ;?></p>
            <?php 
                }
            ?>
            <?php 
                $industry_image_path = get_field('industry_image_path');
                if( $industry_image_path ) {
            ?>
            <img class="uxgoperations__image" src="<?php echo $industry_image_path ;?>" alt="<?php echo $industry_heading ;?>" />
            <?php 
                }
            ?>
        </div>
        <div class="uxgoperations__propertyright">
            <div class="hide--mobile">
                <div id="uxgoperations-carousel1" class="owl-carousel">
                    <?php 
                        $rows = get_field('industry_list');
                        if( $rows ) {
                            $listcount = count($rows);
                            $loopcount = intval($listcount/6) + ($listcount%6 > 0 ? 1 : 0);
                            for ($x = 0; $x < $loopcount; $x++) {
                    ?>
                        <div class="uxgoperations__propertylist">
                            <?php
                                for ($y = ($x*6); $y < $listcount; $y++) {
                                    if ($y < (($x+1)*6)) {
                            ?>
                                <div class="uxgoperations__property">
                                    <img class="uxgoperations__propertyimg" src="<?php echo $rows[$y]['icon'] ;?>" alt="<?php echo $rows[$y]['topic'] ;?>" />
                                    <p class="uxgoperations__propertydesc"><?php echo $rows[$y]['topic'] ;?></p>
                                </div>
                            <?php 
                                    }
                                }
                            ?>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="hide--desktop">
                <div id="uxgoperations-carousel2" class="owl-carousel">
                    <?php 
                        $rows = get_field('industry_list');
                        if( $rows ) {
                            $listcount = count($rows);
                            $loopcount = intval($listcount/3) + ($listcount%3 > 0 ? 1 : 0);
                            for ($x = 0; $x < $loopcount; $x++) {
                    ?>
                        <div class="uxgoperations__propertylist">
                            <?php
                                for ($y = ($x*3); $y < $listcount; $y++) {
                                    if ($y < (($x+1)*3)) {
                            ?>
                                <div class="uxgoperations__property">
                                    <img class="uxgoperations__propertyimg" src="<?php echo $rows[$y]['icon'] ;?>" alt="<?php echo $rows[$y]['topic'] ;?>" />
                                    <p class="uxgoperations__propertydesc"><?php echo $rows[$y]['topic'] ;?></p>
                                </div>
                            <?php 
                                    }
                                }
                            ?>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="uxgoperations__arrowcont">
                <a class="uxgoperations__arrow uxgoperations--prevarrow" href="javascript:void(0);" title="Previous">Previous</a>
                <a class="uxgoperations__arrow uxgoperations--nextarrow" href="javascript:void(0);" title="Next">Next</a>
            </div>
        </div>
    </div>
</div>