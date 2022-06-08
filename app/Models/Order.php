<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected  $fillable =[
        'fname',
        'lname',
        'email',
        'phone_number',
        'address',
        'city',
        'state',
        'country',
        'post_code',
        'status',
        'message',
        'tracking_no'
    ];
    public function orderitem(){
        return $this->hasmany(orderitem::class);
    }
}
