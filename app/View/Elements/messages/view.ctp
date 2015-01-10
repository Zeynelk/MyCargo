<?php
/**
 * Created by PhpStorm.
 * User: vboxuser
 * Date: 30.12.14
 * Time: 13:30
 */
?>
<?php
  for($i = 0; $i < count($messages); $i++) { ?>
  <div class="col-sm-offset-<?php echo $depth ?> col-sm-<?php echo 12 - $depth ?>">
    <div class="well well-sm">
      <h5><b><?php echo __d('messages','From'); ?> </b><?php echo $messages[$i]['FromUser']['username'] ?>
        <b><?php echo __d('messages','to')?></b> <?php echo $messages[$i]['ToUser']['username']; ?></h5>
      <h5><b><?php echo __d('messages','Topic'); ?>: </b><?php echo $messages[$i]['Message']['topic']; ?></h5>
      <?php echo $messages[$i]['Message']['message']; ?>
    </div>
    <?php
      if(count($messages[$i]['Answers']) == 0 && AuthComponent::user('id') != $messages[$i]['FromUser']['id'])
      echo $this->element('messages/send', array(
          'answer_to' => $messages[$i]['Message'],
          'to_user' => $messages[$i]['FromUser']
        ));?>
  </div>
  <?php
    if(count($messages[$i]['Answers']) > 0)
      echo $this->element('messages/view', array('messages' => $messages[$i]['Answers'], 'depth' => $depth+1));
  ?>
<?php } ?>