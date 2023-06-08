<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property int $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurursan
 */
class mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'nama', 'kelas', 'jurursan'], 'required'],
            [['id', 'nim'], 'integer'],
            [['nama', 'jurursan'], 'string', 'max' => 20],
            [['kelas'], 'string', 'max' => 5],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurursan' => 'Jurursan',
        ];
    }

    public function getprofil()
    {
        return $this->hasOne(profil::className(), ['id_mahasiswa' => 'id']);
    }
}
