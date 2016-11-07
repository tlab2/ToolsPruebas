<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comuna".
 *
 * @property integer $COMUNA_ID
 * @property string $COMUNA_NOMBRE
 * @property integer $COMUNA_PROVINCIA_ID
 *
 * @property Provincia $cOMUNAPROVINCIA
 */
class Comuna extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comuna';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COMUNA_ID'], 'required'],
            [['COMUNA_ID', 'COMUNA_PROVINCIA_ID'], 'integer'],
            [['COMUNA_NOMBRE'], 'string', 'max' => 20],
            [['COMUNA_PROVINCIA_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Provincia::className(), 'targetAttribute' => ['COMUNA_PROVINCIA_ID' => 'PROVINCIA_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COMUNA_ID' => 'Comuna  ID',
            'COMUNA_NOMBRE' => 'Comuna  Nombre',
            'COMUNA_PROVINCIA_ID' => 'Comuna  Provincia  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCOMUNAPROVINCIA()
    {
        return $this->hasOne(Provincia::className(), ['PROVINCIA_ID' => 'COMUNA_PROVINCIA_ID']);
    }
}
