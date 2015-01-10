<?php
  /**
   * Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
   *
   * Licensed under The MIT License
   * Redistributions of files must retain the above copyright notice.
   *
   * @copyright Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
   * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
   */
?>
<div class="users overview">
  <h2><?php echo __d('users', 'Welcome'); ?> <?php echo $user[$model]['username']; ?></h2>
  <div class="well container">
    <?php echo $this->element('user/details'); ?>
  </div>
  <h3><?php echo __d('messages', 'Messages'); ?></h3>
  <div class="well container">
    <?php echo $this->element('messages/list'); ?>
  </div>
</div>