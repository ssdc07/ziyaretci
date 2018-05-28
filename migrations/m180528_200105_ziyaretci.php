<?php

use yii\db\Migration;

/**
 * Class m180528_200105_ziyaretci
 */
class m180528_200105_ziyaretci extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180528_200105_ziyaretci cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $this->createTable('ziyaretci',[
          'ziyaretci_id' =>$this->primaryKey()->notNull(),
          'ziyaretci_adsoyad'=>$this->string()->notNull(),
          'ziyaretci_tarihi'=>$this->string()->notNull(),
          'ziyaret_sebebi'=>$this->string()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m180528_200105_ziyaretci cannot be reverted.\n";

        return false;
    }

}
