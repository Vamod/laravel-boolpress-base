<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    // per poterlo togliere dalla tabella va impostato a false
    public $timestamps = false;
    // $fillable sono i campi della tabella che posso andare a modificare
    protected $fillable = [
        'telefono', 'avatar', 'user_id'
    ];

    // relazione uno a uno con User
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
