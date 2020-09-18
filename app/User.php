<?php

namespace App;

use App\Student;
use App\Teatcher;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'name', 'email', 'password', 'state',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function getName(){
    //     return "toto";
    // }

    public function isAdmin()
    {
        return $this->where('state', "administrateur")->first();
    }

    public function isProf()
    {
        return $this->where('state', "professeur")->first();
    }


    public function isEleve()
    {
        return $this->where('state', "eleve")->first();
    }

    /**
    * Relation ONE to ONE
    */
    public function students(){
        return $this->hasOne(Student::class);
    }

    /**
    * Relation ONE to ONE
    */
    
    public function teatchers(){
        return $this->belongsTo(Teatcher::class);
        }
    

    /**
    * Relation ONE to MANY
    */
    
    public function comments(){
        return $this->hasMany(Comment::class);
        }
}
