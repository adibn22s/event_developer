<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Declare:table
    public $table = 'event';

    // this field must type date yyyy-mm-dd hh-mm-ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'request_event_id',
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function users()
    {
        // 3 parameters (path models ,field foreign key dan field primary key dari tabel hasmany/hasone)
        return $this->belongsTo('App\Models\User.php','user_id','id');
    } 

    // one to many
    public function request_event()
    {
        // 3 parameters (path models ,field foreign key dan field primary key dari tabel hasmany/hasone)
        return $this->belongsTo('App\Models\Operational\RequestEvent.php','request_event_id','id');
    }  
}
