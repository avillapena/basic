<?php
 namespace  app\models\classiccars;
 use yii\db\ActiveRecord;
 
 class Products  extends ActiveRecord
 {
	
	public static function tableName(){
		
		return 'products';
	}
	
	public static function getDb(){
		
		return \Yii::$app->db2;
	}
	
	
	public function rules () {
		
		return [
				[['productCode','productName','productLine'],'required'],
				];
	}
	
	public function getOrderDetails() {
		
		return $this->hasMany(OrderDetails::className(),['productCode' => 'productCode']);
	}
	
	public function getProductLines() {
		
		return $this->hasOne(ProductLines::className(),['productLine' => 'productLine']);
	}
	
	
 
 }
 
?>
