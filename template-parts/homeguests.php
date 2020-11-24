<div class="uxgquests">
    <div id="particlescontainer12"></div>
    <div class="uxgquests__inner">
        <?php 
            $faq_image_path = get_field('faq_image_path');
            if( $faq_image_path ) {
        ?>
        <img class="uxgquests__image" src="<?php echo $faq_image_path ;?>" alt="<?php echo $faq_heading ;?>" />
        <?php 
            }
        ?>
        <?php 
            $faq_heading = get_field('faq_heading');
            if( $faq_heading ) {
        ?>
        <h4 class="uxgquests__heading"><?php echo $faq_heading ;?></h4>
        <?php 
            }
        ?>
        <div class="uxgquests__right">
            <?php 
                $rows = get_field('faq_list');
                if( $rows ) {
                    foreach( $rows as $key=>$value ) {
            ?>
            <div class="uxgquests__list">
                <?php 
                    if ($key == 0) {
                ?>
                    <span class="uxgquests__expandicon uxgquests--collapseicon"></span>
                <?php 
                    } else {
                ?>
                    <span class="uxgquests__expandicon"></span>
                <?php 
                    }
                ?>
                <p class="uxgquests__quest slide-in"><?php echo $rows[$key]['question'] ;?></p>
                <?php 
                    if ($key == 0) {
                ?>
                    <p class="uxgquests__answ slide-in"><?php echo $rows[$key]['answer'] ;?></p>
                <?php 
                    } else {
                ?>
                    <p class="uxgquests__answ dis--none"><?php echo $rows[$key]['answer'] ;?></p>
                <?php 
                    }
                ?>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
