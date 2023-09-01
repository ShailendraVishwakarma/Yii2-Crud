

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
        <h1 style="color:#337ab7">Yii CRUD Application</h1>
    </div>
    <div class="row">
    <span><?= Html::a('create',['site/create'],['class' => 'btn btn-primary']); ?></span>
    </div>
    <div class="body-content">
        <div class="row">
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      
      <th scope="col">Pincode</th>
      <th scope="col">DOJ</th>
      <th scope="col">DOL</th>
      <th scope="col">Monthly Salary</th>
      <th scope="col">Yearly salary</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($employees1) > 0): ?>
    <?php foreach($employees1 as $employee): ?>
    <tr class="table-active">
      <th scope="row"><?php echo $employee->id; ?></th>
      <td><?php echo $employee->fullname; ?></td>
      <td><?php echo $employee->mobile_no; ?></td>
      <td><?php echo $employee->email; ?></td>
      <td><?php echo $employee->address; ?></td>
      <td><?php echo $employee->pincode; ?></td>
      <td><?php echo $employee->date_of_joining; ?></td>
      <td><?php echo $employee->date_of_leaving; ?></td>
      <td><?php echo $employee->monthly_salary; ?></td>
      <td><?php echo $employee->yearly_salary; ?></td>
      <td><?php echo $employee->profile_photo; ?></td>
      <td>
        <span class=""><?= Html::a('View', ['view', 'id' =>$employee->id],['class'=>'label label-primary']);?></span>
        <span class=""><?= Html::a('Edit', ['update', 'id' =>$employee->id],['class'=>'label label-success']) ?></span>
        <span class=""><?= Html::a('Delete', ['delete', 'id' =>$employee->id],['class'=>'label label-danger']) ?></span>

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
    let actionbtn=""
</script>
