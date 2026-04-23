<h1>Contact Us</h1>

<!-- $form = Form::begin('', 'post');
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordField();
echo $form->submitButton('Login'); -->
<?php
use app\core\form\Form;
$form = Form::begin('', 'post');
echo $form->field($model, 'name');
echo $form->field($model, 'email');
echo $form->field($model, 'subject');
echo $form->field($model, 'body')->textareaField();
echo $form->submitButton('Send');
Form::end();
?>
