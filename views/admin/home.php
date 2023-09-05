
<?php
/** @var yii\web\View $this */
use yii\grid\GridView;
use yii\db\Query;
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
        <?php
        $this->title = 'Emp_salarys and Employees Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table1-index">

    <h1><?= $this->title ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id', // Columns from table1
            'employee_id',
              'month',
              // 'mobile_no', // More columns from table1
            [
                'attribute' => 'employees.fullname',
                 // Access columns from table2 using the relation
                'label' => 'Emp Name ', // Optional label
            ],
            // Add more columns as needed
            'attribute' => 'employees.mobile_no',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
           
        </div>

    </div>
</div>
<script>
    // let actionbtn=""
    
</script>
