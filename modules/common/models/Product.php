<?php

namespace common\models;

use common\db\SyncedRecord;

/**
 * Class Product
 *
 * @property int       $id
 * @property string    $name
 * @property int       $site_id
 * @property int       $status
 * @property \DateTime $created
 * @property \DateTime $modified
 */
class Product extends SyncedRecord
{
    public static function getDb()
    {
        return \Yii::$app->get('db'); // or other db component
    }

    public static function tableName()
    {
        return 'products';
    }
}