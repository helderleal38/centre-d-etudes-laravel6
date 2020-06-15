<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'scoolName', 'year', 'matter', 'responsible', 'address', 'phoneNumber'
    ];

    /**
    * Relation ONE to ONE
    */
    
    public function users(){
    return $this->belongsTo(User::class);
    }
}
