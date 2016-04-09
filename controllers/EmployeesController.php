<?php
	namespace app\controllers;
	
	use Yii;
	use yii\base\Model;
	use yii\web\Controller;
	use yii\data\ActiveDataProvider;
	use app\models\classiccars\Employees;
		
	class EmployeesController extends Controller
	{
		
		
		public function actionUpdateTab() {
			$msj = "Inicio";
			$employees = Employees::find()->indexBy('employeeNumber')->all();
			
			if (Model::loadMultiple($employees,Yii::$app->request->post()) && Model::validateMultiple($employees)) {
				$msj = "Se recibieron Datos";
				
				foreach ($employees as $empleado) {
					if (!$empleado->save(false)) {
						$msj = "No se guardo todo";
					
					}else {
						$msj = "Datos guardados!";
					}
				}
				return $this->render('confirm',['msj'=>$msj]);
			}
			
			return $this->render('updatetab',['employees' => $employees, 'msj' => $msj]);
		}
		
		
	}
	
?>
