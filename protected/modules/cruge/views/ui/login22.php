<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Lockscreen</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			    <script src="<?php
			echo Yii::app()->theme->baseUrl . '/assets/js/html5shiv.js';
			?>"></script>
			    <script src="<?php
			echo Yii::app()->theme->baseUrl . '/assets/js/respond.min.js';
			?>"></script>
			
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>
<body>



<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('loginflash'); ?>
</div>
<?php else: ?>
<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'enableAjaxValidation' => true,
    'id' => 'user_form',
    'htmlOptions' => array(
        'class' => 'bs-example'
    ),
)); ?>


<div class="center">            
    <div class="headline text-center">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png">
    </div>
    <div class="lockscreen-item">
        <!-- lockscreen image -->
        
        
                    
                    <div class="input-group">
                    	<div class="form-control" placeholder="Usuario">

                    		<!--modificaandooo los textfield-->
                    		<?php echo $form->textFieldControlGroup($model,'username'); ?>
							<?php echo $form->error($model,'username'); ?>
                        <!--<input type="text" class="form-control" placeholder="Usuario" />-->
                    </div>
                </div>
                <div class="lockscreen-credentials">   

                    <div class="input-group">
                    	<div class="form-control" placeholder="Contraseña">
	                    	<?php echo $form->passwordFieldControlGroup($model,'password'); ?>
							<?php echo $form->error($model,'password'); ?>
						</div>
                        <!--<input type="password" class="form-control" placeholder="Contraseña" />-->
                        <div class="input-group-btn">
                            <button class="btn btn-flat"><i class="fa fa-arrow-right text-muted"><?php Yii::app()->user->ui->tbutton(''); ?></i></button>
                        </div>
                    </div>
                 
            </div>
            <?php echo Yii::app()->user->ui->passwordRecoveryLink; ?>
			<?php
				if(Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin')===1)
					echo Yii::app()->user->ui->registrationLink;
			?>
		<div class="row rememberMe">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>
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