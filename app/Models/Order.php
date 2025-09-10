<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
   protected $fillable = [
    'name',
    'email',
    'phone',
    'country',
    'paper_topic',
    'course_name',
    'academic_level',
    'number_of_pages',
    'reference_style',
    'deadline',
    'detail',
    'is_complete',
    'cost_per_page',
    'total_price',
    'academic_level_id',
    'deadline_id',
    'user_id',
    'status_id',
];



    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function careerLevel()
    {
        return $this->belongsTo(AcademicLevel::class, 'academic_level', 'id' );
    }

    public function packageOrder()
    {
        return $this->belongsTo(Subject::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function deadlineOrder()
    {
        return $this->belongsTo(Deadline::class , 'deadline', 'id' );
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function status(){
        return $this->belongsTo(Status::class,'status_id','id');
    }


}
