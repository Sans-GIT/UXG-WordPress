<div class="approach">
    <div class="approach__inner">
        <?php
            $approach_heading = get_field('approach_heading');
            if( $approach_heading ) {
        ?>
        <h2 class="approach__heading"><?php echo $approach_heading ;?></h2>
        <?php 
            }
        ?> 
        <?php
            $approach_sub_heading = get_field('approach_sub_heading');
            if( $approach_sub_heading ) {
        ?>
        <h3 class="approach__subheading"><?php echo $approach_sub_heading ;?></h3>
        <?php 
            }
        ?>
        <div class="approach__listcont">
            <?php 
                $rows = get_field('approach_list');
                $index = 0;
                if( $rows ) {
                    foreach( $rows as $row ) {
            ?>
            <div class="approach__list">
                <a class="approach__link" href="<?php echo $row['link_path'] ;?>" title="<?php echo $row['key_points'] ;?>"></a>
                <img src="<?php echo $row['image_path'] ;?>" alt="<?php echo $row['key_points'] ;?>" class="approach__img" />
                <img src="<?php echo $row['hover_image_path'] ;?>" alt="<?php echo $row['key_points'] ;?>" class="approach__img approach--hoverimg" />
                <p class="approach__listpoints"><?php echo $row['key_points'] ;?></p>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</div>