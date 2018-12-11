<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $icon
 * @property int $priority
 * @property int $status
 * @property string $address
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'priority', 'status'], 'integer'],
            [['name', 'address'], 'required'],
            [['name', 'icon'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'icon' => 'Icon',
            'priority' => 'Priority',
            'status' => 'Status',
            'address' => 'Address',
        ];
    }
}
