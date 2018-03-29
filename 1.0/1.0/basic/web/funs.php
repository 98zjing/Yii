<?php 
function P($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}
function URL($url){
	Yii::$app->requeste->baseRul .$url;
}
 function confirmation($date){
    switch ($date) {
        case '1':
            return '10:50 - 12:30 Casual Dining';
            break;
        case '2':
            return '13:30 - 14:40 Casual Dining';
            break;
        case '3':
            return '13:15 - 14:45 Bar Service';
            break;
        case '4':
            return '13:00 - 15:15 Fine Dining';
            break;
        case '5':
            return '12:45 - 15:00 Banquet Dining';
            break;
        default:
            break;
    }
}
function status($status){
    switch ($status) {
        case '0':
            return "requested";
            break;
        case '1':
            return 'confimed';
            break;
        case '2':
            return 'waitlisted';
            break;
        case '3':
            return 'declined';
            break;
        default:
            # code...
            break;
    }
}
function orderDate($type){
    switch ($type) {
        case '1':
            return 'C1';
            break;
        case '2':
            return 'C2';
            break;
        case '3':
            return 'C3';
            break;
        case '4':
            return 'C4';
            break;
        default:
            # code...
            break;
    }
}
function dumpDay($bookingNo){
    echo '
        <select id="" name="day-{$bookingNo}[]" class="form-control">
            <option value="1">C1</option>
            <option value="2">C2</option>
            <option value="3">C3</option>
            <option value="4">C4</option>
        </select>
    ';
}
function dumpSeating($bookingNo){
    echo '
        <select id="" name="seating-{$bookingNo}[]" class="form-control">
            <option value="1">Casual Dining 10:50 - 12:30</option>
            <option value="2">Casual Dining 13:30 - 14:40</option>
            <option value="3">Bar Service 13:15 - 14:45</option>
            <option value="4">Fine Dining 13:00 - 15:15</option>
            <option value="4">Banquet Dining 12:45 - 15:00</option>
        </select>
    ';
}