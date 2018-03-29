<div id="content">
        <h1 class="page-header">Booking request</h1>
	<form action="?r=index/single" method="POST">
            <fieldset>
                <legend>Individual</legend>
                <p>Booking an individual guest</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Dining experience</th>
                                 <?php for($i=0;$i<4;$i++) {?>
                                    <th>C<?php $s =$i+1;echo $s;?>: 
                                        <?php echo date('Y-m-d',strtotime("+ {$i} day"))?>
                                    </th>
                                <?php }?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Casual Dining<br/>10:50 - 12:30</td>
                            <td>available: 22 <input type="checkbox" name="c1-d1-n1" value="1"></td>
                            <td>available: 5 <input type="checkbox" name="c2-d1-n1" value="1"></td>
                            <td>available: 12 <input type="checkbox" name="c3-d1-n1" value="1"></td>
                            <td>available: 32 <input type="checkbox" name="c4-d1-n1" value="1"></td>
                            </tr>
                            <tr>
                            <td>Casual Dining<br/>13:30 - 14:40</td>
                            <td>available: 22 <input type="checkbox" name="c1-d2-n1" value="2"></td>
                            <td>available: 5 <input type="checkbox" name="c2-d2-n1" value="2"></td>
                            <td>available: 12 <input type="checkbox" name="c3-d2-n1" value="2"></td>
                            <td>available: 32 <input type="checkbox" name="c4-d2-n1" value="2"></td>
                            </tr>
                            <tr>
                            <td>Bar Service<br/>13:15 - 14:45</td>
                            <td>available: 22 <input type="checkbox" name="c1-d3-n1" value="3"></td>
                            <td>available: 5 <input type="checkbox" name="c2-d3-n1" value="3"></td>
                            <td>available: 12 <input type="checkbox" name="c3-d3-n1" value="3"></td>
                            <td>available: 32 <input type="checkbox" name="c4-d3-n1" value="3"></td>
                            </tr>
                            <tr>
                            <td>Fine Dining<br/>13:00 - 15:15</td>
                            <td>available: 22 <input type="checkbox" name="c1-d4-n1" value="4"></td>
                            <td>available: 5 <input type="checkbox" name="c2-d4-n1" value="4"></td>
                            <td>available: 12 <input type="checkbox" name="c3-d4-n1" value="4"></td>
                            <td>available: 32 <input type="checkbox" name="c4-d4-n1" value="4"></td>
                            </tr>
                            <tr>
                            <td>Banquet Dining<br/>12:45 - 15:00</td>
                            <td>available: 22 <input type="checkbox" name="c1-d5-n1" value="5"></td>
                            <td>available: 5 <input type="checkbox" name="c2-d5-n1" value="5"></td>
                            <td>available: 12 <input type="checkbox" name="c3-d5-n1" value="5"></td>
                            <td>available: 32 <input type="checkbox" name="c4-d5-n1" value="5"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Please note that most seating take place at the same time and you are not allowed to change once seated.<br />For a seating that is full, you will be waitlisted.</p>
            </fieldset>
            <button class="btn btn-primary" type="submit" name="book-individual">Submit booking request</button>
        </form>
</div>