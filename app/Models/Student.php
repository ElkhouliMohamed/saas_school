<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function parents()
    {
        return $this->belongsToMany(ParentModel::class);
    }

    public function examResults()
    {
        return $this->hasMany(ExamResult::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function libraryIssues()
    {
        return $this->hasMany(LibraryIssue::class);
    }

    public function assignments()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
