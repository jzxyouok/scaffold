<?php

use hzhihua\dump\Migration;

/**
 * Class m181115_045905_1_tableData_yp_desktop_menu
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m181115_045905_1_tableData_yp_desktop_menu extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->_transaction = $this->getDb()->beginTransaction();
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
