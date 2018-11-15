<?php

use hzhihua\dump\Migration;

/**
 * Class m181115_045905_0_table_yp_desktop_menu
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m181115_045905_0_table_yp_desktop_menu extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->runSuccess['createTable'] = $this->createTable('{{%yp_desktop_menu}}', [
            'id' => $this->integer(11)->notNull(),
            'name' => $this->string(128)->notNull(),
            'parent' => $this->integer(11)->null(),
            'route' => $this->string(256)->null(),
            'order' => $this->integer(11)->null(),
            'data' => $this->text()->null(),
        ], $this->tableOptions);

        $this->runSuccess['addTableComment'] = $this->addCommentOnTable('{{%yp_desktop_menu}}', '管理员菜单');

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        
        foreach ($this->runSuccess as $keyName => $value) {
            if ('createTable' === $keyName) {
                $this->dropTable('{{%yp_desktop_menu}}');
            } elseif ('addTableComment' === $keyName) {
                $this->dropCommentFromTable('{{%yp_desktop_menu}}');
            } else {
                throw new \yii\db\Exception('only support "dropTable" and "dropCommentFromTable"');
            }
        }
    }
}
