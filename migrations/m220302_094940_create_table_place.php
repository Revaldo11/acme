<?php

use yii\db\Migration;

/**
 * Class m220302_094940_create_table_place
 */
class m220302_094940_create_table_place extends Migration
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
        echo "m220302_094940_create_table_place cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('place', [
            'id' => $this->primaryKey()->unsigned(),
            'place_id' => $this->string(50)->notNull(),
            'lat' => $this->string(50)->notNull(),
            'lng' => $this->string(50)->notNull(),
            'country_code' => $this->string(50)->notNull(),
            'is_country' => $this->tinyInteger(50)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('place');
    }
}
