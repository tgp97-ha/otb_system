<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use function abort;

class User extends Authenticatable
{
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * @param string|array $roles
     */
    public function authorizeRoles($roles): bool
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || abort(401, 'This action is unauthorized.');
        }

        return $this->hasRole($roles) || abort(401, 'This action is unauthorized.');
    }

    /**
     * Check multiple roles
     *
     * @param array $roles
     */
    public function hasAnyRole($roles): bool
    {
        return in_array($this->role->name, $roles);
    }

    /**
     * Check one role
     *
     * @param string $role
     */
    public function hasRole($role): bool
    {
        return $this->role->name === $role;
    }

    public function tourist(): HasMany
    {
        return $this->hasMany(Tourist::class, 'user_serial', 'serial');
    }
}
