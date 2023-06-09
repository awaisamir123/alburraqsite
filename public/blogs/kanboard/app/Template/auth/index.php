<script type="text/javascript" src="assets/js/custome.js"></script>

<div class="col-md-3 col-md-offset-4 login-form-main" >

<div class="form-login login-parent">
    <img src="assets/img/logo.png" alt="logo" class="login-logo" style="width:100%">
    <?= $this->hook->render('template:auth:login-form:before') ?>

    <?php if (isset($errors['login'])): ?>
        <p class="alert alert-error"><?= $this->text->e($errors['login']) ?></p>
    <?php endif ?>

    <?php if (! HIDE_LOGIN_FORM): ?>
    <form method="post" action="<?= $this->url->href('AuthController', 'check') ?>">

        <?= $this->form->csrf() ?>

        <?= $this->form->label(t('Username'), 'username') ?>
        <?= $this->form->text('username', $values, $errors, array('autofocus', 'required')) ?>
        
        <?= $this->form->label(t('Password'), 'password') ?>
        <?= $this->form->password('password', $values, $errors, array('required')) ?>

        <?php if (isset($captcha) && $captcha): ?>
            <?= $this->form->label(t('Enter the text below'), 'captcha') ?>
            <img src="<?= $this->url->href('CaptchaController', 'image') ?>" alt="Captcha">
            <?= $this->form->text('captcha', array(), $errors, array('required')) ?>
        <?php endif ?>

        <?php if (REMEMBER_ME_AUTH): ?>
            <?= $this->form->checkbox('remember_me', t('Remember Me'), 1, true) ?><br>
        <?php endif ?>

        <div class="form-actions">
            <button type="submit" class="btn btn-blue"><?= t('Sign in') ?></button>
        </div>
        <?php if ($this->app->config('password_reset') == 1): ?>
            <div class="reset-password">
                <?= $this->url->link(t('Forgot password?'), 'PasswordResetController', 'create') ?>
            </div>
        <?php endif ?>
    </form>
    <?php endif ?>

    <?= $this->hook->render('template:auth:login-form:after') ?>
</div>
</div>
