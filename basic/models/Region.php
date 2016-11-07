<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $REGION_ID
 * @property string $REGION_NOMBRE
 * @property string $ISO_3166_2_CL
 *
 * @property Provincia[] $provincias
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['REGION_ID'], 'required'],
            [['REGION_ID'], 'integer'],
            [['REGION_NOMBRE'], 'string', 'max' => 50],
            [['ISO_3166_2_CL'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'REGION_ID' => 'Region  ID',
            'REGION_NOMBRE' => 'Region  Nombre',
            'ISO_3166_2_CL' => 'Iso 3166 2  Cl',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvincias()
    {
        return $this->hasMany(Provincia::className(), ['PROVINCIA_REGION_ID' => 'REGION_ID']);
    }
}
