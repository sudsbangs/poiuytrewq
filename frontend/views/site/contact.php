<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <div class="col-md-8">

        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Contact Us</span></h4>

        <!-- Start Contact Form -->
        <form role="form" class="contact-form" id="contact-form" method="post">
            <div class="form-group">
                <div class="controls">
                    <input type="text" placeholder="Name" name="name">
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <input type="email" class="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <input type="text" class="requiredField" placeholder="Subject" name="subject">
                </div>
            </div>

            <div class="form-group">

                <div class="controls">
                    <textarea rows="7"  placeholder="Message" name="message"></textarea>
                </div>
            </div>
            <button type="submit" id="submit" class="btn-system btn-large">Send</button><div id="success" style="color:#34495e;"></div>
        </form>
        <!-- End Contact Form -->

    </div>

    <div class="col-md-4">

        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Information</span></h4>

        <!-- Some Info -->
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:10px;"></div>

        <!-- Info - Icons List -->
        <ul class="icons-list">
            <li><i class="fa fa-globe">  </i> <strong>Address:</strong> 1234 Street Name, Bangladesh.</li>
            <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@yourcompany.com</li>
            <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +12 345 678 001</li>
        </ul>

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:15px;"></div>

        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Working Hours</span></h4>

        <!-- Info - List -->
        <ul class="list-unstyled">
            <li><strong>Monday - Friday</strong> - 9am to 5pm</li>
            <li><strong>Saturday</strong> - 9am to 2pm</li>
            <li><strong>Sunday</strong> - Closed</li>
        </ul>

    </div>

</div>

<!--
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'subject') ?>
<?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
<?=
$form->field($model, 'verifyCode')->widget(Captcha::className(), [
    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
])
?>
            <div class="form-group">
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
<?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
-->