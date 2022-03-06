<?php

use yii\db\Migration;

/**
 * Class m220302_104824_create_table_place_lang
 */
class m220302_104824_create_table_place_lang extends Migration
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
        echo "m220302_104824_create_table_place_lang cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('place_lang', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'place_id' => $this->integer()->unsigned()->notNull(),
            'locality' => $this->string(50)->notNull(),
            'country' => $this->string(50)->notNull(),
            'lang' => $this->string(4)->notNull(),
        ]);

        $this->createIndex('idx_place_lang_place_id_place', 'place_lang', 'place_id');
        $this->addForeignKey('fk_lace_lang_place', 'place_lang', 'place_id', 'place', 'id', 'restrict', 'cascade');
    }

    public function down()
    {
        $this->dropForeignKey('fk_lace_lang_place', 'place_lang');
        $this->dropIndex('idx_place_lang_place_id_place', 'place_lang');
        $this->dropTable('place_lang');
    }
}
