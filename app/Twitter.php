<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Twitter extends Model 
{
    protected $table ='twiiter';
    protected $fillable =[
        'id',
        'followers',
        'likes',
        'retweets',
        'posts',
        'date',
        'profile_id'
    ];
    
    public $timestamps = false;
    

}