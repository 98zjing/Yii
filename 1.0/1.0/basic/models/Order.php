<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $order_num
 * @property integer $booking_user_id
 * @property integer $service_type
 * @property integer $service_date
 * @property string $seat_num
 * @property integer $status
 * @property integer $order_type
 * @property string $group_num
 * @property string $guest_name
 * @property string $guest_country
 * @property integer $ctime
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['booking_user_id', 'service_type', 'service_date', 'status', 'order_type', 'ctime'], 'integer'],
            [['order_num', 'seat_num', 'group_num', 'guest_name', 'guest_country'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_num' => 'Order Num',
            'booking_user_id' => 'Booking User ID',
            'service_type' => 'Service Type',
            'service_date' => 'Service Date',
            'seat_num' => 'Seat Num',
            'status' => 'Status',
            'order_type' => 'Order Type',
            'group_num' => 'Group Num',
            'guest_name' => 'Guest Name',
            'guest_country' => 'Guest Country',
            'ctime' => 'Ctime',
        ];
    }
}
