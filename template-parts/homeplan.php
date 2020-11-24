<div class="uxgplan">
    <div id="particlescontainer7"></div>
    <div class="uxgplan__inner">
        <?php 
            $engagement_heading = get_field('engagement_heading');
            if( $engagement_heading ) {
        ?>
        <h4 class="uxgplan__heading"><?php echo $engagement_heading ;?></h4>
        <?php 
            }
        ?>
        <?php 
            $engagement_sub_heading = get_field('engagement_sub_heading');
            if( $engagement_sub_heading ) {
        ?>
        <h5 class="uxgplan__subheading"><?php echo $engagement_sub_heading ;?></h5>
        <?php 
            }
        ?>
        <?php 
            $engagement_description = get_field('engagement_description');
            if( $engagement_description ) {
        ?>
        <p class="uxgplan__desc"><?php echo $engagement_description ;?></p>
        <?php 
            }
        ?>
        <div class="uxgplan__blocklistcont">
            <?php 
                $rows = get_field('engagement_plans');
                if( $rows ) {
                    foreach( $rows as $row ) {
            ?>
            <div class="uxgplan__blocklist">
                <a class="uxgplan__blocklistlink" href="<?php echo $row['plan_button_link_path'] ;?>" title="<?php echo $row['team_name'] ;?>"></a>
                <h3 class="uxgplan__listheading"><?php echo $row['team_name'] ;?></h3>
                <h4 class="uxgplan__listsubheading"><?php echo $row['plan_name'] ;?></h4>
                <ul class="uxgplan__listcont">
                    <?php foreach( $row['plan_key_points'] as $value => $label ): ?>
                    <li class="uxgplan__list"><?php echo $label['description_points'] ;?></li>
                    <?php endforeach; ?>
                </ul>
                <button datahref="<?php echo $row['plan_button_link_path'] ;?>" class="btn uxgplan--btn"><?php echo $row['plan_button_label'] ;?></button>
                <a class="link uxgplan--link" href="<?php echo $row['plan_get_more_info_link_path'] ;?>" title="<?php echo $row['plan_get_more_info_label'] ;?>"><?php echo $row['plan_get_more_info_label'] ;?></a>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</div>
