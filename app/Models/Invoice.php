<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public $table= "invoices";

    protected $fillable = [
        "id",
        "ref_no",
        "gateway",
        "amount",
        "currency",
        "stripe_id",
        "status_id",
        "order_id",
        "user_id",
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function getRouteKeyName()
    {
        return 'ref_no';
    }
}
