<?php
/**
 * Created by PhpStorm.
 * User: vboxuser
 * Date: 30.12.14
 * Time: 13:30
 */
?>

<div class="col-sm-10 container">
  <div class="col-sm-6">
    <?php echo __d('user_details', 'First Name'); ?>
  </div>
  <div class="col-sm-6">
    <?php echo $user['UserDetail']['first_name']; ?>
  </div>

  <div class="col-sm-6 control-label">
    <?php echo __d('user_details', 'Last Name'); ?>
  </div>
  <div class="col-sm-6">
    <?php
      if(AuthComponent::user('id') != $user[$model]['id'])
        echo $user['UserDetail']['last_name'];
      else
        echo $user['UserDetail']['last_name']{0} . '*******';
    ?>
  </div>

  <div class="col-sm-6">
    <?php echo __d('users', 'Email'); ?>
  </div>
  <div class="col-sm-6">
    <?php
      if(AuthComponent::user('id') == $user[$model]['id'])
        echo $user[$model]['email'];
      else
        echo $user[$model]['email']{0} . '****@****.***';
    ?>
  </div>

  <div class="col-sm-6">
    <?php
      if(AuthComponent::user('id') == $user[$model]['id'])
        echo __d('user_details', 'birthday');
      else
        echo __d('user_details', 'age');
    ?>
  </div>
  <div class="col-sm-6">
    <?php
      if(AuthComponent::user('id') == $user[$model]['id'])
        echo $user['UserDetail']['birthday'];
      else
        /*TODO: age calculation*/
        echo $user['UserDetail']['birthday'];
    ?>
  </div>


  <div class="col-sm-6">
    <?php echo __d('user_details', 'biography'); ?>
  </div>
  <div class="col-sm-6">
    <?php
        echo $user['UserDetail']['biography'];
    ?>
  </div>

  <div class="col-sm-6">
    <?php echo __d('users', 'registrated since'); ?>
  </div>
  <div class="col-sm-6">
    <?php
      /*TODO: date only or better since X days, Y month and Z years*/
      echo $user[$model]['created'];
    ?>
  </div>

  <div class="col-sm-12">
    <?php
      if($user['UserDetail']['smoke'])
        echo $user[$model]['username'] . " " . __d('user_details','is a smoker.');
      else
        echo $user[$model]['username'] . " " . __d('user_details','is not a smoker.');

    ?>
  </div>
</div>

<div class="col-sm-2">
  <?php
    $path = "defaultuser.png";
    if(!empty($user['UserDetail']['picture_path']))
      echo $user['UserDetail']['picture_path'];

    echo $this->Html->image("users/" . $path, array('class' => array('img-circle', 'img-thumbnail')));
  ?>
</div>
