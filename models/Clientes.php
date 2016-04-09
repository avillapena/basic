<?php
	namespace  app\models;
	use Yii;
	use yii\base\Model;

?>

<?php 
class Clientes extends Model 
{
	public $nombre;
	public $correo;
	
	public function rules()
	{
		Return [
				[['nombre','correo'],'required','message'=>'El campo es requerido'],
				 ['nombre','match','pattern' => '/^[a-z]\w*$/i','message' => 'El nombre debe iniciar con una letra. Y No se permiten caracteres especiales!'],
				['correo','email'],
			];
	
	}
			
}

?>