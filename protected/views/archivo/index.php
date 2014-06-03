<?php
    
// Creación de breadcrumbs
    $this->breadcrumbs=array('Archivos');
    
    // Creación de variables para las cajas
    $caja1 = '<div class="row"><section class="col-lg-12 connectedSortable">'
            .'<div class="box box-primary"><div class="box-header" style="height: 40px;">'
            .'<div class="pull-right box-tools">'  
            .'<button class="btn btn-primary btn-sm pull-right" title="Salir" data-toggle="tooltip" data-widget="remove" style="margin-right: 5px;" data-original-title="Remove"><i class="fa fa-times"></i></button>'
            .'<button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Minimizar" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>'
            .'</div><!-- Encabezado --><i class="fa fa-cloud"></i><h3 class="box-title">';
    // escribir encabezado
    $caja2 = '</h3></div><div class="box-body no-padding" style="height: 200px;">'
            .'<div id= "botones"><br><input id="idPadre" value="null"></input><button id=prueba>prueba</button></div><div id="listadoCarpetas">';
    // escribir contenido
    $caja3 = '</div></div></div></section></div>';
    
    // variables de las url de acciones ajax.
    $idCarpeta = null;
    $url_actionListar = CHtml::normalizeUrl(array('/archivo/listarajax'));
    echo $caja1.'Listado General'.$caja2.'Contenido a mostrar '.$url_actionListar.$caja3;
    ?>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        // función que rellena el div con las carpetas que se reciban del servidor
        function analizar_respuesta(resp){
            var contenido = $('#listadoCarpetas');
            contenido.append('Elementos encontrados</br/>');
            
            // botón volver
            contenido.append('<a></a>');
            var bVolver = contenido.find('a:last');
            bVolver.addClass('btn btn-app');
            // ponemos el nombre del botón.
            bVolver.append('Volver');
            // fin botón volver
            
            // recorres cada item entregado:
            //var esPrimero = true;
            $.each(resp, function(primaryKey, atributos){
                //<a class="btn btn-app"><i class="fa fa-edit"></i> Edit</a>
                // añadimos un botón
                contenido.append('<a></a>');
                var a = contenido.find('a:last');
                //a.css('class:btn btn-app');
                a.addClass('btn btn-app');
                a.append('<i></i>');
                // añadimos el icono
                var i = a.find('i:last');
                var cadenaIcono = 'fa fa-edit';
                if(atributos.tipo='c'){
                    cadenaIcono = 'fa-carpeta';
                }else{
                    if(atributos.extension = 'pdf'){
                        cadenaIcono = 'fa-pdf';
                    }else{
                        cadenaIcono = 'fa-desconocido';
                    }
                }
                i.addClass(cadenaIcono);
                // ponemos el nombre de la carpeta o archivo en el botón.
                a.append(atributos.nombre);
                // recorres los atributos entregados:
                /*$.each(atributos, function(attr_name, attr_value){
                    a.append(attr_name+'='+attr_value+', ');
                });*/
                a.click(function (){recogerCarpetas(atributos.idArchivo);alert(atributos.idArchivo);});
                //if(esPrimero === true){
                //  bVolver.click(function (){recogerCarpetas(atributos.iPadre);});
                //    esPrimero = false;
                //}
            });
            //contenido.append('</ul>');
        }
        // función que realiza la petición ajax al actionListarAjax
        function recogerCarpetas(idCarpeta){
            alert('llamada Ajax con idCarpeta = '+idCarpeta);
            // habría que guardar en un campo oculto en la página el valor del idCarpeta
            $('#listadoCarpetas').html('buscando carpetas con el idPadre: '+idCarpeta+'...<br/>');
            $.ajax({
                url: '<?php echo $url_actionListar;?>', type: 'post', 
                data: { id: idCarpeta },
                success: analizar_respuesta, 
                error: function(e){
                    $('#listadoCarpetas').html(e.responseText);
                }
            });
        }
        // se pone que el botón prueba ejecute la llamada
        $('#prueba').click(function () { var id = $('#idPadre').val(); recogerCarpetas(id);});
        // se llama a la función al cargar el index por primera vez
        //$(document).ready(recogerCarpetas(<?php echo $idCarpeta;?>));        
        
    </script>;
     
