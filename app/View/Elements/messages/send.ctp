<?php
/**
 * Created by PhpStorm.
 * User: vboxuser
 * Date: 03.01.15
 * Time: 15:13
 */
?>
<?php echo $this->Form->create('Message', array(
    'inputDefaults' => array(
      'div' => 'form-group',
      'label' => array(
        'class' => 'col col-md-3 control-label'
      ),
      'inputWrap' => array(
        'tag' => 'div',
        'class' => 'col-md-9'
      ),
      'class' => 'form-control'
    ),
    'class' => 'form-horizontal',
    'action' => 'send'
  )); ?>
<?php
  $options = array(
    'label' => __d('messages', 'Receiver'),
    'placeholder' => __d('messages', 'test')
  );
  if(!empty($to_user)) {
    $options['value'] = $to_user['username'];
    $options['disabled'] = true;
  }
  echo $this->Form->input('to_user', $options);
?>

<?php
  $options = array(
    'label' => __d('messages', 'Topic'),
    'placeholder' => __d('messages', 'Example Topic')
  );
  if(!empty($answer_to)) {
    $options['value'] = "RE: " . $answer_to['topic'];
    $options['disabled'] = true;
  }
  echo $this->Form->input('topic', $options); ?>
<?php echo $this->Form->textarea('message', array('label' => __d('messages', 'Message'))); ?>

<?php
  $text = 'Send';
  if(!empty($answer_to))
    $text = 'Answer';
  echo $this->Form->submit(__d('messages', $text), array(
    'div' => 'form-group',
    'class' => 'btn btn-success'
  ));
?>

<?php
  if(!empty($answer_to)) {
    echo $this->Form->hidden('answer_to', array('value' => $answer_to['id']));
    echo $this->Form->hidden('topic', array('value' => "RE: " . $answer_to['topic']));
  }
  if(!empty($to_user)) {
    echo $this->Form->hidden('to_user_id', array('value' => $to_user['id']));
  }
  if(!empty($request)) {
    echo $this->Form->hidden('request', array('value' => $request['id']));
  }
  if(!empty($offer)) {
    echo $this->Form->hidden('offer', array('value' => $offer['id']));
  }
  echo $this->Form->hidden('i_am_here', array('value' => $this->request->here));
  echo $this->Form->end();
?>