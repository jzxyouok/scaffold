<?php

class m181115_045905_1_tableData_yiiplus_desktop extends \yii\db\Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%yp_desktop_user}}', ['id' => 1, 'username' => 'webmaster', 'auth_key' => 'UKpH8-7IxZXSLzcOU7ooSaUHwPYq9BLp', 'password_hash' => '$2y$13$HylJs5OBsNBcnI4DCVQuqeGeIvr1/JqXrkOnhRtDKJsRoGGAfRu5e', 'password_reset_token' => null, 'email' => 'webmaster@example.com', 'status' => 10, 'created_at' => 1504106471, 'updated_at' => 1504106471]);

        $this->insert('{{%yp_desktop_menu}}', ['id' => 1, 'name' => '仪表盘', 'parent' => null, 'route' => '/', 'order' =>100, 'data' => '{"icon":"dashboard"}']);
        $this->insert('{{%yp_desktop_menu}}', ['id' => 2, 'name' => '系统设置', 'parent' => null, 'route' => null, 'order' =>200, 'data' => '{"icon":"cog"}']);
        $this->insert('{{%yp_desktop_menu}}', ['id' => 3, 'name' => '菜单列表', 'parent' => 2, 'route' => '/admin/menu/index', 'order' =>1, 'data' => '{"icon":"list"}']);
        $this->insert('{{%yp_desktop_menu}}', ['id' => 4, 'name' => '用户管理', 'parent' => 2, 'route' => '/admin/user/index', 'order' =>2, 'data' => '{"icon":"user"}']);
        $this->insert('{{%yp_desktop_menu}}', ['id' => 5, 'name' => '角色列表', 'parent' => 2, 'route' => '/admin/role/index', 'order' =>3, 'data' => '{"icon":"users"}']);
        $this->insert('{{%yp_desktop_menu}}', ['id' => 6, 'name' => '访问控制', 'parent' => 2, 'route' => null, 'order' =>4, 'data' => '{"icon":"laptop"}']);
        $this->insert('{{%yp_desktop_menu}}', ['id' => 7, 'name' => '路由列表', 'parent' => 6, 'route' => '/admin/route/index', 'order' =>61, 'data' => '{"icon":"circle"}']);
        $this->insert('{{%yp_desktop_menu}}', ['id' => 8, 'name' => '规则列表', 'parent' => 6, 'route' => '/admin/rule/index', 'order' =>62, 'data' => '{"icon":"circle"}']);
        $this->insert('{{%yp_desktop_menu}}', ['id' => 9, 'name' => '权限列表', 'parent' => 6, 'route' => '/admin/permission/index', 'order' =>63, 'data' => '{"icon":"circle"}']);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('{{%yp_desktop_user}}', ['id' => 1]);

        $this->delete('{{%yp_desktop_menu}}', ['id' => 1]);
        $this->delete('{{%yp_desktop_menu}}', ['id' => 2]);
        $this->delete('{{%yp_desktop_menu}}', ['id' => 3]);
        $this->delete('{{%yp_desktop_menu}}', ['id' => 4]);
        $this->delete('{{%yp_desktop_menu}}', ['id' => 5]);
        $this->delete('{{%yp_desktop_menu}}', ['id' => 6]);
        $this->delete('{{%yp_desktop_menu}}', ['id' => 7]);
        $this->delete('{{%yp_desktop_menu}}', ['id' => 8]);
        $this->delete('{{%yp_desktop_menu}}', ['id' => 9]);
    }
}
