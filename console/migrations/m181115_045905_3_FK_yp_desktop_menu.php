<?php

use hzhihua\dump\Migration;

/**
 * Class m181115_045905_3_FK_yp_desktop_menu
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m181115_045905_3_FK_yp_desktop_menu extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $tablePrefix = \Yii::$app->getDb()->tablePrefix;
        $this->runSuccess[$tablePrefix.'menu_ibfk_1'] = $this->addForeignKey($tablePrefix.'menu_ibfk_1', '{{%yp_desktop_menu}}', 'parent', '{{%yp_desktop_menu}}', 'id', 'SET NULL', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        
        foreach ($this->runSuccess as $keyName => $value) {
            $this->dropForeignKey($keyName, '{{%yp_desktop_menu}}');
        }

    }
}
