<?php

use hzhihua\dump\Migration;

/**
 * Class m181115_045905_1_tableData_auth_item
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m181115_045905_1_tableData_auth_item extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->_transaction = $this->getDb()->beginTransaction();
        $this->batchInsert('{{%auth_item}}', 
            ['name', 'type', 'description', 'rule_name', 'data', 'created_at', 'updated_at'],
            [
                ['/*', 2, null, null, null, 1487816675, 1487816675],
                ['/admin/*', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/assignment/*', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/assignment/assign', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/assignment/revoke', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/assignment/view', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/menu/*', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/menu/create', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/menu/delete', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/menu/index', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/menu/update', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/menu/view', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/permission/*', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/permission/assign', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/permission/create', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/permission/delete', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/permission/index', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/permission/remove', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/permission/update', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/permission/view', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/role/*', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/role/assign', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/role/create', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/role/delete', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/role/index', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/role/remove', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/role/update', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/role/view', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/route/*', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/route/assign', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/route/create', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/route/index', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/route/refresh', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/route/remove', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/rule/*', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/rule/create', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/rule/delete', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/rule/index', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/rule/update', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/rule/view', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/*', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/activate', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/create', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/delete', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/inactive', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/index', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/login', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/logout', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/reset-password', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/update', 2, null, null, null, 1487816732, 1487816732],
                ['/admin/user/view', 2, null, null, null, 1487816732, 1487816732],
                ['/site/*', 2, null, null, null, 1487816732, 1487816732],
                ['/site/error', 2, null, null, null, 1487816732, 1487816732],
                ['/site/index', 2, null, null, null, 1487816732, 1487816732],
                ['超级管理员', 1, null, null, null, 1487817275, 1487817275],
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
