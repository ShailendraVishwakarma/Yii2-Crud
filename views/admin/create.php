
<?php

/** @var yii\web\View $this */

use app\models\Employees;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Crud Application';
?>
<div class="site-index">
<h1 class="mt-5"> Emp Salary</h1>
    
    
    <div class="body-content">
        <?php 
        $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]) ?>
        
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
               <?= $form->field($emp_salary,'employee_id')->dropDownList(
                ArrayHelper::map(Employees::find()->all(), 'id','fullname'),
                [
                    'promt'=>'Select Employee',
                ]
                );
                ?>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($emp_salary, 'month'); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($emp_salary, 'year'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($emp_salary, 'salary_credited'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($emp_salary, 'paid_for_days'); ?>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
            <div class="col-lg-3">
            <?= Html::submitButton('Create ',['class'=>'btn btn-primary']);?>
            </div>
            <div class="col-lg-2">
                <a href=<?php echo yii::$app->homeUrl;?>class=" btn btn-primary">Go Back</a>
            </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end() ?>
    </div>
</div>
