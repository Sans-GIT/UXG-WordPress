<div class="uxgcost">
    <div id="particlescontainer3"></div>
    <div class="uxgcost__inner">
        <div class="uxgcost__secondinner">
            <div class="uxgcost__left">
                <?php 
                    $cost_saving_heading = get_field('cost_saving_heading');
                    if( $cost_saving_heading ) {
                ?>
                <h4 class="uxgcost__heading"><?php echo $cost_saving_heading ;?></h4>
                <?php 
                    }
                ?>
                <?php 
                    $cost_saving_sub_heading = get_field('cost_saving_sub_heading');
                    if( $cost_saving_sub_heading ) {
                ?>
                <h5 class="uxgcost__subheading"><?php echo $cost_saving_sub_heading ;?></h5>
                <?php 
                    }
                ?>
                <?php 
                    $cost_saving_description = get_field('cost_saving_description');
                    if( $cost_saving_description ) {
                ?>
                <p class="uxgcost__desc"><?php echo $cost_saving_description ;?></p>
                <?php 
                    }
                ?>
                <ul class="uxgcost__calclistcont">
                    <?php 
                        $team_size = get_field('team_size');
                        if( $team_size ) {
                    ?>
                    <li class="uxgcost__calclist">
                        <label class="uxgcost__calclabel">TEAM SIZE</label>
                        <select id="uxgcost-people" class="dropdown uxgcost__calcselect">
                            <?php
                                for ($x = 1; $x <= $team_size; $x++) {
                            ?>
                                <option><?php echo $x ;?> People</option>
                            <?php 
                                }
                            ?>
                        </select>
                    </li>
                    <?php 
                        }
                    ?>
                    <?php 
                        $hourly_cost = get_field('hourly_cost');
                        $cost_unit = get_field('cost_unit');
                        if( $hourly_cost ) {
                    ?>
                    <li class="uxgcost__calclist">
                        <label class="uxgcost__calclabel">TEAM HOURLY COST</label>
                        <select id="uxgcost-money" class="dropdown uxgcost__calcselect">
                            <?php
                                for ($x = 10; $x <= $hourly_cost;) {
                            ?>
                            <option><?php echo $cost_unit ;?> <?php echo $x ;?></option>
                            <?php 
                                $x += 10;
                                }
                            ?>
                        </select>
                    </li>
                    <?php 
                        }
                    ?>
                </ul>
                <?php 
                    $cost_saving_left_button = get_field('cost_saving_left_button');
                    if( $cost_saving_left_button ) {
                ?>
                <button class="btn btn--white mar-tp--30"><?php echo $cost_saving_left_button ;?></button>
                <?php 
                    }
                ?>
            </div>
            <div class="uxgcost__right">
                <h6 class="uxgcost__rightheading">Estimated Annual Savings</h6>
                <p class="uxgcost__estimation">
                    <?php 
                        $cost_unit = get_field('cost_unit');
                        if( $cost_unit ) {
                    ?>
                    <span class="uxgcost__estimationunit"><?php echo $cost_unit ;?></span>
                    <?php 
                        }
                    ?>
                    <span class="uxgcost__estimationvalue">24,000</span>
                </p>
                <p class="uxgcost__savepercentage">
                    <?php 
                        $cost_saving_save_percentage = get_field('cost_saving_save_percentage');
                        if( $cost_saving_save_percentage ) {
                    ?>
                    <strong><?php echo $cost_saving_save_percentage ;?></strong> 
                    <?php 
                        }
                    ?>
                    on your current spend
                </p>
                <ul class="uxgcost__costlistcont">
                    <li class="uxgcost__costlist">
                        <label class="uxgcost__costlabel">Yearly Insourcing Cost</label>
                        <span class="uxgcost__costvalue uxgcost--incostvalue">$42,000</span>
                    </li>
                    <li class="uxgcost__costlist">
                        <label class="uxgcost__costlabel">Yearly Outsourcing Cost</label>
                        <span class="uxgcost__costvalue uxgcost--outcostvalue">$16,000</span>
                    </li>
                </ul>
                <p class="uxgcost__exact">Want to know your exact savings?</p>
                <button class="btn btn-brdr--white">Get in touch</button>
                <a class="uxgcost__termlink link" href="javascript:void(0);" title="Terms & Conditions?">Terms & Conditions?</a>
            </div>
        </div>
    </div>
    <div class="uxgcost__bottombg"></div>
</div>