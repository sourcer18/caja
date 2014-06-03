<html>
	<style type="text/css">

	    body {
	      padding-top: 40px;
	      padding-bottom: 40px;
	      
	      
	    }
	    .fondo{
	    	/*background-color: blue;*/
	    	background: url("<?php echo Yii::app()->theme->baseUrl;?>/img/fondo.jpg") repeat center center fixed;
	    	-webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    background-size: cover;
	    }
	    .form-signin {
	      max-width: 330px;
	      padding: 15px;
	      margin: 0 auto;
	    }
	    .form-signin .form-signin-heading,
	    .form-signin .checkbox {
	      margin-bottom: 10px;
	    }
	    .form-signin .checkbox {
	      font-weight: normal;
	    }
	    .form-signin .form-control {
	      position: relative;
	      height: auto;
	      -webkit-box-sizing: border-box;
	         -moz-box-sizing: border-box;
	              box-sizing: border-box;
	      padding: 10px;
	      font-size: 16px;
	    }
	    .form-signin .form-control:focus {
	      z-index: 2;
	    }
	    .form-signin .usuario {
	      margin-bottom: -1px;
	      border-bottom-right-radius: 0;
	      border-bottom-left-radius: 0;
	    }
	    .form-signin .pass {
	      margin-bottom: 10px;
	      border-top-left-radius: 0;
	      border-top-right-radius: 0;
	    }
	    </style>
	    <meta charset="UTF-8">
	    <title>Cybox | Iniciar Sesión</title>
	    <?php
	        $cs        = Yii::app()->clientScript;
	        $themePath = Yii::app()->theme->baseUrl;

	        /**
	         * StyleSHeets
	         */
	        $cs->registerCssFile($themePath . '/assets/css/bootstrap.css');
	        $cs->registerCssFile($themePath . '/assets/css/bootstrap-theme.css');

	        /**
	         * JavaScripts
	         */
	        $cs->registerCoreScript('jquery', CClientScript::POS_END);
	        $cs->registerCoreScript('jquery.ui', CClientScript::POS_END);
	        $cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
	        $cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
	    ?>
	    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	    <!-- font Awesome -->
	    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	    <!-- Theme style -->
	    <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet" type="text/css" />-->
	    

	</head>
	<body class="fondo">
		<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
		<div class="flash-error">
			<?php echo Yii::app()->user->getFlash('loginflash'); ?>
		</div>
		<?php else: ?>
		<div class="form-signin" role="form">
			<center><h2 class="form-signin-heading"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png"></h2></center>
				<br>
				<br>
				<br>
				<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	                'enableAjaxValidation' => true,
	                'id' => 'user_form',
	                'htmlOptions' => array(
	                    'class' => 'bs-example'
	                ),
            	)); ?>

				<div class="usuario">
					<?php echo $form->textFieldControlGroup($model,'username'); ?>
				</div>
				<div class="pass">
					<?php echo $form->passwordFieldControlGroup($model,'password'); ?>
				</div>
				<!--<?php //echo $form->checkBox($model,'rememberMe'); ?>-->
				
				
		
				<button class="btn btn-lg btn-primary btn-block">Entrar</button><br>
				<div class="pull-left">
					<?php echo Yii::app()->user->ui->passwordRecoveryLink; ?>
				</div>
				<div class="pull-right">
					<?php
						if(Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin')===1)
							echo Yii::app()->user->ui->registrationLink;
					?>
				</div>

				<?php
					//	si el componente CrugeConnector existe lo usa:
					//
					if(Yii::app()->getComponent('crugeconnector') != null){
					if(Yii::app()->crugeconnector->hasEnabledClients){ 
				?>
				<div class='crugeconnector'>
					<span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
					<ul>
					<?php 
						$cc = Yii::app()->crugeconnector;
						foreach($cc->enabledClients as $key=>$config){
							$image = CHtml::image($cc->getClientDefaultImage($key));
							echo "<li>".CHtml::link($image,
								$cc->getClientLoginUrl($key))."</li>";
						}
					?>
					</ul>
				</div>
				<?php }} ?>
			

				<?php $this->endWidget(); ?>
		</div>
				<?php endif; ?>

	</body>
</html>