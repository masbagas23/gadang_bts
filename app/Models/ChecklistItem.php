<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChecklistItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'checklist_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
