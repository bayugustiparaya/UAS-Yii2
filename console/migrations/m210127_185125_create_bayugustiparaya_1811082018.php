<?php

use yii\db\Migration;

/**
 * Class m210127_185125_create_bayugustiparaya_1811082018
 */
class m210127_185125_create_bayugustiparaya_1811082018 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bayugustiparaya_1811082018}}', [
            'id_user' => $this->primaryKey(),
            'nama_depan' => $this->string(100)->notNull(),
            'nama_belakang' => $this->string(100)->notNull(),
            'username' => $this->string(100)->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string(100)->notNull()->unique(),
            'role' => $this->smallInteger(),
            'status' => $this->smallInteger()->notNull(),
            'date_created' => $this->integer()->notNull(),
            'date_updated' => $this->integer(),
            'verification_token' => $this->string()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210127_185125_create_bayugustiparaya_1811082018 cannot be reverted.\n";

        // return false;
        $this->dropTable('bayugustiparaya_1811082018');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210127_185125_create_bayugustiparaya_1811082018 cannot be reverted.\n";

        return false;
    }
    */
}
