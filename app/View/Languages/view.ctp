<div class="languages view">
  <h2><?php echo __('Language'); ?></h2>
  <dl>
    <dt><?php echo __('Id'); ?></dt>
    <dd>
      <?php echo h($language['Language']['id']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Language'); ?></dt>
    <dd>
      <?php echo h($language['Language']['language']); ?>
      &nbsp;
    </dd>
  </dl>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Edit Language'), array( 'action' => 'edit', $language['Language']['id'] )); ?> </li>
    <li><?php echo $this->Form->postLink(__('Delete Language'), array( 'action' => 'delete', $language['Language']['id'] ), array(), __('Are you sure you want to delete # %s?', $language['Language']['id'])); ?> </li>
    <li><?php echo $this->Html->link(__('List Languages'), array( 'action' => 'index' )); ?> </li>
    <li><?php echo $this->Html->link(__('New Language'), array( 'action' => 'add' )); ?> </li>
    <li><?php echo $this->Html->link(__('List Users'), array( 'controller' => 'users', 'action' => 'index' )); ?> </li>
    <li><?php echo $this->Html->link(__('New User'), array( 'controller' => 'users', 'action' => 'add' )); ?> </li>
  </ul>
</div>
<div class="related">
  <h3><?php echo __('Related Users'); ?></h3>
  <?php if( ! empty($language['User']) ): ?>
    <table cellpadding="0" cellspacing="0">
      <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Username'); ?></th>
        <th><?php echo __('Slug'); ?></th>
        <th><?php echo __('Password'); ?></th>
        <th><?php echo __('Password Salt'); ?></th>
        <th><?php echo __('Password Token'); ?></th>
        <th><?php echo __('Email'); ?></th>
        <th><?php echo __('Email Verified'); ?></th>
        <th><?php echo __('Email Token'); ?></th>
        <th><?php echo __('Email Token Expires'); ?></th>
        <th><?php echo __('Tos'); ?></th>
        <th><?php echo __('Active'); ?></th>
        <th><?php echo __('Last Login'); ?></th>
        <th><?php echo __('Last Action'); ?></th>
        <th><?php echo __('Is Admin'); ?></th>
        <th><?php echo __('Role'); ?></th>
        <th><?php echo __('Created'); ?></th>
        <th><?php echo __('Modified'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php foreach( $language['User'] as $user ): ?>
        <tr>
          <td><?php echo $user['id']; ?></td>
          <td><?php echo $user['username']; ?></td>
          <td><?php echo $user['slug']; ?></td>
          <td><?php echo $user['password']; ?></td>
          <td><?php echo $user['password_salt']; ?></td>
          <td><?php echo $user['password_token']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td><?php echo $user['email_verified']; ?></td>
          <td><?php echo $user['email_token']; ?></td>
          <td><?php echo $user['email_token_expires']; ?></td>
          <td><?php echo $user['tos']; ?></td>
          <td><?php echo $user['active']; ?></td>
          <td><?php echo $user['last_login']; ?></td>
          <td><?php echo $user['last_action']; ?></td>
          <td><?php echo $user['is_admin']; ?></td>
          <td><?php echo $user['role']; ?></td>
          <td><?php echo $user['created']; ?></td>
          <td><?php echo $user['modified']; ?></td>
          <td class="actions">
            <?php echo $this->Html->link(__('View'), array( 'controller' => 'users', 'action' => 'view', $user['id'] )); ?>
            <?php echo $this->Html->link(__('Edit'), array( 'controller' => 'users', 'action' => 'edit', $user['id'] )); ?>
            <?php echo $this->Form->postLink(__('Delete'), array( 'controller' => 'users', 'action' => 'delete', $user['id'] ), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>

  <div class="actions">
    <ul>
      <li><?php echo $this->Html->link(__('New User'), array( 'controller' => 'users', 'action' => 'add' )); ?> </li>
    </ul>
  </div>
</div>
