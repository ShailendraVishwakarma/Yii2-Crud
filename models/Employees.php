<?php
namespace app\models;
use yii\db\ActiveRecord;

class Employees extends ActiveRecord
{
    private $fullname;
    private $mobile_no;
    private $email;
    private $address;
    private $pincode;
    private $date_of_joining;
    private $date_of_leaving;
    private $monthly_salary;
    private $yearly_salary;
    private $profile_photo;

    public function rules()
    {
        return[
            [['fullname', 'mobile_no', 'email', 'address', 'pincode', 'date_of_joining', 'date_of_leaving', 'monthly_salary', 'yearly_salary','profile_photo'], 'required']
        ];
    }
}
?>