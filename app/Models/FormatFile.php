<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_type',
        'file_route',
        'folder_parent',
        'folder_id',
        'file_name',
        'file_ext',
        'file_name_ext',
        'file_description',
        'file_size',
        'file_mimetype',
        'file_color',
        'file_impact',
        'file_progress',
        'file_user_id',
        'file_project_id',
        'file_start_date',
        'file_close_date',
        'file_last_date',
        'file_content',
    ];

    public function folder()
    {
        return $this->belongsTo(FormatFolder::class,'folder_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'file_project_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'file_user_id');
    }

    public function file_permissions()
    {
        return $this->hasMany(FilePermission::class, 'file_id');
    }
}
