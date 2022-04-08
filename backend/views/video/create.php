<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="d-flex flex-column justify-content-center align-items-center">
    <div class="upload-icon">
        <i class="fas fa-upload"></i>
    </div>
    <p class="m-0">
        Drag and drop video files to upload
    </p>
        <br>
    <p class="test-muted">
        Your videos will be private until you publish them.
    </p>
<?php  \yii\bootstrap5\ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
])?>
    <button class="btn btn-primary btn-file">
        select file
        <input type="file" id="videoFile" name="video">
    </button>
<?php \yii\bootstrap5\ActiveForm::end()?>
    </div>


</p>
