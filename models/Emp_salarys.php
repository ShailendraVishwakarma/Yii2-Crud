<?php
namespace app\models;
use yii\db\ActiveRecord;

class Emp_salarys extends ActiveRecord
{
    private $employee_id;
    private $month;
    private $year;
    private $salary_credited;
    private $paid_for_days;
   

    public function rules()
    {
        return[
            [['employee_id', 'month', 'year', 'salary_credited', 'paid_for_days'], 'required']
        ];
    }
}
?>