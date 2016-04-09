<?php
	namespace app\controllers;
	
	use Yii;
	use yii\web\Controller;
	use yii\data\Pagination;
	use yii\data\ActiveDataProvider;
	use app\models\classiccars\Products;
	use app\models\classiccars\Orders;
	
	

	class ProductsController extends Controller
	{
		
			public function actionQueryOrders(){
			
			$query = Products::find();
			$count = $query->count();
						
			$pags = new Pagination(['totalCount' => $count]);
			
			$pags->pageSize = 20;
			
			$products = $query->offset($pags->offset)
							  ->limit($pags->limit)
							  ->all();
			
			return $this->render('viewproducts',['products' => $products,'pags' => $pags]);
			
			
		}
		
		public function actionConsultar(){
						
			$query = Products::find();
			$count = $query->count();
						
			$pags = new Pagination(['totalCount' => $count]);
			
			$pags->pageSize = 20;
			
			$products = $query->offset($pags->offset)
							  ->limit($pags->limit)
							  ->all();
			
			return $this->render('viewproducts',['products' => $products,'pags' => $pags]);
			
			
		}
		
		public function actionConsultar2(){
			
			$query = Orders::find();
			$count = $query->count();
			
			$provider = new ActiveDataProvider(['query' => $query,
						'pagination' => ['pageSize' =>20],
						'sort' => ['defaultOrder' =>['orderNumber' =>SORT_DESC,
													'shippedDate' =>SORT_DESC,
													]
									],
								]
						
			);
		
			
			
			return $this->render('viewproducts2',['provider' => $provider]);
			
			
		}
		
		public function actionEntryProducts (){
			
			$products = new Products();
			
			$msj = null;
			 
			if ($products->load(Yii::$app->request->post()) && ($products->validate())) {
			
				if ($products->save()) {
					
					$msj = "Datos Guardados Correctamente!!";
				}else {
					
					$msj = "No se pudo Guardar!";
				}
			}else {
				
				$msj = "No se ha recibido datos aun!";
				
			}
				
			
			return $this->render('entryproducts',['products' => $products,'msj' => $msj]);
		}
	
	}
	
?>
