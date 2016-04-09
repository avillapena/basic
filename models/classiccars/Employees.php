<?php
 namespace  app\models\classiccars;
 use yii\db\ActiveRecord;
 
 
 class Employees  extends ActiveRecord
 {
	
	public static function tableName(){
		
		return 'employees';
	}
	
	public static function getDb(){
		
		return \Yii::$app->db2;
	}
	
	
 }
 
?>
