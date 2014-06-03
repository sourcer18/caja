<!DOCTYPE html>
<html class="bg-black">
    <head>
        
        <style type="text/css">
            body {
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: #eee;
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
            .form-signin input[type="email"] {
              margin-bottom: -1px;
              border-bottom-right-radius: 0;
              border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
              margin-bottom: 10px;
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            }
        </style>
        <meta charset="UTF-8">
        <title>Cybox | Iniciar Sesión</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/AdminLTE.css" rel="stylesheet" type="text/css" />
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
    
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-image:url(<?php echo Yii::app()->theme->baseUrl;?>/img/Blur-3.png);">

    <?php if(Yii::app()->user->hasFlash('loginflash')): ?>
        <div class="flash-error">
            <?php echo Yii::app()->user->getFlash('loginflash'); ?>
        </div>
        <?php else: ?>   

    <div class="container">

      <form class="form-signin" role="form">
            <?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
                'enableAjaxValidation' => true,
                'id' => 'user_form',
                'htmlOptions' => array(
                    'class' => 'bs-example'
                ),
            )); ?>  
        <h2 class="form-signin-heading"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png"></h2>

        <?php echo $form->textFieldControlGroup($model,'username'); ?>
                        <?php echo $form->error($model,'username'); ?>
                        <?php echo $form->passwordFieldControlGroup($model,'password'); ?>
                        <?php echo $form->error($model,'password'); ?>
                        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <button type="submit" class="btn btn-primary btn-block"><?php Yii::app()->user->ui->tbutton('Entrar'); ?></button>  
                    
                    <p><?php echo Yii::app()->user->ui->passwordRecoveryLink; ?></p>
                    
                    <?php
                        if(Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin')===1)
                        echo Yii::app()->user->ui->registrationLink;
                    ?>
      </form>

    </div>

    
          

        
            
                

        </div>

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>        
        <?php
        //  si el componente CrugeConnector existe lo usa:
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