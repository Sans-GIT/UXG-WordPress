<div class="service">
    <?php
        $service_heading_required = get_field('service_heading_required');
        if( $service_heading_required ) {
    ?>
    <div class="service__inner">
        <?php
            $service_heading = get_field('service_heading');
            if( $service_heading ) {
        ?>
        <h2 class="service__heading"><?php echo $service_heading ;?></h2>
        <?php 
            }
        ?> 
        <?php
            $service_sub_heading = get_field('service_sub_heading');
            if( $service_sub_heading ) {
        ?>
        <h3 class="service__subheading"><?php echo $service_sub_heading ;?></h3>
        <?php 
            }
        ?> 
        <?php
            $service_description = get_field('service_description');
            if( $service_description ) {
        ?>
        <p class="service__description"><?php echo $service_description ;?></p>
        <?php 
            }
        ?> 
    </div>
    <?php 
        }
    ?>
    <?php 
        $rows = get_field('service_list');
        $index = 0;
        if( $rows ) {
            foreach( $rows as $row ) {
    ?>
    <?php 
        if($index === 0) {
    ?>
    <div class="service__listcont service--listfirst <?php echo $row['background_modifier_class_name'] ;?>">
    <?php 
        } else if($index === (count($rows) - 1)) {
    ?>
    <div class="service__listcont service--listlast <?php echo $row['background_modifier_class_name'] ;?>">
    <?php 
        } else {
    ?>
    <div class="service__listcont <?php echo $row['background_modifier_class_name'] ;?>">
    <?php 
        }
    ?>
        <div class="service__listinner <?php echo $row['modifier_class_name'] ;?>">
            <div class="service__listimgcont">
                <img class="service__listimg" src="<?php echo $row['image_path'] ;?>" alt="<?php echo $row['heading'] ;?>"/>
            </div>
            <div class="service__listcontent">
                <?php 
                    if($row['heading']) {
                ?>
                <h2 class="service__listheading"><?php echo $row['heading'] ;?></h2>
                <?php 
                    }
                ?>
                <p class="service__listdesc"><?php echo $row['description'] ;?></p>
                <ul class="service__ddlistcont">
                    <?php foreach( $row['points'] as $value => $label ): ?>
                    <li class="service__ddlist">
                        <img src="<?php echo $label['image_path'] ;?>" alt="<?php echo $label['bold_text'] ;?>" />
                        <p class="service__ddlistdesc"><strong><?php echo $label['bold_text'] ;?></strong> <?php echo $label['reaming_description_text'] ;?></p>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php	
            $index++;
            }
        }
    ?>
</div>