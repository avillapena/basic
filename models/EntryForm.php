<?php
	namespace  app\models;
	
	use Yii;
	use yii\base\Model;
	
	class EntryForm extends Model
	{
		public $name; 
		public $email;
	
		public function rules()
		{
			return [
					[['name','email'],'required'],
					['name','match', 'pattern' => '/^[0-9a-z]\w*$/i','message' => 'Min 3 y Max 5 chars'],
					//['name','match', 'pattern' => '/^[0-9]\w*$/i','message' => 'Solo se Aceptan letras']
					['email','email'],
			
					];
		}
	}
	
?>