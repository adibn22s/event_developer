<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Declare:table
    public $table = 'role';

    // this fiela must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function role_user()
    {
        // 3 parameters (path models ,field foreign key dan field primary key dari tabel hasmany/hasone)
        return $this->hasMany('App\Models\ManagementAccess.php','role_id');
    }  

    // one to many
    public function permission_role()
    {
        // 3 parameters (path models ,field foreign key dan field primary key dari tabel hasmany/hasone)
        return $this->hasMany('App\Models\ManagementAccess.php','role_id');
    }  
}
