<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Crud Application';
?>
<div class="site-index">
<h1>Update Employee</h1>
    
    
    <div class="body-content">
        <?php 
        $form = ActiveForm::begin() ?>
        
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'fullname'); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'mobile_no')->input('number'); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'email')->input('email'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'address'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'pincode')->input('number'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'date_of_joining')->input('date'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'date_of_leaving')->input('date'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'monthly_salary')->input('number'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'yearly_salary')->input('number'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
            <div class="col-lg-3">
            <?= Html::submitButton('Update Employee',['class'=>'btn btn-primary']);?>
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
