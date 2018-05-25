<?php

namespace HelloWorld\models;

use Yii;

/**
 * This is the model class for table "register_table".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $access_token
 * @property string $profile_pic
 * @property integer $created
 * @property integer $updated
 */
class UserModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'email', 'password', 'access_token', 'profile_pic', 'created', 'updated'], 'required'],
            [['created', 'updated'], 'integer'],
            [['firstname', 'lastname', 'email', 'password', 'access_token'], 'string', 'max' => 255],
            [['profile_pic'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'access_token' => 'Access Token',
            'profile_pic' => 'Profile Pic',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
