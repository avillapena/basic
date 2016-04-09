<?php
 namespace  app\models\classiccars;
 use yii\db\ActiveRecord;
 
 class OrderDetails  extends ActiveRecord
 {
	
	public static function tableName(){
		
		return 'orderdetails';
	}
	
	public static function getDb(){
		
		return \Yii::$app->db2;
	}
	
	public function getOrders() {
		
		return $this->hasOne(Orders::className(),['orderNumber' => 'orderNumber']);
	}
	
	public function getProducts() {
		
		return $this->hasOne(Products::className(),['productCode' => 'productCode']);
	}
	
	
	
 }
 
?>
