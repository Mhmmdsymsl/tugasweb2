<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property resource|null $foto_profil
 */
class profil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_mahasiswa'], 'required'],
            [['id', 'id_mahasiswa'], 'integer'],
            [['foto_profil'], 'string'],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
}
