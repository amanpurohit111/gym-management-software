<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'duration',
        'fees',
        'discount',
        'description',
        'status',
       
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
