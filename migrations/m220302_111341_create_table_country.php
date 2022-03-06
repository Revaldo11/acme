<?php

use yii\bootstrap4\Dropdown;
use yii\db\Migration;

/**
 * Class m220302_111341_create_table_country
 */
class m220302_111341_create_table_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'code' => $this->string(2)->unique(),
            'name' => $this->string(255),
            'phonecode' => $this->string(10),
            'lat' => $this->string(50)->notNull(),
            'lng' => $this->string(50)->notNull(),
        ]);

        $this->insert('country', [
            'code' => 'ID',
            'name' => 'Indonesia',
            'phonecode' => '+62',
            'lat' => '11111111',
            'lng' => '22222222',

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('country', ['code' => 'ID']);
        $this->dropTable('country');
    }


    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    // }

    // public function down()
    // {
    // }
}
