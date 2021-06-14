<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;
trait HasRolesAndPermissions
{

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function isAdmin()
    {
        if($this->roles->contains('slug', 'admin')){
            return true;
        }
    }
    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'users_roles');
    }

    /**
     * @return mixed
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'users_permissions');
    }

    /**
     * Revisa si el usuario tiene rol
     *
     * @param [type] $role
     * @return boolean
     */
    public function hasRole($role)
    {        
        // if( strpos($role, ',') !== false ){//revisa si es una lista de roles

            // $listOfRoles = explode(',',$role);

            // foreach ($listOfRoles as $role) {                    
                if ($this->roles->contains('slug', $role)) {
                    return true;
                }
            // }
        // }else{                
        //     if ($this->roles->contains('slug', $role)) {
        //         return true;
        //     }
        // }

        return false;
    }
}