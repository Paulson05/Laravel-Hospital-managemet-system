<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'patients_appointments';
    public function series (){
        $this->belongsTo(Serial::class, 'serials_id' );
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::creating(function ($model){
            $model->number = Appointment::where('appointment_id', $model->appointment_id)->max('number') + 1;
        });
    }
}
