<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        MyCargonaut
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap.min.css');
        echo $this->Html->css('jquery-ui.css');
        echo $this->Html->css('jquery-ui.structure.css');
        echo $this->Html->css('jquery-ui.theme.css');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>

    <style>
        body {
          padding-top: 70px;
        }
    </style>
</head>
<body>

    <?php echo $this->element('navigation'); ?>
    <div class="container">
		<div>
			<?php echo $this->form->create('Search', array(
				'action' => 'search',
				'inputDefaults' => array(
					'div' => 'form-group',
					'label' => false,
					'wrapInput' => false,
					'class' => 'form-control'
				),
				'class' => 'well form-inline'
			));
			echo $this->form->input('from', array('placeholder' => 'from'));
			echo $this->form->input('to', array('placeholder' => 'to'));
			echo $this->form->button('Search Offer', array(
				'type' => 'submit',
				'div' => 'form-group',
				'class' => 'btn btn-default',
				'name' => 'controllerAction',
				'value' => 'offerSearch',
			));
			echo $this->form->button('Search Request', array(
				'type' => 'submit',
				'div' => 'form-group',
				'class' => 'btn btn-default',
				'name' => 'controllerAction',
				'value' => 'RequestSearch',
			));
			?>
			<?php echo $this->form->end();?>
		</div>
	</div>

	<?php echo $this->Session->flash(); ?>

<div class="container">

  <?php echo $this->fetch('content'); ?>

  <hr>
  <footer>
    <p>Developed by Technische Hochschule Mittelhessen - University of Applied Sciences</p>
  </footer>

</div>
<!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php
  echo $this->Html->script('jquery.min');
  echo $this->Html->script('jquery-ui');
  echo $this->Html->script('bootstrap.min');
  echo $this->Html->script('custom');
?>
</body>
</html>
