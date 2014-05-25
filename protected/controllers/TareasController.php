<?php
class TareasController extends Controller{

	public function actionIndex(){
		$model=Tareas::model();
		$tareas=$model->findAll();
		$this->render('index',array('tareas'=>$tareas));
	}
	public function actionView($id){
		$model=Tareas::model()->findByPk($id);
		$this->render('view',array('model'=>$model));
	}

	public function actionEdit($id){
		$model=Tareas::model()->findByPk($id);//esto es como hacer un select de tu registro
		
		/*echo '<pre>';
		print_r($_POST); 
		echo '</pre>';
		Yii::app()->end();*/

		if(isset($_POST['Tareas'])){ //validamos por si tiene algun valor en el formulario
			$model->attributes=$_POST['Tareas'];//se asigna los valores del formulario a 
			if($model->save())//esto es como hacer un update tareas where id [id que trae]
				$this->redirect('view',array('id'=>$model->id));//esto es como hacer un header
		}
			$this->render('edit',array('model'=>$model));
	}

	public function actionAdd(){
		$model=new Tareas();
		if(isset($_POST['Tareas'])){ //validamos por si tiene algun valor en el formulario
			
			$model->attributes=$_POST['Tareas'];//se asigna los valores del formulario a 
			
			if($model->save())//esto es como hacer un update tareas where id [id que trae]
				$this->redirect('view',array('id'=>$model->id));//esto es como hacer un header
		}
			$this->render('add',array('model'=>$model));
	}	

	public function actionDelete($id){
		$model=Tareas::model()->findByPk($id);
		$model->delete();
		$this->redirect(array('index'));
	}

}

?>