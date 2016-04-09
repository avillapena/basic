<?php
 namespace  app\models\classiccars;
 use yii\db\ActiveRecord;
 use app\models\classiccars\Customers;
 class Orders  extends ActiveRecord
 {
	
	public static function tableName(){
		
		return 'orders';
	}
	
	public static function getDb(){
		
		return \Yii::$app->db2;
	}
	
	public function getOrderDetails() {
		
		return $this->hasMany(OrderDetails::className(),['orderNumber' => 'orderNumber']);
	}
	
	
	public function getCustomers() {
		
		return $this->hasOne(Customers::className(),['customerNumber' =>'customerNumber']);
	}
	
 }
 
?>
