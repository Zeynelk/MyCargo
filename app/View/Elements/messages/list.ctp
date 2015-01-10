<?php
/**
 * Created by PhpStorm.
 * User: vboxuser
 * Date: 30.12.14
 * Time: 13:30
 */
?>

<div class="col-sm-12 container">
  <h4><?php echo __d('messages', 'Send Messages'); ?></h4>
  <?php echo $this->element('messages/send'); ?>
</div>

<?php if(empty($received)) { ?>
  <div class="col-sm-12 container">
<?php } else { ?>
  <div class="col-sm-6 container">
<?php } ?>
    <h4><?php echo __d('messages', empty($received)?'Messages':'Sended Messeges'); ?></h4>
    <?php echo $this->element('messages/view', array('messages' => $messages, 'depth' => 0)); ?>
</div>

<?php if(!empty($received)) { ?>
  <div class="col-sm-6 container">
    <h4><?php echo __d('messages', 'Received Messages'); ?></h4>
    <?php echo $this->element('messages/view', array('messages' => $received, 'depth' => 0)); ?>
  </div>

<?php } ?>
