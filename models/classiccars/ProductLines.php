<?php
 namespace  app\models\classiccars;
 use yii\db\ActiveRecord;
 
 class ProductLines  extends ActiveRecord
 {
	
	public static function tableName(){
		
		return 'productlines';
	}
	
	public static function getDb(){
		
		return \Yii::$app->db2;
	}
	
	public function getProducts() {
		
		return $this->hasMany(Products::className(),['productLine' => 'productLine']);
	}
	
 
 }
 
?>
