<?php

namespace Modules\AppSetting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Domains\Auth\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Domains\Auth\Models\User;

class AppSettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        $lower_module = strtolower('AppSetting');
        
        $lower_modulePermission = Permission::create([
            'type' => User::TYPE_ADMIN,
            'name' => "admin.access.$lower_module",
            'description' => 'All AppSetting Permissions',
        ]);

        $lower_modulePermission->children()->saveMany([
            new Permission([
                'type' => User::TYPE_ADMIN,
                'name' => "admin.access.$lower_module.manage",
                'description' => 'Manage AppSetting',
            ]),
            new Permission([
                'type' => User::TYPE_ADMIN,
                'name' => "admin.access.$lower_module.view",
                'description' => 'View AppSetting',
            ]),
            new Permission([
                'type' => User::TYPE_ADMIN,
                'name' => "admin.access.$lower_module.create",
                'description' => 'Create AppSetting',
                'sort' => 4,
            ]),
            new Permission([
                'type' => User::TYPE_ADMIN,
                'name' => "admin.access.$lower_module.edit",
                'description' => 'Edit AppSetting',
                'sort' => 5,
            ]),
            new Permission([
                'type' => User::TYPE_ADMIN,
                'name' => "admin.access.$lower_module.delete",
                'description' => 'Delete AppSetting',
                'sort' => 5,
            ]),
        ]);
    }
}
