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
    <?php echo $emp_salary->employee_id; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $emp_salary->month; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $emp_salary->year; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $emp_salary->salary_credited; ?>
  </li>
  
  
</ul>
    </div>
</div>
    

