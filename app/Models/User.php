<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'tenant_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function parent()
    {
        return $this->hasOne(ParentModel::class);
    }

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function libraryIssues()
    {
        return $this->hasMany(LibraryIssue::class);
    }
}
