<?php

namespace common\db;

use yii\db\ActiveRecord;

abstract class SyncedRecord extends ActiveRecord
{
    private $_synched = null;

    /**
     * SyncedRecord constructor.
     * @example new Person()
     * @example new Person(1, 'NoName')
     * @example new Person([1, 'NoName'])
     * @example new Person(['id' => 1, 'name' => 'NoName'])
     * @override ActiveRecord::__construct()
     * @param mixed $config
     */
    public function __construct($config = null)
    {
        $config = is_array($config) ? $config : func_get_args();
        if (!empty($config) && is_numeric(key($config))) {
            $attributes = $this->attributes();
            foreach ($config as $i => $value) {
                unset($config[$i]);
                $config[$attributes[$i]] = $value;
            }
        }
        parent::__construct($config);
    }

    /**
     * @param array $values
     * @param array $attributes
     * @return object
     */
    public static function findByPk(array $values, array $attributes = [])
    {
        // read pks from schema, merge keys:$pks values:$values
        // @todo
        $pks = [];
        return self::find()->where($pks)->select(empty($attributes) ? '*' : $attributes)->one();
    }

    /**
     * Sync record with database. Use pk to find row.
     * @return bool if it managed to sync object
     */
    public function sync()
    {
        // eary exit - prevent multiple ::synch()
        if (!is_null($this->_synched)) {
            return $this->_synched;
        }
        // synching starts with the primary keys
        $pks = self::primaryKey();
        // if the pks were not set...don't bother synching
        foreach ($pks as $attribute) {
            if ($status = !isset($this->$attribute)) {
                // sync fail if pk not set
                return $this->_synched = !$status;
            }
        }
        // [0=>field] to [field=>value]
        $pks = array_flip($pks);
        foreach ($pks as $pk => &$value) {
            $value = $this->$pk;
        }
        // @todo search in cache

        // else .. seach in db
        $this->_synched = !!self::find()->where($pks)->count('1');
        // @todo save in cache

        // mask as update & pks are not dirty any more
        if ($this->_synched === true) {
            // @todo find a faster|better way
            foreach ($pks as $pk => $value) {
                $this->setOldAttribute($pk, $value);
            }
        }
        // just so that the user knows
        return $this->_synched;
    }

    /**
     * Lazy loading attributes. Works ONLY with synched records
     * @override
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        // lazy only for synched records
        if ($this->_synched !== true && $this->_lazy === true) {
            // ...
        }
        // if still lazy
          // perform fetch, 1st try cache
          // set not lazy any more
        // esle // no lazy any more - already featched
          // get from object




        // if pk was set...enter proxy(lazy) mode
        // self::getTableSchema()->primaryKey() | uses self::getDb()
        return parent::__get($name);
    }
}