<?php

use yii\db\Migration;

class m260929_191414_create_table_category extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->bigPrimaryKey()->unsigned(),
            'name' => $this->string(255)->notNull(),
            'slug' => $this->string(255)->notNull()->unique(),
            'parent_id' => $this->bigInteger()->unsigned()->null(),
            'status' => $this->tinyInteger()->notNull()->defaultValue(1),
        ]);

        $this->createIndex(
            'idx-category-parent_id',
            '{{%category}}',
            'parent_id'
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
