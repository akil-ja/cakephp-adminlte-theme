<?php use Cake\Core\Configure; ?>
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Intranet';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

	 <!-- Bootstrap 3.3.7 -->
	<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap/dist/css/bootstrap.min'); ?>

	<!-- Font Awesome -->
	<?php echo $this->Html->css('AdminLTE./bower_components/font-awesome/css/font-awesome.min'); ?>
	<!-- Ionicons -->
	<?php echo $this->Html->css('AdminLTE./bower_components/Ionicons/css/ionicons.min'); ?>
	<!-- Theme style -->
	<?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	folder instead of downloading all of them to reduce the load. -->
	<?php echo $this->Html->css('AdminLTE.skins/skin-'. Configure::read('Theme.skin') .'.min'); ?>
	<?= $this->Html->css('cake.css') ?>
	<?= $this->Html->css('jquery-ui.min.css') ?>
	<?= $this->Html->css('jquery-ui.theme.min.css') ?>
	<?= $this->Html->css('custom.css') ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
	<?= $this->Html->script('jquery-3.4.1.min')  ?>
	<?= $this->Html->script('jquery-ui.min')  ?>


	
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
			<?php 
				echo $this->Html->image("logo.png", [
					"alt" => "UofGH Logo",
					"id" => "logo",
					'url' => ['controller' => 'Users', 'action' => 'home']
				]);
			?>
        </div>
        <div class="top-nav-links">
					
			<?php 

			$session = $this->getRequest()->getSession(); 
			if($session->read('user')){
				echo "Logged in as: ".$session->read('user.first_name').' '.$session->read('user.last_name').'<br />';
				echo $this->Html->link('Logout','/Users/logout');
			}

			?>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>

</body>
</html>
