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

/* @var $this yii\web\View */
/* @var $survey \onmotion\survey\models\Survey */

$this->title = Yii::t('survey', 'Update survey');

?>

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Редактирование блока вопросов</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <?= $this->render('_form', ['survey' => $survey]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

