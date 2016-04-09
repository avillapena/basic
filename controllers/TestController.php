<?php
	namespace app\controllers;
	use Yii;
	use  yii\web\Controller;
	use app\models\Clientes;
	use yii\db\Query;
	
	
	
	class TestController extends Controller
	{
	
	public function actionMitest()
	{
		$model = new Clientes();
		$msj = 'No se ha recibido nada aun';
		if ($model->load(Yii::$app->request->post()) && $model->validate())
		{
			$msj = 'Datos recibidos OK';
			$model->nombre =null;
			$model->correo=null;
			
			
		}
		elseif ($model->load(Yii::$app->request->post()) && !$model->validate()) 
		{
			
			$msj = 'Datos no validos';
		} 

		return $this->render('mitest',['model' => $model,'msj' => $msj]);
		
			
		
	}
	
	public function actionDbtest() 
	{
		
 
		$conn =  Yii::$app->db2;
		$conn->open();
	
		$result = $conn->createCommand("select * from v_Orders")->query();
		
		$rows = $result->count();
		$msj =null;
		$trans = null;
		if ($rows > 0) {
			$msj ="Los resultados son: ";
			$trans = $result->readAll();
			
		}else {
			
			$msj ="No hay Datos!";
		}
		
		
		
		return $this->render('dbtest',['msj' => $msj, 'datos' => $trans]);
	}
	
	
	public function actionQuerytest() 
	{
		$db = Yii::$app->db2;
		
		
		$query = new Query();
		
		$query->createCommand($db)->update('products',['productLine' =>'CarroClasico'],'productCode' == 'S10_1678')->execute();
		
		$query
			->select('*')
			->from('products');
		
		
		$result = $query->createCommand($db)->queryAll();
					
		
					
		$rows = count($result);
		$msj =null;
		$trans = null;
		if ($rows > 0) {
			$msj ="Los resultados son: ";
			$trans = $result;
			
		}else {
			
			$msj ="No hay Datos!";
		}
		
				
		return $this->render('querytest',['msj' => $msj, 'datos' => $trans]);
		
	}
	
	
	
}
?>