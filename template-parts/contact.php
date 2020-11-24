<div class="uxgcontact">
    <div class="uxgcontact__inner">
        <div class="uxgcontact__left">
            <?php 
                $contact_information_heading = get_field('contact_information_heading');
                if( $contact_information_heading ) {
            ?>
            <h3 class="uxgcontact__heading"><?php echo $contact_information_heading ;?></h3>
            <?php 
                }
            ?>
            <ul class="uxgcontact__listcont">
                <?php
                    $contact_information_list = get_field('contact_information_list');
                    $index = 0;
                    if( $contact_information_list ) {
                        foreach($contact_information_list as $contact_information) {
                ?>
                <li class="uxgcontact__list">
                    <a class="uxgcontact__link" href="<?php echo $contact_information['details'] ;?>" title="<?php echo $contact_information['details'] ;?>">
                        <img class="uxgcontact__listimg" src="<?php echo $contact_information['icon'] ;?>" alt="<?php echo $contact_information['details'] ;?>" />
                        <span class="uxgcontact__listtext"><?php echo $contact_information['details'] ;?></span>
                    </a>
                </li>
                <?php
                        }
                    }
                ?>
            </ul>
        </div>
        <div class="uxgcontact__right">
            <div class="uxgcontact__map" id="googleMap"></div>
                <script>
                    function myMap() {
                        var mapProp= {
                            center:new google.maps.LatLng(13.016700,77.654820),
                            zoom:5,
                        };
                        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
        </div>
    </div>
</div>