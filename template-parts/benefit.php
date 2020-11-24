<div class="uxghirebnfts">
    <div class="uxghirebnfts__inner">
        <?php 
            $card_heading = get_field('3card_heading');
            if( $card_heading ) {
        ?>
        <h3 class="uxghirebnfts__heading"><?php echo $card_heading ;?></h3>
        <?php 
            }
        ?>
        <?php 
            $card_sub_heading = get_field('3card_sub_heading');
            if( $card_sub_heading ) {
        ?>
        <h4 class="uxghirebnfts__subheading"><?php echo $card_sub_heading ;?></h4>
        <?php 
            }
        ?>
            <?php 
                $rows = get_field('3card_list');
                $index = 0;
                if( $rows ) {
                    foreach( $rows as $row ) {
            ?>
            <?php
                if( $index == 0 || $index%3 == 0) {
            ?>
            <div class="uxghirebnfts__cnt">
            <?php 
                }
            ?> 
            <div class="uxghirebnfts__cntblck">
                <a class="uxghirebnfts__link" href="<?php echo $row['link_path'] ; ?>" title="<?php echo $row['heading'] ; ?>"></a>
                <img class="uxghirebnfts__icon" src="<?php echo $row['icon'] ; ?>" alt="<?php echo $row['heading'] ; ?>" />
                <h5 class="uxghirebnfts__cnttitle"><?php echo $row['heading'] ; ?></h5>
                <p class="uxghirebnfts__cntdesc"><?php echo $row['description'] ; ?></p>
            </div>
            <?php
                if( (($index+1)%3) == 0) {
            ?>
            </div>
            <?php 
                }
            ?> 
            <?php 
                    $index++;
                    }
                }
            ?>
    </div>
    <div class="uxghirebnfts__btm"></div>
</div>