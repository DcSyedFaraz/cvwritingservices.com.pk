<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{

    public $timestamps = false;

    public $table = 'fares';

    protected $fillable = [
        'career_level_id',
        'fare_amt',
    ];

    public function career_level()
    {
        return $this->belongsTo(CareerLevel::class, "career_level_id");
    }

    public function order_service()
    {
        return $this->belongsTo(OrderService::class, "order_service_id");
    }

    public function deadline()
    {
        return $this->belongsTo(Deadline::class, "deadline_id");
    }

}
