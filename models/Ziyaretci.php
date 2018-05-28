<?php

namespace kouosl\ziyaretci\models;

use Yii;

/**
 * This is the model class for table "ziyaretci".
 *
 * @property int $ziyaretci_id
 * @property string $ziyaretci_adsoyad
 * @property string $ziyaretci_tarihi
 * @property string $ziyaret_sebebi
 */
class Ziyaretci extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ziyaretci';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ziyaretci_adsoyad', 'ziyaretci_tarihi', 'ziyaret_sebebi'], 'required'],
            [['ziyaretci_adsoyad', 'ziyaretci_tarihi', 'ziyaret_sebebi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ziyaretci_id' => 'Ziyaretci ID',
            'ziyaretci_adsoyad' => 'Ziyaretci Adsoyad',
            'ziyaretci_tarihi' => 'Ziyaretci Tarihi',
            'ziyaret_sebebi' => 'Ziyaret Sebebi',
        ];
    }
}
