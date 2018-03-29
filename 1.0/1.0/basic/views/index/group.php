<div id="content">
        <h1 class="page-header">Booking request</h1>
	<form action="?r=index/group" method="POST">
            <fieldset>
                <legend>Group</legend>
                <p>Booking a group</p>
                <!-- message -->
                <div class="error-message"></div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <?php for($i=0;$i<4;$i++) {?>
                        <li role="presentation" class="<?php if($i==0){echo 'active';} ?>"><a href="#c<?php $href = $i+1; echo$href;?>" aria-controls="c1" role="tab" data-toggle="tab">C<?php $s = $i+1;echo $s;?> 
                        <?php echo date('Y-m-d',strtotime("+ {$i} day"))?>
                        </a></li>
                    <?php }?>
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="c1">
                        <input type="hidden" name="day" value="c1">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Dining experience</th>
                                <th>Number of seats available<br/>Number of guests to be seated</th>
                                <th>Guest names (if known)</th>
                                <th>Guest country*</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Casual Dining<br/>10:50 - 12:30</td>
                                <td>
                                    available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d1" onclick="">+ Add guest</button>
                                    <button type="button" class="btn btn-default delguest" id="c1-d1" onclick="">- Del guest</button>
                                </td>
                                <td id="c1-d1-n">
                                    <p><input type="text" id="c1-d1-n1" name="c1-d1-n[]" class="form-control"></p>
                                    <p><input type="text" id="c1-d1-n2" name="c1-d1-n[]" class="form-control"></p>
                                    <p><input type="text" id="c1-d1-n3" name="c1-d1-n[]" class="form-control"></p>
                                    <p><input type="text" id="c1-d1-n4" name="c1-d1-n[]" class="form-control"></p>
                                </td>
                                <td id="c1-d1-o">
                                    <p>
                                    <select id="c1-d1-o1" name="c1-d1-o[]" class="form-control">
                                        <option value="">choose a country</option>
                                        <option value="AU">AU - Australia</option>
                                        <option value="BR">BR - Brasil</option>
                                        <option value="CA">CA - Canada</option>
                                        <option value="CH">CH - Switzerland</option>
                                        <option value="CN">CN - China</option>
                                        <option value="DE">DE - Germany</option>
                                        <option value="FR">FR - France</option>
                                        <option value="IN">IN - India</option>
                                    </select>
                                    </p>
                                    <p>
                                    <select id="c1-d1-o2" name="c1-d1-o[]" class="form-control">
                                        <option value="">choose a country</option>
                                        <option value="AU">AU - Australia</option>
                                        <option value="BR">BR - Brasil</option>
                                        <option value="CA">CA - Canada</option>
                                        <option value="CH">CH - Switzerland</option>
                                        <option value="CN">CN - China</option>
                                        <option value="DE">DE - Germany</option>
                                        <option value="FR">FR - France</option>
                                        <option value="IN">IN - India</option>
                                    </select>
                                    </p>
                                    <p>
                                    <select id="c1-d1-o3" name="c1-d1-o[]" class="form-control">
                                        <option value="">choose a country</option>
                                        <option value="AU">AU - Australia</option>
                                        <option value="BR">BR - Brasil</option>
                                        <option value="CA">CA - Canada</option>
                                        <option value="CH">CH - Switzerland</option>
                                        <option value="CN">CN - China</option>
                                        <option value="DE">DE - Germany</option>
                                        <option value="FR">FR - France</option>
                                        <option value="IN">IN - India</option>
                                    </select>
                                    </p>
                                    <p>
                                    <select id="c1-d1-o4" name="c1-d1-o[]" class="form-control">
                                        <option value="">choose a country</option>
                                        <option value="AU">AU - Australia</option>
                                        <option value="BR">BR - Brasil</option>
                                        <option value="CA">CA - Canada</option>
                                        <option value="CH">CH - Switzerland</option>
                                        <option value="CN">CN - China</option>
                                        <option value="DE">DE - Germany</option>
                                        <option value="FR">FR - France</option>
                                        <option value="IN">IN - India</option>
                                    </select>
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>Casual Dining<br/>13:30 - 14:40</td>
                                <td>
                                    available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d2" onclick="">+ Add guest</button>
                                    <button type="button" class="btn btn-default delguest" id="c1-d1" onclick="">- Del guest</button>
                                </td>
                                <td id="c1-d2-n">
                                    <p><input type="text" id="c1-d2-n1" name="c1-d2-n[]" class="form-control"></p>
                                </td>
                                <td id="c1-d2-o">
                                    <p>
                                    <select id="c1-d2-o1" name="c1-d2-o[]" class="form-control">
                                        <option value="">choose a country</option>
                                        <option value="AU">AU - Australia</option>
                                        <option value="BR">BR - Brasil</option>
                                        <option value="CA">CA - Canada</option>
                                        <option value="CH">CH - Switzerland</option>
                                        <option value="CN">CN - China</option>
                                        <option value="DE">DE - Germany</option>
                                        <option value="FR">FR - France</option>
                                        <option value="IN">IN - India</option>
                                    </select>
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>Bar Service<br/>13:15 - 14:45</td>
                                <td>
                                    available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d3" onclick="">+ Add guest</button>
                                    <button type="button" class="btn btn-default delguest" id="c1-d1" onclick="">- Del guest</button>
                                </td>
                                <td id="c1-d3-n">

                                </td>
                                <td id="c1-d3-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Fine Dining<br/>13:00 - 15:15</td>
                                <td>
                                    available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d4" onclick="">+ Add guest</button>
                                    <button type="button" class="btn btn-default delguest" id="c1-d1" onclick="">- Del guest</button>
                                </td>
                                <td id="c1-d4-n">

                                </td>
                                <td id="c1-d4-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Banquet Dining<br/>12:45 - 15:00</td>
                                <td>
                                    available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d5" onclick="">+ Add guest</button>
                                    <button type="button" class="btn btn-default delguest" id="c1-d1" onclick="">- Del guest</button>
                                </td>
                                <td id="c1-d5-n">

                                </td>
                                <td id="c1-d5-o">

                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="c2">
                        <input type="hidden" name="day" value="c2">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Dining experience</th>
                                <th>Number of seats available<br/>Number of guests to be seated</th>
                                <th>Guest names (if known)</th>
                                <th>Guest country*</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Casual Dining<br/>10:50 - 12:30</td>
                                <td>
                                    
                                </td>
                                <td id="c2-d1-n">

                                </td>
                                <td id="c2-d1-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Casual Dining<br/>13:30 - 14:40</td>
                                <td>

                                </td>
                                <td id="c2-d2-n">

                                </td>
                                <td id="c2-d2-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Bar Service<br/>13:15 - 14:45</td>
                                <td>

                                </td>
                                <td id="c2-d3-n">

                                </td>
                                <td id="c2-d3-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Fine Dining<br/>13:00 - 15:15</td>
                                <td>

                                </td>
                                <td id="c2-d4-n">

                                </td>
                                <td id="c2-d4-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Banquet Dining<br/>12:45 - 15:00</td>
                                <td>

                                </td>
                                <td id="c2-d5-n">

                                </td>
                                <td id="c2-d5-o">

                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="c3">
                        <input type="hidden" name="day" value="c3">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Dining experience</th>
                                <th>Number of seats available<br/>Number of guests to be seated</th>
                                <th>Guest names (if known)</th>
                                <th>Guest country*</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Casual Dining<br/>10:50 - 12:30</td>
                                <td>

                                </td>
                                <td id="c3-d1-n">

                                </td>
                                <td id="c3-d1-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Casual Dining<br/>13:30 - 14:40</td>
                                <td>

                                </td>
                                <td id="c3-d2-n">

                                </td>
                                <td id="c3-d2-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Bar Service<br/>13:15 - 14:45</td>
                                <td>

                                </td>
                                <td id="c3-d3-n">

                                </td>
                                <td id="c3-d3-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Fine Dining<br/>13:00 - 15:15</td>
                                <td>

                                </td>
                                <td id="c3-d4-n">

                                </td>
                                <td id="c3-d4-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Banquet Dining<br/>12:45 - 15:00</td>
                                <td>

                                </td>
                                <td id="c3-d5-n">

                                </td>
                                <td id="c3-d5-o">

                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="c4">
                        <input type="hidden" name="day" value="c4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Dining experience</th>
                                <th>Number of seats available<br/>Number of guests to be seated</th>
                                <th>Guest names (if known)</th>
                                <th>Guest country*</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Casual Dining<br/>10:50 - 12:30</td>
                                <td>

                                </td>
                                <td id="c4-d1-n">

                                </td>
                                <td id="c4-d1-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Casual Dining<br/>13:30 - 14:40</td>
                                <td>

                                </td>
                                <td id="c4-d2-n">

                                </td>
                                <td id="c4-d2-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Bar Service<br/>13:15 - 14:45</td>
                                <td>

                                </td>
                                <td id="c4-d3-n">

                                </td>
                                <td id="c4-d3-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Fine Dining<br/>13:00 - 15:15</td>
                                <td>

                                </td>
                                <td id="c4-d4-n">

                                </td>
                                <td id="c4-d4-o">

                                </td>
                                </tr>
                                <tr>
                                <td>Banquet Dining<br/>12:45 - 15:00</td>
                                <td>

                                </td>
                                <td id="c4-d5-n">

                                </td>
                                <td id="c4-d5-o">

                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </fieldset>
            <button class="btn btn-primary" type="submit" name="book-group">Submit booking request</button>
        </form>
</div>