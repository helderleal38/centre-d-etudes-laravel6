<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'comment', 'avatar'
    ];
    
    /**
    * Relation ONE to MANY
    */
    
    public function users(){
        return $this->belongsTo(User::class);
        }
}
