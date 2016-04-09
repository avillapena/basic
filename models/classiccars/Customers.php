<?php
 namespace  app\models\classiccars;
 use yii\db\ActiveRecord;
 use app\models\classiccars\Orders;
 
 class Customers  extends ActiveRecord
 {
	
	public static function tableName(){
		
		return 'customers';
	}
	
	public static function getDb(){
		
		return \Yii::$app->db2;
	}
	
	public function getOrders() {
		
		return $this->hasMany(Orders::className(),['customerNumber' => 'customerNumber']);
	}
 }
 
?>
