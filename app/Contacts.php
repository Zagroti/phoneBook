<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Contacts extends Model
{
    use Searchable;
    protected $fillable=['user_id','name','email','mobileNumber','phoneNumber','address'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
