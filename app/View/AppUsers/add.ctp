<div class="row">
  <?php echo $this->Session->flash('auth'); ?>
  <div class="col-lg-6 col-lg-offset-3">
    <h2><?php echo __d('users', 'Account registration'); ?></h2>

    <div class="well">
      <?php echo $this->Form->create(
        $model, array( 'class' => 'form-horizontal', 'inputDefaults' => array( 'label' => false ), array( 'action' => 'login', 'id' => 'LoginForm' ) )
      );?>

      <div class="form-group">
        <label class="col-sm-3 control-label">
          <?php echo __d('users', 'Username'); ?>
        </label>

        <div class="col-sm-9">
          <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">
          <?php echo __d('users', 'E-mail (used as login)'); ?>
        </label>

        <div class="col-sm-9">
          <?php echo $this->Form->input(
            'email', array('class' => 'form-control', 'error' => array('isValid' => __d('users', 'Must be a valid email address'), 'isUnique' => __d('users', 'An account with that email already exists'))));?>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-3 control-label">
          <?php echo __d('users', 'Password'); ?>
        </label>

        <div class="col-sm-9">
          <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-3 control-label">
          <?php echo __d('users', 'Password (confirm)'); ?>
        </label>

        <div class="col-sm-9">
          <?php echo $this->Form->input('temppassword', array('class' => 'form-control', 'type' => 'password')); ?>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">
          <?php echo __d('user_details', 'First Name'); ?>
        </label>

        <label class="col-sm-9">
          <?php echo $this->Form->input('UserDetail.first_name', array( 'class' => 'form-control', 'value' => $this->Session->read('Auth.User.UserDetail.first_name') )); ?>
        </label>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">
          <?php echo __d('user_details', 'Last Name'); ?>
        </label>

        <label class="col-sm-9">
          <?php echo $this->Form->input('UserDetail.last_name', array( 'class' => 'form-control', 'value' => $this->Session->read('Auth.User.UserDetail.last_name') )); ?>
        </label>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">
          <?php echo __d('user_details', 'Birthday'); ?>
        </label>

        <label class="col-sm-9">
          <?php echo $this->Form->input(
            'UserDetail.birthday', array( 'class' => 'form-control', 'value' => time(), 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 18 )
          );?>
        </label>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <div class="checkbox">
            <label>
              <?php
                $tosLink = $this->Html->link(__d('users', 'Terms of Service'), array( 'controller' => 'pages', 'action' => 'tos', 'plugin' => null ));
                echo $this->Form->input(
                  'tos', array( 'label' => __d('appusers', 'I have read and agreed to ') . $tosLink )
                ); ?>
          </div>
          </label>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <?php echo $this->Form->submit(__d('users', 'Submit'), array('class' => 'btn btn-primary')) ?>
        </div>
      </div>

      <?php echo $this->Form->end(); ?>
    </div>
  </div>
</div>
