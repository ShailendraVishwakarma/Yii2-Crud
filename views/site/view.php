<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Crud Application';
?>
<div class="site-index">
    <h1>View Employee</h1>
    
    
    <div class="body-content">
        <div class="mb-3 btn btn-primary text-bg-light">
    <a href="index">back</a>
    </div>

    <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $employee->fullname; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $employee->mobile_no; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $employee->email; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $employee->address; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $employee->pincode; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $employee->date_of_joining; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $employee->date_of_leaving; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $employee->monthly_salary; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $employee->yearly_salary; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $employee->profile_photo; ?>
  </li>
  
</ul>
    </div>
</div>
    

