<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminRole = User::createRole('Super Admin');
        $memberRole = User::createRole('Member');

        // Permissions group wise
        $permissionGroups = [
            'dashboard' => [
                'dashboard.view', // both for member
                'dashboard.member_statistics'
            ],

            'user' => [
                'user.view',
                'user.create',
                'user.edit', // both for member
                'user.delete',
                'user.list'
            ],

            'member' => [
                'member.view',
                'member.create',
                'member.edit',
                'member.delete',
                'member.list'
            ],

            'monthly_installment' => [
                'monthly_installment.view',
                'monthly_installment.create',
                'monthly_installment.edit',
                'monthly_installment.delete',
                'monthly_installment.list'
            ],

            'fixed_installment' => [
                'fixed_installment.view',
                'fixed_installment.create',
                'fixed_installment.edit',
                'fixed_installment.delete',
                'fixed_installment.list'
            ],

            'collection' => [
                'collection.view', // both for member
                'collection.create',
                'collection.edit',
                'collection.delete',
                'collection.list'
            ],

            'report' => [
                'report.monthly_collections',
                'report.fixed_collections'
            ],
        ];

        $memberPermissions = [
            'dashboard.view',
            'profile.edit',
            'collection.view'
        ];

        // Insert the permission and assign it to a role
        foreach ($permissionGroups as $permissionGroupKey => $permissions) {
            foreach ($permissions as $permissionName) {
                $permission = Permission::create([
                    'group_name' => $permissionGroupKey,
                    'name'       => $permissionName
                ]);

                $superAdminRole->givePermissionTo($permission);
                $permission->assignRole($superAdminRole);

                if(in_array($permissionName, $memberPermissions)) {
                    $memberRole->givePermissionTo($permission);
                    $permission->assignRole($memberRole);
                }
            }
        }
    }
}
