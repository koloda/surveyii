<?php
/**
 * Created by PhpStorm.
 * User: kozhevnikov
 * Date: 05/10/2017
 * Time: 14:24
 */

use kartik\editable\Editable;
use kartik\helpers\Html;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $survey \onmotion\survey\models\Survey */

$this->title = Yii::t('survey', 'Create new survey');

?>


<div class="panel panel-default"></div>
    <div class="panel-header">

    </div>
    <div class="panel-body">
        <?= $this->render('_form', ['survey' => $survey]) ?>
    </div>
</div>


