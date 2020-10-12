<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PreRegistration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'scoolName', 'year', 'matter', 'responsible', 'address', 'phoneNumber'
    ];

    /**
    * Relation ONE to MANY
    */
    
    public function users(){
    return $this->belongsTo(User::class);
    }
}
