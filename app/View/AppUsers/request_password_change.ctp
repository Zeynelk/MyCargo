<div class="row">
  <?php echo $this->Session->flash('auth'); ?>
  <div class="col-lg-6 col-lg-offset-3">
    <h2><?php echo __d('users', 'Forgot your password?'); ?></h2>

    <p><?php echo __d('users', 'Please enter the email you used for registration and you\'ll get an email with further instructions.'); ?></p>

    <div class="well">
      <?php echo $this->Form->create(
        $model, array( 'class' => 'form-horizontal', 'inputDefaults' => array( 'label' => false ), array( 'admin' => false, 'action' => 'reset_password' ) )
      );?>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">
          <?php echo __d('users', 'Your Email'); ?>
        </label>

        <div class="col-sm-10">
                    <?php echo $this->Form->input('email',array('class'=>'form-control'));?>
                </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
                    <?php echo $this->Form->submit(__d('users', 'Submit'),array('class'=>'btn btn-primary'))?>
                </div>
      </div>

      <?php echo $this->Form->end(); ?>

    </div>
  </div>
</div>