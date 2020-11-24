<div class="uxgwork">
    <div class="uxgwork__inner">
        <div class="uxgwork__left">
            <?php 
                $how_we_heading = get_field('how_we_heading');
                if( $how_we_heading ) {
            ?>
            <h4 class="uxgwork__heading"><?php echo $how_we_heading ;?></h4>
            <?php 
                }
            ?>
            <?php 
                $how_we_sub_heading = get_field('how_we_sub_heading');
                if( $how_we_sub_heading ) {
            ?>
            <h5 class="uxgwork__subheading"><?php echo $how_we_sub_heading ;?></h5>
            <?php 
                }
            ?>
            <?php 
                $how_we_description = get_field('how_we_description');
                if( $how_we_description ) {
            ?>
            <p class="uxgwork__desc"><?php echo $how_we_description ;?></p>
            <?php 
                }
            ?>
            <?php 
                $how_we_button_label = get_field('how_we_button_label');
                $how_we_button_link_path = get_field('how_we_button_link_path');
                if( $how_we_button_label ) {
            ?>
            <button datahref="<?php echo $how_we_button_link_path ;?>" class="btn hide--mobile"><?php echo $how_we_button_label ;?></button>
            <?php 
                }
            ?>
        </div>
        <div class="uxgwork__right">
            <ul class="uxgwork__reqmntlistcont">
                <?php 
                    $rows = get_field('how_we_requirement_list');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                ?>
                <li class="uxgwork__reqmntlist">
                    <a class="uxgwork__reqmntlink" href="<?php echo $row['link_path'] ;?>" title="<?php echo $row['heading'] ;?>"></a>
                    <?php echo $row['heading'] ;?>
                </li>
                <?php 
                        }
                    }
                ?>
            </ul>
            <?php 
                $how_we_button_label = get_field('how_we_button_label');
                $how_we_button_link_path = get_field('how_we_button_link_path');
                if( $how_we_button_label ) {
            ?>
            <button datahref="<?php echo $how_we_button_link_path ;?>" class="btn hide--desktop"><?php echo $how_we_button_label ;?></button>
            <?php 
                }
            ?>
            <?php 
                $how_we_right_image_path = get_field('how_we_right_image_path');
                $how_we_heading = get_field('how_we_heading');
                if( $how_we_right_image_path ) {
            ?>
            <img class="uxgwork__image" src="<?php echo $how_we_right_image_path ;?>" alt="<?php echo $how_we_heading ;?>" />
            <?php 
                }
            ?>
        </div>
    </div>
</div>
