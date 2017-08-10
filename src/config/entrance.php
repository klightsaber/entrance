<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Entrance Role Model
    |--------------------------------------------------------------------------
    |
    | This is the Role model used by Entrance to create correct relations.  Update
    | the role if it is in a different namespace.
    |
    */
    'role' => 'App\Models\Entrance\Role',

    /*
    |--------------------------------------------------------------------------
    | Entrance Roles Table
    |--------------------------------------------------------------------------
    |
    | This is the roles table used by Entrance to save roles to the database.
    |
    */
    'roles_table' => 'auth_roles',

    /*
    |--------------------------------------------------------------------------
    | Entrance Permission Model
    |--------------------------------------------------------------------------
    |
    | This is the Permission model used by Entrance to create correct relations.
    | Update the permission if it is in a different namespace.
    |
    */
    'permission' => 'App\Models\Entrance\Permission',

    /*
    |--------------------------------------------------------------------------
    | Entrance Permissions Table
    |--------------------------------------------------------------------------
    |
    | This is the permissions table used by Entrance to save permissions to the
    | database.
    |
    */
    'permissions_table' => 'auth_permissions',

    /*
    |--------------------------------------------------------------------------
    | Entrance permission_role Table
    |--------------------------------------------------------------------------
    |
    | This is the permission_role table used by Entrance to save relationship
    | between permissions and roles to the database.
    |
    */
    'permission_role_table' => 'auth_permission_role',

    /*
    |--------------------------------------------------------------------------
    | Entrance Modules Model
    |--------------------------------------------------------------------------
    |
    | This is the Role model used by Entrance to create correct relations.  Update
    | the role if it is in a different namespace.
    |
    */
    'module' => 'App\Models\Entrance\Module',

    /*
    |--------------------------------------------------------------------------
    | Entrance Modules Table
    |--------------------------------------------------------------------------
    |
    | This is the roles table used by Entrance to save roles to the database.
    |
    */
    'modules_table' => 'auth_modules',
];
