<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
    'member_id',	'user_id',	'plan_id',	'member_name',	'plan_name',	'duration',	'plan_fees',	'plan_discount',	'extradiscount',	'feessubmited',	'dos',	'planexpiredate',	'paymentmode',	'remark'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    // Inside the Payment model
public function member()
{
    return $this->belongsTo(Member::class);
}
public function plan()
{
    return $this->belongsTo(Plan::class);
}

}
