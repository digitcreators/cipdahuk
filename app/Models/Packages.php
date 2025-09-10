<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    public $timestamps=false;
    public $table = 'packages';
    protected $fillable=[
        'id',
        'name',
    ];
    public function fare()
    {
        return $this->hasOne(Fare::class, 'id' );
    }
}
