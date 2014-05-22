<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language;?>" lang="<?php echo Yii::app()->language;?>" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset;?>" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/layout.css" type="text/css" />
</head>
<body id="top">
  <!-- ####################################################################################################### -->

<!--  CABECERAAAA -->
  
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html"><?php echo CHtml::encode(Yii::app()->name); ?></a></h1>
      <p>David Salas Castro</p>
    </div>
    
  </div>
</div>
<!-- ####################################################################################################### -->

<!--  MENU DE LA PAGINA WEB -->  

<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="topbar" class="clear">
   
    
    <?php $this->widget('zii.widgets.CMenu',array(
      'id'=>'topnav', 
        'items'=>array(
          array('label'=>'Inicio', 'url'=>array('/site/index'),'items'=>array(
                  array('label'=>'Contacto', 'url'=>array('/site/contact')),
                  array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                  ),
          ),
          array('label'=>'Archivo', 'url'=>array('/archivo/index'),'items'=>array(
                  array('label'=>'Crear','url'=>array('/archivo/create')),
                  ),
          ),
          array('label'=>'Usuarios', 'url'=>array('/usuarios/index'),'items'=>array(
                  array('label'=>'Crear','url'=>array('/usuarios/create')),
                  ),
          ),
          array('label'=>'Permisos', 'url'=>array('/permisos/index'),'items'=>array(
                  array('label'=>'Crear','url'=>array('/permisos/create')),
                  ),
          ),
          
          array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
          array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
    )); ?>
    

    <form action="#" method="post" id="search">
      <fieldset>
        <legend>Site Search</legend>
        <input type="text" value="Buscar&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
        <input type="image" id="go" src="<?php echo Yii::app()->theme->baseUrl;?>/images/search.gif" alt="Search" />
      </fieldset>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->

<!--  CONTENIDO DE LA PAGINA -->

<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
      'links'=>$this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
    <?php endif?>
      <?php echo $content;?>
    <!-- ####################################################################################################### -->
  </div>
</div>

<!-- ####################################################################################################### -->

<!--  FOOTER -->

<!-- ####################################################################################################### -->



<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright  David Salas Castro&copy; 2013        - Todos los derechos Reservados - </p>
    <p class="fl_right"></a></p>
  </div>
</div>
</body>
</html>