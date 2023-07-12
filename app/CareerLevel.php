<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerLevel extends Model
{
    public $timestamps=false;

    public $table = 'career_levels';

    protected $fillable=[
        'id',
        'name',
        'duration',
    ];

    public function fare()
    {
        return $this->hasMany(Fare::class, 'career_level_id','id' );
    }
}
