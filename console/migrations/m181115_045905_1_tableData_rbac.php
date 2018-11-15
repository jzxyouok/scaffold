<?php

class m181115_045905_1_tableData_rbac extends \yii\db\Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        // auth_item
        $this->insert('{{%auth_item}}', ['name' =>'/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/assignment/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/assignment/assign', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/assignment/revoke', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/assignment/view', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/menu/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/menu/create', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/menu/delete', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/menu/index', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/menu/update', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/menu/view', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/permission/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/permission/assign', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/permission/create', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/permission/delete', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/permission/index', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/permission/remove', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/permission/update', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/permission/view', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/role/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/role/assign', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/role/create', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/role/delete', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/role/index', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/role/remove', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/role/update', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/role/view', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/route/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/route/assign', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/route/create', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/route/index', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/route/refresh', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/route/remove', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/rule/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/rule/create', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/rule/delete', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/rule/index', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/rule/update', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/rule/view', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/activate', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/create', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/delete', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/inactive', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/index', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/login', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/logout', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/reset-password', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/update', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/admin/user/view', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/site/*', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/site/error', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'/site/index', 'type' => 2, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        $this->insert('{{%auth_item}}', ['name' =>'超级管理员', 'type' => 1, 'description' => null, 'rule_name' => null, 'data' => null, 'created_at' => 1487816732, 'updated_at' => 1487816732]);
        
        // auth_item_child
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/assignment/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/assignment/assign']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/assignment/revoke']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/assignment/view']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/menu/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/menu/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/menu/delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/menu/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/menu/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/menu/view']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/permission/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/permission/assign']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/permission/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/permission/delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/permission/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/permission/remove']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/permission/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/permission/view']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/role/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/role/assign']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/role/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/role/delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/role/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/role/remove']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/role/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/role/view']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/route/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/route/assign']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/route/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/route/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/route/refresh']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/route/remove']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/rule/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/rule/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/rule/delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/rule/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/rule/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/rule/view']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/activate']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/inactive']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/login']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/logout']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/reset-password']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/admin/user/view']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/site/*']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/site/error']);
        $this->insert('{{%auth_item_child}}', ['parent' => '超级管理员', 'child' => '/site/index']);

        // auth_assignment
        $this->insert('{{%auth_assignment}}', ['item_name' => '超级管理员', 'user_id' => '1', 'created_at' => 1487817340]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {

    }
}
