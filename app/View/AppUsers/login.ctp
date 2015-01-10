<div class="row">
  <?php echo $this->Session->flash('auth'); ?>
  <div class="col-lg-6 col-lg-offset-3">
    <h2><?php echo __d('users', 'Login'); ?> </h2>

    <div class="well">
      <?php echo $this->Form->create(
        $model, array( 'class' => 'form-horizontal', 'inputDefaults' => array( 'label' => false ), array( 'action' => 'login', 'id' => 'LoginForm' ) )
      );?>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">
          <?php echo __d('users', 'Email'); ?>
        </label>

        <div class="col-sm-10">
                    <?php echo $this->Form->input('email',array('class'=>'form-control'));?>
                </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">
          <?php echo __d('users', 'Password'); ?>
        </label>

        <div class="col-sm-10">
                    <?php echo $this->Form->input('password',array('class'=>'form-control'));?>
                </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <?php echo $this->Form->input('remember_me', array( 'type' => 'checkbox', 'label' => __d('users', 'Remember Me') )); ?>
          </div>
          </label>
          <?php echo $this->Html->link(
            __d('users', 'I forgot my password'), array( 'action' => 'reset_password' )
          );
          ?>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
                    <?php echo $this->Form->submit(__d('users', 'Submit'),array('class'=>'btn btn-primary'))?>
                </div>
      </div>

      <?php
        echo $this->Form->hidden(
          'User.return_to', array( 'value' => $return_to )
        );

        echo $this->Form->end();

      ?>
    </div>
  </div>
</div>