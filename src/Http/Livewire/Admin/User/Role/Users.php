<?php

namespace AliQasemzadeh\Http\Livewire\Admin\User\Role;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    public  $role;

    public function mount(Role $role)
    {
        $this->role = $role;
    }

    public function render()
    {
        return view('jetadmin::livewire.admin.user.role.users');
    }
}
