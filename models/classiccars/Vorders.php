<?php
 namespace  app\models\classiccars;
 use yii\db\ActiveRecord;
 
 class Vorders  extends ActiveRecord
 {
	
	public static function tableName(){
		
		return 'v_Orders';
	}
	
	public static function getDb(){
		
		return \Yii::$app->db2;
	}
	
 }
 
?>
