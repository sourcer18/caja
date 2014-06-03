<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$contenedor1='<div class="box box-primary">'
        .'<div class="box-header" style="height: 400px;">'                 
            .'<div class="pull-right box-tools">'
                .'<button class="btn btn-primary btn-sm pull-right" title="Salir" data-toggle="tooltip" data-widget="remove" style="margin-right: 5px;" data-original-title="Remove"><i class="fa fa-times"></i></button>'                                     
                .'<button class="btn btn-primary btn-sm pull-right" data-widget=\'collapse\' data-toggle="tooltip" title="Minimizar" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>'
            .'</div>'
                .'<i class="fa fa-cloud"></i>'
                .'<h3 class="box-title">'
                .'Mostrar'
                .'</h3>';
echo $contenedor1;
$contenido='<div class="box-body">'
	            .'<div class="row">'
	                .'<div class="col-sm-5">'
	                    .'<form name="formulario" id="upload_form" enctype="multipart/form-data" method="post">'
	                      .'<input class="btn btn-success" type="file" name="file1" id="file1"><br>'
	                      .'<h3 id="status"></h3>'
	                      .'<p id="loaded_n_total"></p>'
	                    .'</form>'
	                .'</div><!-- /.col -->'
	            .'</div><!-- /.row - inside box -->'
	        .'</div><!-- /.box-body -->'
	        .'<div class="box-footer">'
	            .'<div class="row">'
	                .'<div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">'
	                        .'<textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción"></textarea>'
	                .'</div>'
	                .'<div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">'
	                    .'<span><h4>Categoria</h4></span>'
	                    .'<select id="categoria" class="selectpicker">'
	                        .'<option data-hidden="true">Elige opcion</option>'
	                        .'<option value="one">Universidad</option>'
	                        .'<option value="two">Ciclo Superior</option>'
	                        .'<option value="three">libro</option>'
	                        .'<option value="four">imagenes</option>'
	                        .'<option value="five">pdf</option>'
	                        .'<option value="six">ejemplo</option>'
	                    .'</select>'
	                .'</div>'
	            .'</div><!-- /.row -->'
	        .'</div><!-- /.box-footer -->'
	        .'<div class="box-footer">'
	            .'<div class="row">'
	                .'<div class="col-xs-12 text-center" style="border-right: 1px solid #f4f4f4">'
	                    .'<progress id="progressBar" value="0" max="100" style="width:300px;"></progress>'
	                .'</div><!-- ./col -->'
	            .'</div><!-- /.row -->'
	        .'</div><!-- /.box-footer -->'
	        .'<div class="box-footer">'
	            .'<div class="row">'
	                .'<div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">'
	                    .'<input class="btn btn-primary" type="button" value="Subir" onclick="uploadFile()">'
	                .'</div><!-- ./col -->'
	                .'<div class="col-xs-6 text-center">'
	                    .'<input class="btn btn-danger" type="button" value="Borrar">'
	                .'</div><!-- ./col -->'
	            .'</div><!-- /.row -->'
	        .'</div><!-- /.box-footer -->';

echo $contenido;



$contenedor2='</div>'
        .'<div class="box-body no-padding">'              
        .'</div><!-- /.box-body-->'
    .'</div>';
  echo $contenedor2;

?>
