<?php

use app\models\forms\SignUpForm;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var SignUpForm $model */

$this->title= 'sign';
?>
<br>
<div id="form" class="register">
    <?php $form = Activeform::begin([
        'id'=>'SignUpForm',
        'fIeldConfig'=> [
            'template'=>"{label}\n{input}\n{error}",
            'labelOptions'=>['class'=>'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions'=>['class'=>'col-lg-3 form-control'],
            'errorOptions'=>['class'=>'col-lg-7 invalid-feedback'],
            ],
        ]);
    ?>

    <?= $form->field($model,'login')->textInput()?>
    <?= $form->field($model,'email')->label('email')?>
    <?= $form->field($model,'password')->passwordinput()?>

    <div class="form-group text-center">
        <div>
            <?= Html::submitButton('Зарегистрироваться',['class'=>'btn btn-primary', 'name'=>'sign-up-button'])?>
        </div>
    </div>

    <?php ActiveForm::end()?>
</div>
