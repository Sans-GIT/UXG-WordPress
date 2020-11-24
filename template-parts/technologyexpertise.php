<div class="uxgmulexpns">
    <div class="uxgmulexpns__inner">
        <?php 
            $technology_expertise_heading = get_field('technology_expertise_heading');
            if( $technology_expertise_heading ) {
        ?>
        <h3 class="uxgmulexpns__heading"><?php echo $technology_expertise_heading ;?></h3>
        <?php 
            }
        ?>
        <?php 
            $technology_expertise_sub_heading = get_field('technology_expertise_sub_heading');
            if( $technology_expertise_sub_heading ) {
        ?>
        <h4 class="uxgmulexpns__subheading"><?php echo $technology_expertise_sub_heading ;?></h4>
        <?php 
            }
        ?>
        <div class="uxgmulexpns__content">
            <ul class="uxgmulexpns__listcont hide--mobileflx">
                <?php 
                    $rows = get_field('technology_list');
                    $index = 0;
                    if( $rows ) {
                        foreach( $rows as $row ) {
                ?>
                <?php 
                    if( $index === 0 ) {
                ?>
                <li class="uxgmulexpns__list">
                    <a dataparam="tech<?php echo $index ;?>" class="uxgmulexpns__link uxgmulexpns--linkactive" href="javascript:void(0);" title="<?php echo $row['heading'] ;?>"><?php echo $row['heading'] ;?></a>
                </li>
                <?php 
                    }
                ?>
                <?php 
                    if( $index !== 0 ) {
                ?>
                <li class="uxgmulexpns__list">
                    <a dataparam="tech<?php echo $index ;?>" class="uxgmulexpns__link" href="javascript:void(0);" title="<?php echo $row['heading'] ;?>"><?php echo $row['heading'] ;?></a>
                </li>
                <?php 
                    }
                ?>
                <?php 
                        $index++;
                        }
                    }
                ?>
            </ul>
            <?php 
                $rows = get_field('technology_list');
                $index = 0;
                if( $rows ) {
                    foreach( $rows as $row ) {
            ?>
            <?php 
                    if( $index === 0 ) {
            ?>
            <h5 dataparam="tech<?php echo $index ;?>" class="uxgmulexpns__techheading uxgmulexpns--techexapnd hide--desktop">
                <?php echo $row['heading'] ;?>
                <span class="uxgmulexpns__arrow"></span>
            </h5>
            <?php 
                }
            ?>
            <?php 
                if( $index !== 0 ) {
            ?>
            <h5 dataparam="tech<?php echo $index ;?>" class="uxgmulexpns__techheading hide--desktop">
                <?php echo $row['heading'] ;?>
                <span class="uxgmulexpns__arrow"></span>
            </h5>
            <?php 
                }
            ?>
            <div id="tech<?php echo $index ;?>" class="uxgmulexpns__tech">
                <div class="uxgmulexpns__techleft">
                    <p class="uxgmulexpns__techdesc"><?php echo $row['description'] ;?></p>
                    <ul class="uxgmulexpns__techlistcont">
                        <?php foreach( $row['key_points'] as $value => $label ): ?>
                        <li class="uxgmulexpns__techlist"><?php echo $label['point'] ;?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="uxgmulexpns__techright">
                    <?php foreach( $row['technologies'] as $value => $label ): ?>
                        <div class="uxgmulexpns__technlgs">
                            <img class="uxgmulexpns__technlgsimg" src="<?php echo $label['icon'] ;?>" alt="<?php echo $label['topic_heading'] ;?>" />
                            <p class="uxgmulexpns__technlgsdesc"><?php echo $label['topic_heading'] ;?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php 
                    $index++;
                    }
                }
            ?>
        </div>
    </div>
</div>