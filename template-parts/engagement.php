<div class="uxgengage">
    <?php 
        $rows = get_field('2_card_list');
        if( $rows ) {
            if (count($rows)%2 === 0) {
    ?>
    <div class="uxgengage__inner">
        <?php 
            foreach( $rows as $row ) {
        ?>
        <div class="uxgengage__blocks">
            <h3 class="uxgengage__heading"><?php echo $row['heading'] ;?></h3>
            <h4 class="uxgengage__subheading"><?php echo $row['sub_heading'] ;?></h4>
            <ul class="uxgengage__listcont">
                <?php foreach( $row['key_point_list'] as $value => $label ): ?>
                <li class="uxgengage__list"><?php echo $label['points'] ;?></li>
                <?php endforeach; ?>
            </ul>
            <button datahref="<?php echo $row['2_card_button_1_link_path'] ;?>" class="btn mar-tp--30"><?php echo $row['2_card_button_1_label'] ;?></button>
            <button datahref="<?php echo $row['2_card_button_2_link_path'] ;?>" class="btn mar-tp--30 mar-lt-25 btn--white"><?php echo $row['2_card_button_2_label'] ;?></button>
        </div>
        <?php 
            }
        ?>
    </div>
    <?php 
            }
        }
    ?>
    <?php 
        $rows = get_field('2_card_list');
        if( $rows ) {
            if (count($rows)%2 === 1) {
    ?>
    <div class="uxgengage__inner">
        <?php
            $index = 0;
            foreach( $rows as $row ) {
                if ($index === 0) {
        ?>
        <div class="uxgengage__blocks uxgengage--fullwidth">
            <div class="uxgengage__blocksinner">
                <h3 class="uxgengage__heading"><?php echo $row['heading'] ;?></h3>
                <h4 class="uxgengage__subheading"><?php echo $row['sub_heading'] ;?></h4>
                <button datahref="<?php echo $row['2_card_button_1_link_path'] ;?>" class="btn mar-tp--30 hide--mobile"><?php echo $row['2_card_button_1_label'] ;?></button>
                <button datahref="<?php echo $row['2_card_button_2_link_path'] ;?>" class="btn mar-tp--30 mar-lt-25 btn--white hide--mobile"><?php echo $row['2_card_button_2_label'] ;?></button>
            </div>
            <ul class="uxgengage__listcont">
                <?php foreach( $row['key_point_list'] as $value => $label ): ?>
                <li class="uxgengage__list"><?php echo $label['points'] ;?></li>
                <?php endforeach; ?>
            </ul>
            <div>
                <button datahref="<?php echo $row['2_card_button_1_link_path'] ;?>" class="btn mar-tp--30 hide--desktop"><?php echo $row['2_card_button_1_label'] ;?></button>
                <button datahref="<?php echo $row['2_card_button_2_link_path'] ;?>" class="btn mar-tp--30 mar-lt-25 btn--white hide--desktop"><?php echo $row['2_card_button_2_label'] ;?></button>
            </div>
        </div>
        <?php
                } 
                $index++;
            }
        ?>
    </div>
    <?php 
            }
        }
    ?>
    <?php 
        $rows = get_field('2_card_list');
        if( $rows ) {
            if (count($rows)%2 === 1) {
    ?>
    <div class="uxgengage__inner">
        <?php
            $index = 0;
            foreach( $rows as $row ) {
                if ($index !== 0) {
        ?>
        <div class="uxgengage__blocks">
            <h3 class="uxgengage__heading"><?php echo $row['heading'] ;?></h3>
            <h4 class="uxgengage__subheading"><?php echo $row['sub_heading'] ;?></h4>
            <ul class="uxgengage__listcont">
                <?php foreach( $row['key_point_list'] as $value => $label ): ?>
                <li class="uxgengage__list"><?php echo $label['points'] ;?></li>
                <?php endforeach; ?>
            </ul>
            <button datahref="<?php echo $row['2_card_button_1_link_path'] ;?>" class="btn mar-tp--30"><?php echo $row['2_card_button_1_label'] ;?></button>
            <button datahref="<?php echo $row['2_card_button_2_link_path'] ;?>" class="btn mar-tp--30 mar-lt-25 btn--white"><?php echo $row['2_card_button_2_label'] ;?></button>
        </div>
        <?php
                } 
                $index++;
            }
        ?>
    </div>
    <?php 
            }
        }
    ?>
</div>