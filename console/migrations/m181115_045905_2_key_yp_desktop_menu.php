<?php

use hzhihua\dump\Migration;

/**
 * Class m181115_045905_2_key_yp_desktop_menu
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m181115_045905_2_key_yp_desktop_menu extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->runSuccess['PRIMARY'] = $this->addPrimaryKey(null, '{{%yp_desktop_menu}}', 'id');
        $this->runSuccess['addAutoIncrement'] = $this->addAutoIncrement('{{%yp_desktop_menu}}', 'id', 'integer', '', 10);
        $this->runSuccess['parent'] = $this->createIndex('parent', '{{%yp_desktop_menu}}', 'parent', 0);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        
        foreach ($this->runSuccess as $keyName => $value) {
            if ('addAutoIncrement' === $keyName) {
                continue;
            } elseif ('PRIMARY' === $keyName) {
                // must be remove auto_increment before drop primary key
                if (isset($this->runSuccess['addAutoIncrement'])) {
                    $value = $this->runSuccess['addAutoIncrement'];
                    $this->dropAutoIncrement("{$value['table_name']}", $value['column_name'], $value['column_type'], $value['property']);
                }
                $this->dropPrimaryKey(null, '{{%yp_desktop_menu}}');
            } elseif (!empty($keyName)) {
                $this->dropIndex("`$keyName`", '{{%yp_desktop_menu}}');
            }
        }

    }
}
