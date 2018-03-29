<?php 
    // P($data);
 ?>
<div id="content">
	<div id="reservation_management">
            <h1>Reservation management</h1>
            <form action="#">
                <fieldset>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                        <colgroup>
                            <col style="width: 5%">
                            <col style="width: 30%">
                            <col style="width: 10%">
                            <col style="width: 30%">
                            <col style="width: 10%">
                            <col style="width: 5%">
                            <col style="width: 5%">
                            <col style="width: 5%">
                            <col style="width: 5%">
                        </colgroup>
                        <thead>
                            <tr>
                            <th rowspan="2">Day</th>
                            <th rowspan="2">Seating</th>
                            <th rowspan="2">Booking No.</th>
                            <th rowspan="2">Guests</th>
                            <th rowspan="2">Status</th>
                            <th colspan="4">Action</th>
                            </tr>
                            <tr>
                            <th>Confirm</th>
                            <th>Decline</th>
                            <th>Waitlist</th>
                            <th>Reschedule</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($data as $key => $value){
                                if($value['status'] == '0'){
                                    $select = 1;
                        } ?>
                                <tr>
                                    <td>
                                        <?php 
                                            if(!isset($select)){
                                                echo orderDate($value['service_date']);
                                            }else{
                                                dumpDay($value['order_num']);
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if(!isset($select)){
                                                echo confirmation($value['service_type']);
                                            }else{
                                                dumpSeating($value['order_num']);
                                            }
                                        ?>
                                    </td>
                                    <td><span title="Sarah Rogers, WSI, +51342319531, sarah.rogers@worldskills.org, US">
                                        <?php echo $value['order_num'];?>
                                    </span></td>
                                    <td>
                                        <?php echo $value['guest_name']?>
                                        <br>
                                        <?php echo $value['guest_country']?>
                                    </td>
                                    <td>
                                        <?php echo status($value['status'])?>
                                    </td>
                                    <td><p class="text-center">
                                    <?php if(isset($select)){?>
                                        <input type="radio" name="2015000008-1" value="confirm">
                                    <?php }?>
                                    </p></td>
                                    <td><p class="text-center">
                                    <?php if(isset($select)){?>
                                        <input type="radio" name="2015000008-1" value="decline">
                                    <?php }?>
                                    </p></td>
                                    <td><p class="text-center">
                                    <?php if(isset($select)){?>
                                        <input type="radio" name="2015000008-1" value="waitlist">
                                    <?php }?>
                                    </p></td>
                                    <td><p class="text-center">
                                    <?php if(isset($select)){?>
                                        <input type="radio" name="2015000008-1" value="reschedule">
                                    <?php }?>
                                    </p></td>
                                </tr>
                        <?php unset($select);}?>
                        </tbody>
                        </table>
                    </div>
                </fieldset>
                <button class="btn btn-default" type="submit" name="create-guest-list">Create guest list</button>
                <button class="btn btn-default" type="submit" name="send-emails">Send emails</button>
                <button class="btn btn-primary" type="submit" name="save-confirmations">Save changes</button>
            </form>
    </div>
</div>