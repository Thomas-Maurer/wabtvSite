<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
		$this->set('title', 'We are bob');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>

    </title>

	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<meta name="description" content="WAB TV">

    <?= $this->Html->meta('icon') ?>
		<?= $this->Html->css('angular-material.min'); ?>
		<?= $this->Html->css('bower_components/bootstrap/dist/css/bootstrap.min.css') ?> <!-- Default style -->
		<?= $this->Html->css('reset.css') ?> <!-- Reset style -->
		<?= $this->Html->css('style.css') ?> <!-- Default style -->
		<?= $this->Html->css('prog.css') ?> <!-- calendar style -->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
		<?= $this->Html->script('bower_components/angular/angular'); ?>
		<?= $this->Html->script('bower_components/angular-animate/angular-animate.min'); ?>
		<?= $this->Html->script('bower_components/angular-aria/angular-aria.min'); ?>
		<?= $this->Html->script('bower_components/angular-material/angular-material.min'); ?>
		<?= $this->Html->script('bower_components/angular-messages/angular-messages.min'); ?>
		<?= $this->Html->script('bower_components/angular-route/angular-route.min'); ?>
    <?= $this->Html->script('bower_components/jquery/dist/jquery.min'); ?>
    <?= $this->Html->script('bower_components/jquery-ui/jquery-ui.min'); ?>
    <?= $this->Html->script('bower_components/underscore/underscore.js'); ?>
		<?= $this->Html->script('app'); ?>
		<?= $this->Html->script('controllers/progController'); ?>
    <?= $this->Html->script('controllers/adminTimelineController'); ?>
			<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body ng-app="wabTV">
	<header>
		<?= $this->element('header'); ?>
	</header>
<div class="container">
	<?= $this->Flash->render('auth') ;?>
	<div class="">
			<div>
				<?= $this->element('opmarket'); ?>
				<?= $this->element('social'); ?>
				<?= $this->element('event'); ?>
			</div>
				<?= $this->fetch('content') ?>
			<div class="row">
			<?= $this->element('infostream') ?>
			<?= $this->element('infoFollow'); ?>
			</div>

			<?= $this->element('planning') ?>
			<div>
				<?= $this->element('walloffame'); ?>
			</div>
	</div>
</div>
<footer>
	<p>© 2016-2017 Wab TV, Tous Droits Réservés.</br>Politique de confidentialité - <?php echo $this->Html->link('Mentions légale', '/pages/mentions_legales'); ?> - <?php echo $this->Html->link('Conditions d\'Utilisation', '/pages/conditions_generales'); ?></p>
</footer>
</body>
</html>
