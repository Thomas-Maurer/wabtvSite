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

		<?= $this->Html->css('bower_components/bootstrap/dist/css/bootstrap.min.css') ?> <!-- Default style -->
	<?= $this->Html->css('prog.css') ?> <!-- calendar style -->
	<?= $this->Html->css('angular-material.min'); ?>

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
<div id="container">
<?= $this->Flash->render('auth') ;?>
<?= $this->element('header'); ?>
<div id="content">
		<div id="sidebar-left" role="complementary">
		<?= $this->element('opmarket'); ?>
		<?= $this->element('social'); ?>
		<?= $this->element('event'); ?>
		</div>
		<div id="sidebar-middle">
			<?= $this->fetch('content') ?>
			<?= $this->element('planning') ?>
		</div>
		<div id="sidebar-right">
		<?= $this->element('walloffame'); ?>
		</div>
</div>
</div>
</body>
</html>
