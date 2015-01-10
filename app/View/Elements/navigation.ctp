<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo $this->Html->link(__('MyCargonaut'), '/', array( 'class' => 'navbar-brand' )); ?>
    </div>
    <div class="navbar-collapse collapse" id="navbar-main">
      <ul class="nav navbar-nav">
        <?php if( $this->Session->read('Auth.User.id') ) : ?>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"
               id="sandbox"><?php echo __d('appusers', 'Functions'); ?> <span
                class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="sandbox">

            </ul>
          </li>
        <?php endif; ?>
        <?php if( $this->Session->read('Auth.User.is_admin') ) : ?>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="sandbox">Admin <span
                class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="sandbox">
              <li>
                <?php echo $this->Html->link(__d('appusers', 'List Users'), array( 'admin' => true, 'controller' => 'users', 'action' => 'index' )); ?>
              </li>
              <li>
                <?php echo $this->Html->link(__d('users', 'Add User'), array( 'admin' => true, 'controller' => 'users', 'action' => 'add' )); ?>
              </li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if( ! $this->Session->read('Auth.User.id') ) : ?>
          <li><?php echo $this->Html->link(__('Login'), array( 'controller' => 'users', 'action' => 'login' )) ?></li>
          <li><?php echo $this->Html->link(
              __d('users', 'Account registration'), array( 'plugin' => 'users', 'controller' => 'users', 'action' => 'add' )
            ); ?>
          </li>
        <?php else: ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle"
               data-toggle="dropdown"><?php echo $this->Session->read('Auth.User.username'); ?> <b
                class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <?php echo $this->Html->link(
                  __d('appusers', 'My Account'), array( 'admin' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'dashboard' )
                ); ?>
              </li>
              <li>
              <li><?php echo $this->Html->link(
                  __d('appusers', 'Change password'), array( 'admin' => false, 'plugin' => 'users', 'controller' => 'users', 'action' => 'change_password' )
                ); ?>
              </li>
              <li>
                <?php echo $this->Html->link(
                  __d('users', 'Logout'), array( 'admin' => false, 'plugin' => 'users', 'controller' => 'users', 'action' => 'logout' )
                ); ?>
              </li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
