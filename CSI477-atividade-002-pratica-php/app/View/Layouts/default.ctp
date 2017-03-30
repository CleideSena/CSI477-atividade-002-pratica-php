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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Pet Shop Online');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())

?>
<!DOCTYPE html>
<html>
<head>


	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php

	echo $this->Html->css('bootstrap.css');
	echo $this->Html->script('jquery-1.12.3.js');
	echo $this->Html->script('jquery.validate.js');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>

<body>

<div class="footer navbar-fixed-top text-center" >
	<ul class="nav text-center nav-pills">
      <li class="active">
            <a href="<?php echo Router::url('http://localhost/CSI477-atividade-002-pratica-php/'); ?>"> <?php echo $cakeDescription; ?></a>
						<ul class="nav-top-right"><?php if($this->Session->check('Cliente')){ ?>	<p><a href=" <?php echo Router::url('/clientes/logout'); ?>"<button class='btn btn-success'>Sair</button></a> <?php } ?>
						</ul>
			</li>
  </ul>
						<ul class="footer navbar-fixed-top text-center">
								<p><h5><?php echo $this->Flash->render(); ?></h5></p>
						</ul>
</div>


<div class="container">
	  <div class="row">
			<?php echo $this->fetch('content'); ?>
			</br>
		</div>
</div>

<style type="text/css">
<!--
body {
    background-image: url("app/webroot/img/fundo.png" bgproperties="fixed" width=100% height=100%);
}
-->
</style>

			<div class="footer navbar-fixed-bottom text-center">
	      <div class="inner">
	        <p> <a> Cleide Paulo Costa Silva Sena - 08.2.8076 </a></p>
	      </div>
	    </div>

</body>
</html>
