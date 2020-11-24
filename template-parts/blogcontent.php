<?php
    $postId = get_the_ID();
    $postTitle = get_the_title($postId);
    $postDate = get_the_date('j M Y', $postId);
    $postImage = wp_get_attachment_url( get_post_thumbnail_id($post->postId), 'thumbnail' ); 
?>
<div class="uxgblogdetail">
    <div class="uxgblogdetail__content">
        <h2 class="uxgblogdetail__postheading"><?php echo $postTitle; ?></h2>
        <?php echo get_post_field('post_content', $postId); ?>
        <?php 
            $authorId = $post->post_author; 
            $authorImg = get_avatar_url( 'avatar' , $authorId );
            $display_name = get_the_author_meta( 'display_name' , $authorId );
            if ($authorImg) {
        ?>
        <img src="<?php echo $authorImg ?> " class="uxgblogdetail__authorimg" alt="<?php echo $display_name  ?>" />
        <p class="uxgblogdetail__para uxgblogdetail--authorinfo"> 
            <span class="uxgblogdetail__authorname">
                <?php echo $display_name; ?> 
            </span>
            <span class="uxgblogdetail__postdate">
            <?php echo $postDate ?> 
            </span>
        </p>
        <?php
            }
        ?>
        <?php 
            $authorId = $post->post_author; 
            $authorImg = get_avatar_url( 'avatar' , $authorId );
            $display_name = get_the_author_meta( 'display_name' , $authorId );
            if (!$authorImg) {
        ?>
        <p class="uxgblogdetail__para uxgblogdetail--author"><span class="uxgblogdetail__writtenby">Written by</span> <?php echo $display_name; ?>, <?php echo $postDate ?>  </p>
        <?php
            }
        ?>
        <ul class="uxgblogdetail__socialicontoplist">
            <?php
                $rows = get_field('blog_social');
                if ($rows) {
                    foreach( $rows as $row ) {
            ?>
            <li class="uxgblogdetail__socialicon">
                <a class="uxgblogdetail__social" href="<?php echo $row['social_link_path'] ;?>" title="<?php echo $row['social_label'] ;?>"><img class="uxgblogdetail__socialimg" src="<?php echo $row['social_top_image'] ;?>" alt="<?php echo $row['social_label'] ;?>" /></a>
            </li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
    <img class="uxgblogdetail__postimg" src="<?php echo $postImage ;?>" alt="<?php echo $postTitle ;?>" />
</div>
<?php
?>
<div class="uxgblogdetail">
    <div class="uxgblogdetail__content">
        <?php
            $rows = get_field('blog_content');
            if ($rows) {
                foreach( $rows as $row ) {
        ?>
            <?php
                if ($row['content_type'] === "Heading") {
            ?>
            <h3 class="uxgblogdetail__heading"><?php echo $row['content'] ;?></h3>
            <?php
                }
            ?>
            <?php
                if ($row['content_type'] === "Para") {
            ?>
            <p class="uxgblogdetail__para"><?php echo $row['content'] ;?></p>
            <?php
                }
            ?>
            <?php
                if ($row['content_type'] === "BoldPara") {
            ?>
            <p class="uxgblogdetail__para uxgblogdetail--boldpara"><?php echo $row['content'] ;?></p>
            <?php
                }
            ?>
            <?php
                if ($row['content_type'] === "BoxPara") {
            ?>
            <p class="uxgblogdetail__para uxgblogdetail--boxpara"><?php echo $row['content'] ;?></p>
            <?php
                }
            ?>
            <?php
                if ($row['content_type'] === "ExpertComponent") {
            ?>
                <div class="uxgblogdetail__search">
                    <?php 
                        $recruitment_heading = get_field('recruitment_heading');
                        if( $recruitment_heading ) {
                    ?>
                    <h4 class="uxgblogdetail__searchheading"><?php echo $recruitment_heading ;?></h4>
                    <?php
                        }
                    ?>
                    <?php 
                        $recruitment_sub_heading = get_field('recruitment_sub_heading');
                        if( $recruitment_sub_heading ) {
                    ?>
                    <h5 class="uxgblogdetail__searchsubheading"><?php echo $recruitment_sub_heading ;?></h5>
                    <?php
                        }
                    ?>
                    <?php 
                        $recruitment_description = get_field('recruitment_description');
                        if( $recruitment_description ) {
                    ?>
                    <p class="uxgblogdetail__searchdesc"><?php echo $recruitment_description ;?></p>
                    <?php
                        }
                    ?>
                    <?php 
                        $recruitment_button_label = get_field('recruitment_button_label');
                        $culture_button_link_path = get_field('culture_button_link_path');
                        if( $recruitment_button_label ) {
                    ?>
                    <button datahref="<?php echo $culture_button_link_path ;?>" class="btn btn--white mar-tp--30"><?php echo $recruitment_button_label ;?></button>
                    <?php
                        }
                    ?>
                </div>
            <?php
                }
            ?>
            <?php
                if ($row['content_type'] === "Image") {
            ?>
            <img class="uxgblogdetail__img" src="<?php echo $row['content_image_path'] ;?>" alt="<?php echo $row['content'] ;?>" />
            <p class="uxgblogdetail__para uxgblogdetail--imagedesc"><?php echo $row['content'] ;?></p>
            <?php
                }
            ?>
        <?php
                }
            }
        ?>
        <?php $author_id=$post->post_author; ?>
        <p class="uxgblogdetail__para uxgblogdetail--author"><span class="uxgblogdetail__writtenby">Written by</span> <?php the_author_meta( 'user_nicename' , $author_id ); ?> </p>
        <?php
        ?>
        <ul class="uxgblogdetail__socialiconlist">
            <?php
                $rows = get_field('blog_social');
                if ($rows) {
                    foreach( $rows as $row ) {
            ?>
            <li class="uxgblogdetail__socialicon">
                <a class="uxgblogdetail__social" href="<?php echo $row['social_link_path'] ;?>" title="<?php echo $row['social_label'] ;?>"><img class="uxgblogdetail__socialimg" src="<?php echo $row['social_image'] ;?>" alt="<?php echo $row['social_label'] ;?>" /></a>
            </li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
</div>