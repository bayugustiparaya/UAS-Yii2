<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $id_berita
 * @property string $judul
 * @property string $isi_berita
 * @property int $id_kategori
 * @property int $jml_baca
 * @property int $id_user
 * @property string $date_created
 *
 * @property User $user
 * @property Kategori $kategori
 * @property Komentar[] $komentars
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%berita}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'isi_berita', 'id_kategori', 'jml_baca', 'id_user'], 'required'],
            [['isi_berita'], 'string'],
            [['id_kategori', 'jml_baca', 'id_user'], 'integer'],
            [['date_created'], 'safe'],
            [['judul'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id_user']],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['id_kategori' => 'id_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul' => 'Judul',
            'isi_berita' => 'Isi Berita',
            'id_kategori' => 'Id Kategori',
            'jml_baca' => 'Jml Baca',
            'id_user' => 'Id User',
            'date_created' => 'Date Created',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id_user' => 'id_user']);
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * Gets query for [[Komentars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKomentars()
    {
        return $this->hasMany(Komentar::className(), ['id_berita' => 'id_berita']);
    }
}
