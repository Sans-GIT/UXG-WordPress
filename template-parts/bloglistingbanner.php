<div class="uxgplanbanner">
    <div class="uxgplanbanner__inner">
        <?php 
            $plan_banner_heading = get_field('plan_banner_heading');
            if( $plan_banner_heading ) {
        ?>
        <h3 class="uxgplanbanner__heading"> <?php echo $plan_banner_heading ;?></h3>
        <?php 
            }
        ?>
        <!-- <ul class="uxgplanbanner__categorylistcont">
            <?php
                $categories = get_categories();
                $index = 0;
                if( $categories ) {
                    foreach($categories as $category) {
            ?>
            <?php
                if ($index === 0) {
            ?>
                <li class="uxgplanbanner__categorylist">
                    <a dataparam="category<?php echo $index ;?>" class="uxgplanbanner__categorylink uxgplanbanner--catlinkactive" href="javascript:void(0);" title="ALL">All</a>
                </li>
            <?php			
                }
            ?>
            <?php
                if ($index !== 0) {
            ?>
                <li class="uxgplanbanner__categorylist">
                    <a dataparam="category<?php echo $index ;?>" class="uxgplanbanner__categorylink" href="javascript:void(0);" title="<?php echo $category->name ;?>"><?php echo $category->name ;?> </a>
                </li>
            <?php			
                }
            ?>
            <?php
                        $index++;
                    }
                }
            ?>
        </ul> -->
    </div>
</div>