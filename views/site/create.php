<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Crud Application';
?>
<div class="site-index">
<h1>Create Employee</h1>
    
    
    <div class="body-content">
        <?php 
        $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]) ?>
        
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($employee, 'fullname')->input('text'); ?>
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
                <?= $form->field($employee, 'profile_photo')->fileInput(); ?>
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
            <div class="body-content">
        <div class="mt-3 btn btn-primary text-bg-light">
            <a href="index">back</a>
         </div>
            </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end() ?>
    </div>
</div>
