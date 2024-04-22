<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'fees',
        'user_id',
        'mobile',
        'details',
        'duration',
        'doj',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
