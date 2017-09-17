<?php

namespace app\models;
use yii\db\ActiveRecord;

class Records extends ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'author'], 'string'],
            [['date'], 'date', 'format' => 'php:Y-m-d'],
            [['date'], 'default', 'value' => date('Y-m-d')],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'author' => 'Author',
            'date' => 'Date',
        ];
    }

    public static function getAll() {
        $data = Records::find()->all();
        return $data;
    }

    public static function getOne($id) {
        $data = Records::find()->where(['id' => $id])->one();
        return $data;
    }
}