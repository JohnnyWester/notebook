<?php

use yii\db\Migration;

/**
 * Handles the creation of table `records`.
 */
class m170911_210659_create_records_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('records', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->string(),
            'date' => $this->date(),
            'author' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('records');
    }
}
