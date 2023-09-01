
<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
$this->title = 'Crud Application';
?>
<div class="site-index">
    <?php if(yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <?php echo yii::$app->session->getFlash('message'); ?>
</div>

    <?php endif; ?>
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 style="color:#337ab7">Employee List</h1>
    </div>
    <div class="row">
    <span><?= Html::a('create',['admin/create'],['class' => 'btn btn-primary']); ?></span>
    </div>
    <div class="body-content">
        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Emp ID</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Salary</th>
      
      <th scope="col">Days</th>
     
    </tr>
  </thead>
  <tbody>
    <?php if(count($emp_salarys) > 0): ?>
    <?php foreach($emp_salarys as $emp_salary): ?>
    <tr class="table-active">
      <th scope="row"><?php echo $emp_salary->id; ?></th>
      <td><?php echo $emp_salary->employee_id; ?></td>
      <td><?php echo $emp_salary->month; ?></td>
      <td><?php echo $emp_salary->year; ?></td>
      <td><?php echo $emp_salary->salary_credited; ?></td>
      <td><?php echo $emp_salary->paid_for_days; ?></td>
      <td>
        <span class=""><?= Html::a('View', ['view', 'id' =>$emp_salary->id],['class'=>'label label-primary']);?></span>
        <span class=""><?= Html::a('Edit', ['update', 'id' =>$emp_salary->id],['class'=>'label label-success']) ?></span>
        <span class=""><?= Html::a('Delete', ['delete', 'id' =>$emp_salary->id],['class'=>'label label-danger']) ?></span>

      </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td>No Records found</td>
        </tr>
        <?php endif; ?>
  </tbody>
</table>
           
           
        </div>

    </div>
</div>
<script>
    // let actionbtn=""
</script>
