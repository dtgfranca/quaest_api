<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model 
{
    protected $table ='instagram';
    protected $fillable =[
        'id',
        'followers',
        'likes',
        'comments',
        'posts',
        'date',
        'profile_id'
    ];
    
    public $timestamps = false;
    

}