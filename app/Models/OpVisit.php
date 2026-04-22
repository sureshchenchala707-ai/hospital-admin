<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpVisit extends Model
{
    protected $fillable = ['patient_id','op_number','doctor','visit_date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function bill()
    {
        return $this->hasOne(Bill::class,'op_id');
    }
}
