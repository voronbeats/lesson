<?php

use yii\db\Migration;

class m260929_191435_create_table_product_image extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%product_image}}', [
            'id' => $this->bigPrimaryKey()->unsigned(),

            'product_id' => $this->bigInteger()->unsigned()->notNull(),

            'image' => $this->string(255)->notNull(),

            'sort_order' => $this->integer()->notNull()->defaultValue(0),

            'is_main' => $this->tinyInteger()->notNull()->defaultValue(0),
        ]);

        $this->createIndex(
            'idx-product_image-product_id',
            '{{%product_image}}',
            'product_id'
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%product_image}}');
    }
}
