<?php

use yii\db\Migration;

/**
 * Class m210127_185155_create_berita
 */
class m210127_185155_create_berita extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%berita}}', [
            'id_berita' => $this->primaryKey(),
            'judul' => $this->string()->notNull(),
            'isi_berita' => $this->text()->notNull(),
            'id_kategori' => $this->integer()->notNull(),
            'jml_baca' => $this->integer()->notNull(),
            'id_user' => $this->integer()->notNull(),
            'date_created' => $this->timestamp()
        ]);

        $this->addForeignKey('FK_berita_kategori', 'berita', 'id_kategori', 'kategori', 'id_kategori');
        $this->addForeignKey('FK_berita_bayugustiparaya_1811082018', 'berita', 'id_user', 'bayugustiparaya_1811082018', 'id_user');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210127_185155_create_berita cannot be reverted.\n";

        // return false;
        $this->dropForeignKey('FK_berita_kategori', 'berita');
        $this->dropForeignKey('FK_berita_bayugustiparaya_1811082018', 'berita');
        $this->dropTable('berita');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210127_185155_create_berita cannot be reverted.\n";

        return false;
    }
    */
}
