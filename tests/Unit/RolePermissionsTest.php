<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

class RolePermissionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
    */
    public function test_role_has_many_permissions()
    {
        $role = new Role;

        $this->assertInstanceOf(Collection::class, $role->permission);
    }
   
}
