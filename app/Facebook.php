<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Facebook extends Model 
{
    protected $table ='facebook';
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