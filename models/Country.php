<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $Code
 * @property string $Name
 * @property integer $Population
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    
	/*public static function getDb()
    {
        return Yii::$app->get('db2');
    }*/

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Code', 'Name', 'Population'], 'required'],
            [['Population'], 'integer'],
            [['Code'], 'string', 'max' => 2],
            [['Name'], 'string', 'max' => 52]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Code' => 'Code',
            'Name' => 'Name',
            'Population' => 'Population',
        ];
    }
}
