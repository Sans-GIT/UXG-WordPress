<div class="uxgcontactform uxgcontactform--page">
    <div class="uxgcontactform__successinner">
        <span class="uxgcontactform__successimg"></span>
        <h6 class="uxgcontactform__successheading">Request Recieved</h6> 
        <p class="uxgcontactform__successpara">We will reach out to you soon</p>
    </div>
    <div class="uxgcontactform__inner">
        <div class="uxgcontactform__left">
            <?php 
                $contact_heading = get_field('contact_heading');
                if( $contact_heading ) {
            ?>
            <h5 class="uxgcontactform__heading"><?php echo $contact_heading ;?></h5>
            <?php 
                }
            ?>
            <?php 
                $contact_sub_heading = get_field('contact_sub_heading');
                if( $contact_sub_heading ) {
            ?>
            <p class="uxgcontactform__desc"><?php echo $contact_sub_heading ;?></p>
            <?php 
                }
            ?>
        </div>
        <div class="uxgcontactform__right">
            <?php echo do_shortcode( '[contact-form-7 id="258" title="Contact form"]' ); ?>
        </div>
    </div>
</div>