<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking_user".
 *
 * @property integer $booking_user_id
 * @property string $name
 * @property string $organization
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property integer $ctime
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ctime'], 'integer'],
            [['name', 'email', 'phone', 'country'], 'string', 'max' => 32],
            [['organization'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'booking_user_id' => 'Booking User ID',
            'name' => 'Name',
            'organization' => 'Organization',
            'email' => 'Email',
            'phone' => 'Phone',
            'country' => 'Country',
            'ctime' => 'Ctime',
        ];
    }
}
