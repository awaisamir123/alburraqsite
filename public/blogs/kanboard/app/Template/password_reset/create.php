<div class="col-md-3 col-md-offset-3 login-form-main" >
<div class="form-login col-xs-offset-3">
    <h2><?= t('Password Reset') ?></h2>
    <form method="post" action="<?= $this->url->href('PasswordResetController', 'save') ?>">
        <?= $this->form->csrf() ?>

        <?= $this->form->label(t('Username'), 'username') ?>
        <?= $this->form->text('username', $values, $errors, array('autofocus', 'required')) ?>
        <p class="form-help"><?= t('Your profile must have a valid email address.') ?></p>

        <?= $this->form->label(t('Enter the text below'), 'captcha') ?>
        <img src="<?= $this->url->href('CaptchaController', 'image') ?>" alt="Captcha">
        <?= $this->form->text('captcha', array(), $errors, array('required')) ?>

        <div class="form-actions">
            <button type="submit" class="btn btn-blue"><?= t('Change Password') ?></button>
        </div>
    </form>
</div>
</div>
