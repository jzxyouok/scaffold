<?php

use hzhihua\dump\Migration;

/**
 * Class m181115_045905_2_key_yp_desktop_user
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m181115_045905_2_key_yp_desktop_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->runSuccess['PRIMARY'] = $this->addPrimaryKey(null, '{{%yp_desktop_user}}', 'id');
        $this->runSuccess['addAutoIncrement'] = $this->addAutoIncrement('{{%yp_desktop_user}}', 'id', 'integer', '', 2);
        $this->runSuccess['username'] = $this->createIndex('username', '{{%yp_desktop_user}}', 'username', 1);
        $this->runSuccess['email'] = $this->createIndex('email', '{{%yp_desktop_user}}', 'email', 1);
        $this->runSuccess['password_reset_token'] = $this->createIndex('password_reset_token', '{{%yp_desktop_user}}', 'password_reset_token', 1);

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
                $this->dropPrimaryKey(null, '{{%yp_desktop_user}}');
            } elseif (!empty($keyName)) {
                $this->dropIndex("`$keyName`", '{{%yp_desktop_user}}');
            }
        }

    }
}
