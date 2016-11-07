<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estadosmandatos".
 *
 * @property integer $ID
 * @property string $EstadoMandato
 * @property integer $EstadoRegistro
 */
class Estadosmandatos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estadosmandatos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EstadoMandato'], 'required'],
            [['EstadoRegistro'], 'integer'],
            [['EstadoMandato'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'EstadoMandato' => 'Estado Mandato',
            'EstadoRegistro' => 'Estado Registro',
        ];
    }
}
