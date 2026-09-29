<?php

use yii\db\Migration;

class m260929_191240_create_table_product extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->bigPrimaryKey()->unsigned(),

            'name' => $this->string(255)->notNull(),

            'slug' => $this->string(255)->notNull()->unique(),

            'sku' => $this->string(100)->notNull()->unique(),

            'description' => $this->text()->null(),

            'category_id' => $this->bigInteger()->unsigned()->null(),

            'price' => $this->decimal(10, 2)->notNull()->defaultValue(0),

            'old_price' => $this->decimal(10, 2)->null(),

            'quantity' => $this->integer()->unsigned()->notNull()->defaultValue(0),

            'status' => $this->tinyInteger()->notNull()->defaultValue(1),

            'created_at' => $this->integer()->notNull(),

            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-product-category_id',
            '{{%product}}',
            'category_id'
        );

        $this->createIndex(
            'idx-product-status',
            '{{%product}}',
            'status'
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
