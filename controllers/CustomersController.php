<?php
	namespace app\controllers;
	
	use Yii;
	use yii\base\Model;
	use yii\web\Controller;
	use yii\data\ActiveDataProvider;
	use yii\helpers\Json;
	use app\models\classiccars\Customers;
	
	
		
	class CustomersController extends Controller
	{
		public function actionClientesJson(){
			
			$customers = Customers::find()->all();
			$data = '{"customers":' . Json::encode($customers) . '}';
			return  $data;
		}
		
		
		
		public function actionQueryClientes(){
			
			$customers = Customers::find();
			
			$provider = new ActiveDataProvider(['query' => $customers,
						'pagination' => ['pageSize' =>20],
						'sort' => ['defaultOrder' =>['customerNumber' =>SORT_ASC,
													 'customerName' =>SORT_ASC,
						
													]
									],
								]
						
			);
		
			
			
			return $this->render('querycustomers',['provider' => $provider]);
			
			
		}
		
			public function actionQueryClientesOrders(){
			
			$customer = Customers::findOne(205);
						 //->where(['customerNumber' =>202])
						 //->one();
			
			
			$orders = $customer->getOrders();
			
			
			$provider = new ActiveDataProvider(['query' => $orders,
						'pagination' => ['pageSize' =>20],
						'sort' => ['defaultOrder' =>['customerNumber' =>SORT_ASC,
													 'orderNumber' =>SORT_ASC,
						
													]
									],
								]
						
			);
			
			return $this->render('querycustomers',['provider' => $provider]);
			
		}
		
		
		
		
	}
	
?>
