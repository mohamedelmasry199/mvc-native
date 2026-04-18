<h2 class="mb-4">Login</h2>

<!-- <form method="POST" action="login"> -->
<?php
use app\core\form\Form;
$form = Form::begin('', 'post');
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordField();
echo $form->submitButton('Login');
Form::end();
?>
