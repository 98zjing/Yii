<div id="content">
	    <div id="submission_confirmation">
        <h1 class="page-header">Submission confirmation</h1>
        <p>
        <?php echo $userName; ?>
        ,<br/><br/>
        Thank you for your booking request 
        <?php echo $num; ?>
        .<br/><br/>

        You have requested booking for the following guests:
        </p>
        <ul>
        <?php foreach ($data as $val) { ?>
            <li>
                <?php echo $val['service_date']. ' '.date('Y-m-d',$val['ctime']).' '.$val['experience'];?>
                <br/>for 
                <?php echo $val['guest_name']. ' '. $val['guest_country'];?>
                </li>
        <?php } ?>
        <!-- <li>C2 - 05.08.2015, Bar Service 13:15 - 14:45 <br/> for WS france sponsor, WS france sponsor, WS france sponsor, WS france sponsor, WS france sponsor, WS france sponsor, WS france sponsor FR,  WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor CA, WS france sponsor BE, WS france sponsor BE, Simon Bartley UK, David Hoey AU, Jane Stokie AU</li>
        <li>C4 - 07.08.2015, Bar Service 13:15 - 14:45 <br/> for Jane Stokie AU, Brigitte Collins AU, Skills Emirates UAE, Skills Emirates UAE, Skills Emirates UAE, Skills Emirates UAE</li> -->
        </ul>
        <p>
        Please note that these booking requests will need to be reviewed and confirmed by WSI. <br/>
        You will receive an email with the confirmation as soon as possible.
        </p>
    </div>
</div>