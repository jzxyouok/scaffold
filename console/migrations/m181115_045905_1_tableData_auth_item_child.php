<?php

use hzhihua\dump\Migration;

/**
 * Class m181115_045905_1_tableData_auth_item_child
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m181115_045905_1_tableData_auth_item_child extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->_transaction = $this->getDb()->beginTransaction();
        $this->batchInsert('{{%auth_item_child}}', 
            ['parent', 'child'],
            [
                ['超级管理员', '/*'],
                ['超级管理员', '/admin/*'],
                ['超级管理员', '/admin/assignment/*'],
                ['超级管理员', '/admin/assignment/assign'],
                ['超级管理员', '/admin/assignment/revoke'],
                ['超级管理员', '/admin/assignment/view'],
                ['超级管理员', '/admin/menu/*'],
                ['超级管理员', '/admin/menu/create'],
                ['超级管理员', '/admin/menu/delete'],
                ['超级管理员', '/admin/menu/index'],
                ['超级管理员', '/admin/menu/update'],
                ['超级管理员', '/admin/menu/view'],
                ['超级管理员', '/admin/permission/*'],
                ['超级管理员', '/admin/permission/assign'],
                ['超级管理员', '/admin/permission/create'],
                ['超级管理员', '/admin/permission/delete'],
                ['超级管理员', '/admin/permission/index'],
                ['超级管理员', '/admin/permission/remove'],
                ['超级管理员', '/admin/permission/update'],
                ['超级管理员', '/admin/permission/view'],
                ['超级管理员', '/admin/role/*'],
                ['超级管理员', '/admin/role/assign'],
                ['超级管理员', '/admin/role/create'],
                ['超级管理员', '/admin/role/delete'],
                ['超级管理员', '/admin/role/index'],
                ['超级管理员', '/admin/role/remove'],
                ['超级管理员', '/admin/role/update'],
                ['超级管理员', '/admin/role/view'],
                ['超级管理员', '/admin/route/*'],
                ['超级管理员', '/admin/route/assign'],
                ['超级管理员', '/admin/route/create'],
                ['超级管理员', '/admin/route/index'],
                ['超级管理员', '/admin/route/refresh'],
                ['超级管理员', '/admin/route/remove'],
                ['超级管理员', '/admin/rule/*'],
                ['超级管理员', '/admin/rule/create'],
                ['超级管理员', '/admin/rule/delete'],
                ['超级管理员', '/admin/rule/index'],
                ['超级管理员', '/admin/rule/update'],
                ['超级管理员', '/admin/rule/view'],
                ['超级管理员', '/admin/user/*'],
                ['超级管理员', '/admin/user/activate'],
                ['超级管理员', '/admin/user/create'],
                ['超级管理员', '/admin/user/delete'],
                ['超级管理员', '/admin/user/inactive'],
                ['超级管理员', '/admin/user/index'],
                ['超级管理员', '/admin/user/login'],
                ['超级管理员', '/admin/user/logout'],
                ['超级管理员', '/admin/user/reset-password'],
                ['超级管理员', '/admin/user/update'],
                ['超级管理员', '/admin/user/view'],
                ['超级管理员', '/site/*'],
                ['超级管理员', '/site/error'],
                ['超级管理员', '/site/index'],
            ]
        );
        $this->_transaction->commit();

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        
        $this->_transaction->rollBack();

    }
}
