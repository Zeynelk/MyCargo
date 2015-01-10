<div class="row">
  <?php echo $this->Session->flash('auth'); ?>
  <div class="col-lg-6 col-lg-offset-3">
    <h2><?php echo __d('users', 'Change your password'); ?></h2>

    <p><?php echo __d('users', 'Please enter your old password because of security reasons and then your new password twice.'); ?></p>

    <div class="well">
      <?php echo $this->Form->create(
        $model, array( 'class' => 'form-horizontal', 'inputDefaults' => array( 'label' => false ), array( 'action' => 'change_password' ) )
      );?>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">
          <?php echo __d('users', 'Old Password'); ?>
        </label>

        <div class="col-sm-10">
                    <?php echo $this->Form->input('old_password',array('class'=>'form-control', 'type'=>'password'));?>
                </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">
          <?php echo __d('users', 'New Password'); ?>
        </label>

        <div class="col-sm-10">
                    <?php echo $this->Form->input('new_password',array('class'=>'form-control', 'type'=>'password'));?>
                </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">
          <?php echo __d('users', 'Confirm'); ?>
        </label>

        <div class="col-sm-10">
                    <?php echo $this->Form->input('confirm_password',array('class'=>'form-control', 'type'=>'password'));?>
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