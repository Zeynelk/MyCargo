<div class="row">
  <?php echo $this->Session->flash('auth'); ?>
  <div class="col-lg-6 col-lg-offset-3">
    <h2><?php echo __d('users', 'Edit User'); ?></h2>

    <div class="well">

      <?php echo $this->Form->create($model, array( 'class' => 'form-horizontal', 'inputDefaults' => array( 'label' => false, 'action' => 'edit' ) )); ?>

      <div class="form-group">
        <label class="col-sm-2 control-label">
          <?php echo __d('users', 'User'); ?>
        </label>

        <label class="col-sm-10">
          <?php echo $this->Form->input('username', array( 'class' => 'form-control', 'value' => $this->Session->read('Auth.User.username'), 'readonly' => 'readonly' )); ?>
        </label>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">
          <?php echo __d('users', 'Email'); ?>
        </label>

        <label class="col-sm-10">
          <?php echo $this->Form->input('email', array( 'class' => 'form-control', 'value' => $this->Session->read('Auth.User.email'), 'readonly' => 'readonly' )); ?>
        </label>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <?php echo $this->Html->link(__d('users', 'Change your password'), array('action' => 'change_password'), array('class'=> 'btn btn-sm btn-warning')); ?>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">
          <?php echo __d('user_details', 'First Name'); ?>
        </label>

        <label class="col-sm-10">
          <?php echo $this->Form->input('UserDetail.first_name', array( 'class' => 'form-control', 'value' => $this->Session->read('Auth.User.UserDetail.first_name') )); ?>
        </label>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">
          <?php echo __d('user_details', 'Last Name'); ?>
        </label>

        <label class="col-sm-10">
          <?php echo $this->Form->input('UserDetail.last_name', array( 'class' => 'form-control', 'value' => $this->Session->read('Auth.User.UserDetail.last_name') )); ?>
        </label>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">
          <?php echo __d('user_details', 'Birthday'); ?>
        </label>

        <label class="col-sm-10">
          <?php echo $this->Form->input(
            'UserDetail.birthday', array( 'class' => 'form-control', 'selected' => $this->Session->read('Auth.User.UserDetail.birthday'), 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 18 )
          );?>
        </label>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">
          <?php echo __d('user_details', 'Biography'); ?>
        </label>

        <label class="col-sm-10">
          <?php echo $this->Form->textarea('UserDetail.biography', array( 'class' => 'form-control', 'value' => $this->Session->read('Auth.User.UserDetail.biography') )); ?>
        </label>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">
          <?php echo __d('user_details', 'Mobil Phone'); ?>
        </label>

        <label class="col-sm-10">
          <?php echo $this->Form->input('UserDetail.mobile_number', array( 'class' => 'form-control', 'value' => $this->Session->read('Auth.User.UserDetail.mobile_number') )); ?>
        </label>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <?php
                $options = array( 'label' => __d('user_details', 'Smoker') );
                if( $this->Session->read('Auth.User.UserDetail.smoke') == 1 ) $options['checked'] = 'checked';
                echo $this->Form->input('UserDetail.smoke', $options);
              ?>
          </div>
          </label>
        </div>
      </div>
      <br/>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
                    <?php echo $this->Form->submit(__d('users', 'Submit'),array('class'=>'btn btn-primary'))?>
                </div>
      </div>

      <?php echo $this->Form->end(); ?>

    </div>
  </div>
</div>

