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
		<?= $this->Html->css('nav-menu.css') ?> <!-- navmenu style -->
		<?= $this->Html->css('header-stream.css') ?> <!-- navmenu style -->

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
		<?= $this->Html->script('../css/bower_components/bootstrap/dist/js/bootstrap.min') ?>
		<?= $this->Html->script('app'); ?>
		<?= $this->Html->script('controllers/progController'); ?>
		<?= $this->Html->script('controllers/adminTimelineController'); ?>
    <?= $this->Html->script('controllers/streamController'); ?>
			<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body ng-app="wabTV">
	<header>
	</header>
	<div class="nav-side-menu">
		<div class="brand"><img src="/img/wab_logo.png" alt=""></div>
			<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

		<div class="menu-list">

				<ul id="menu-content" class="menu-content collapse out">

					<li class="collapsed active">
						<a href="#"><span class="glyphicon glyphicon-facetime-video"></span><i class="fa fa-gift fa-lg"></i> Stream </a>
					</li>

						<li  data-toggle="collapse" data-target="#products" class="collapsed">
							<a href="#"><span class="glyphicon glyphicon-calendar"></span><i class="fa fa-gift fa-lg"></i> Programmation </a>
						</li>

						<li data-toggle="collapse" data-target="#new" class="collapsed">
							<a href="#"><span class="glyphicon glyphicon-facetime-video"></span><i class="fa fa-car fa-lg"></i> Dernières vidéos </a>
						</li>
				</ul>
	</div>
	</div>
<div ng-controller="streamController" ng-class="{'theater-on': activeTheater}" class="container">
	<?= $this->Flash->render('auth') ;?>
			<?= $this->element('opmarket'); ?>
			<?= $this->element('social'); ?>
			<?= $this->element('event'); ?>
			<?= $this->fetch('content') ?>
		<div ng-class="{'row-theaterMode': activeTheater}" class="row">
		<?= $this->element('infostream') ?>
		<?= $this->element('infoFollow'); ?>
		</div>
</div>
<footer>
	<p>© 2016-2017 Wab TV, Tous Droits Réservés.</br>Politique de confidentialité - <?php echo $this->Html->link('Mentions légale', '/pages/mentions_legales'); ?> - <?php echo $this->Html->link('Conditions d\'Utilisation', '/pages/conditions_generales'); ?></p>
</footer>
</body>
</html>
