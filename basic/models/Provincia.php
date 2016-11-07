<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provincia".
 *
 * @property integer $PROVINCIA_ID
 * @property string $PROVINCIA_NOMBRE
 * @property integer $PROVINCIA_REGION_ID
 *
 * @property Comuna[] $comunas
 * @property Region $pROVINCIAREGION
 */
class Provincia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provincia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PROVINCIA_ID'], 'required'],
            [['PROVINCIA_ID', 'PROVINCIA_REGION_ID'], 'integer'],
            [['PROVINCIA_NOMBRE'], 'string', 'max' => 23],
            [['PROVINCIA_REGION_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['PROVINCIA_REGION_ID' => 'REGION_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PROVINCIA_ID' => 'Provincia  ID',
            'PROVINCIA_NOMBRE' => 'Provincia  Nombre',
            'PROVINCIA_REGION_ID' => 'Provincia  Region  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComunas()
    {
        return $this->hasMany(Comuna::className(), ['COMUNA_PROVINCIA_ID' => 'PROVINCIA_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPROVINCIAREGION()
    {
        return $this->hasOne(Region::className(), ['REGION_ID' => 'PROVINCIA_REGION_ID']);
    }
}
