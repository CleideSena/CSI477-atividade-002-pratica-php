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

//$cakeDescription = __d('cake_dev');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())

?>
<!DOCTYPE html>
<html>
<head>


	<?php echo $this->Html->charset(); ?>

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
            <a href="<?php echo Router::url('http://localhost/CSI477-atividade-001-pratica-php/'); ?>"> </a>
						<ul class="nav navbar-position-top-left"><?php if($this->Session->check('Paciente')){ ?>	<p><a href=" <?php echo Router::url('/pacientes/logout'); ?>"<button class='btn btn-default'>SAIR</button></a> <?php } ?>
						</ul>
			</li>
  </ul>
						<ul class="footer navbar-fixed-top text-center">
								<p><?php echo $this->Flash->render(); ?></p>
						</ul>
</div>


<div class="container-fluid">
	  <div class="row">
			<?php echo $this->fetch('content'); ?>
			</br>
		</div>
</div>

<style type="text/css">
<!--
body {
    background-color: #81BEF7;
}
-->
</style>

<div class="footer navbar-fixed-bottom text-center">
	<div class="inner">
		<p><b><u> CLEIDE PAULO COSTA SILVA SENA - 08.2.8076 </u></b></p>
	</div>
</div>



</body>
</html>
