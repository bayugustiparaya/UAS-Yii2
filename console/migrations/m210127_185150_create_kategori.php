<?php

use yii\db\Migration;

/**
 * Class m210127_185150_create_kategori
 */
class m210127_185150_create_kategori extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kategori}}', [
            'id_kategori' => $this->primaryKey(),
            'kategori' => $this->string()->notNull(),
            'ket' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210127_185150_create_kategori cannot be reverted.\n";

        // return false;
        $this->dropTable('kategori');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210127_185150_create_kategori cannot be reverted.\n";

        return false;
    }
    */
}
