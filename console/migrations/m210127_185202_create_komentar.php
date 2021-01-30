<?php

use yii\db\Migration;

/**
 * Class m210127_185202_create_komentar
 */
class m210127_185202_create_komentar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%komentar}}', [
            'id_komentar' => $this->primaryKey(),
            'id_berita' => $this->integer(),
            'nama' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull(),
            'isi_komentar' => $this->getDb()->getSchema()->createColumnSchemaBuilder('tinytext')->notNull(),
            'date_created' => $this->timestamp()
        ]);

        $this->addForeignKey('FK_komentar_berita', 'komentar', 'id_berita', 'berita', 'id_berita');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210127_185202_create_komentar cannot be reverted.\n";

        // return false;
        $this->dropForeignKey('FK_komentar_berita', 'komentar');
        $this->dropTable('komentar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210127_185202_create_komentar cannot be reverted.\n";

        return false;
    }
    */
}
