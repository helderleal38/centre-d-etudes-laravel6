<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Teatcher extends Model
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'phoneNumber', 'scoolLevel', 'matter', 'cv'
    ];

    /**
    * Relation ONE to ONE
    */
    
    public function users(){
        return $this->belongsTo(User::class);
        }
}
