<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = [
        'title',
        'description',
        'priority',
        'status',
        'assigned_to',
        'created_by',
        'image',
        'reason',
        'approximate_completion_date',
        'estimated_time',
        'project_id',
    ];

    protected $casts = [
        'assigned_to' => 'integer',
        'created_by' => 'integer',
        'project_id' => 'integer',
        'approximate_completion_date' => 'date',
        'estimated_time' => 'integer',
    ];
    
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
    
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    public function project()
    {
        return $this->belongsTo(Projects::class);
    }    //
}
