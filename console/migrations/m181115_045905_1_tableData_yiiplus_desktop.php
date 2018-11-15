<?php

class m181115_045905_1_tableData_yiiplus_desktop extends \yii\db\Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->batchInsert('{{%yp_desktop_user}}', 
            ['id', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'status', 'created_at', 'updated_at'],
            [
                [1, 'webmaster', 'UKpH8-7IxZXSLzcOU7ooSaUHwPYq9BLp', '$2y$13$HylJs5OBsNBcnI4DCVQuqeGeIvr1/JqXrkOnhRtDKJsRoGGAfRu5e', null, 'webmaster@example.com', 10, 1504106471, 1504106471],
            ]
        );
        $this->batchInsert('{{%yp_desktop_menu}}', 
            ['id', 'name', 'parent', 'route', 'order', 'data'],
            [
                [1, '仪表盘', null, '/', 100, '{"icon":"dashboard"}'],
                [2, '系统设置', null, null, 200, '{"icon":"cog"}'],
                [3, '菜单列表', 2, '/admin/menu/index', 1, '{"icon":"list"}'],
                [4, '用户管理', 2, '/admin/user/index', 2, '{"icon":"user"}'],
                [5, '角色列表', 2, '/admin/role/index', 3, '{"icon":"users"}'],
                [6, '访问控制', 2, null, 4, '{"icon":"laptop"}'],
                [7, '路由列表', 6, '/admin/route/index', 61, '{"icon":"circle"}'],
                [8, '规则列表', 6, '/admin/rule/index', 62, '{"icon":"circle"}'],
                [9, '权限列表', 6, '/admin/permission/index', 63, '{"icon":"circle"}'],
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('{{%yp_desktop_user}}', [
            'id' => 1
        ]);
        $this->delete('{{%yp_desktop_menu}}', [
            'id' => [1, 2, 3,4,5,6,7,8,9]
        ]);
    }
}
