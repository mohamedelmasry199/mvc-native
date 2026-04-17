<h2 class="mb-4">Register</h2>
  <?php
    use app\core\form\Form;
    $form = Form::begin('', 'post');
    echo $form->field($model, 'firstname');
    echo $form->field($model, 'lastname');
    echo $form->field($model, 'email');
    echo $form->field($model, 'password')->passwordField();
    echo $form->field($model, 'passwordConfirm')->passwordField();
    echo $form->submitButton('Register');
    Form::end();
    ?>
<!-- <form method="POST" action="register">

    <div class="mb-3">
        <input
            type="text"
            name="firstname"
            class="form-control <?php echo $model->hasError('firstname') ? 'is-invalid' : '' ?>"
            value="<?php echo $model->firstname ?? '' ?>"
            placeholder="First Name"
            required
        >

        <?php if ($model->hasError('firstname')): ?>
            <div class="invalid-feedback">
                <?php echo $model->getFirstError('firstname'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <input
            type="text"
            name="lastname"
            class="form-control <?php echo $model->hasError('lastname') ? 'is-invalid' : '' ?>"
            value="<?php echo $model->lastname ?? '' ?>"
            placeholder="Last Name"
            required
        >

        <?php if ($model->hasError('lastname')): ?>
            <div class="invalid-feedback">
                <?php echo $model->getFirstError('lastname'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <input
            type="email"
            name="email"
            class="form-control <?php echo $model->hasError('email') ? 'is-invalid' : '' ?>"
            value="<?php echo $model->email ?? '' ?>"
            placeholder="Email"
            required
        >

        <?php if ($model->hasError('email')): ?>
            <div class="invalid-feedback">
                <?php echo $model->getFirstError('email'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <input
            type="password"
            name="password"
            class="form-control <?php echo $model->hasError('password') ? 'is-invalid' : '' ?>"
            placeholder="Password"
            required
        >

        <?php if ($model->hasError('password')): ?>
            <div class="invalid-feedback">
                <?php echo $model->getFirstError('password'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <input
            type="password"
            name="passwordConfirm"
            class="form-control <?php echo $model->hasError('passwordConfirm') ? 'is-invalid' : '' ?>"
            placeholder="Confirm Password"
            required
        >

        <?php if ($model->hasError('passwordConfirm')): ?>
            <div class="invalid-feedback">
                <?php echo $model->getFirstError('passwordConfirm'); ?>
            </div>
        <?php endif; ?>
    </div>

    <button class="btn btn-success w-100">
        Register
    </button>

</form> -->
