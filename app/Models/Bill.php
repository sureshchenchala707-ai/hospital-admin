<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['op_id','consultation_fee','lab_fee','medicine_fee','total'];

    public function visit()
    {
        return $this->belongsTo(OpVisit::class,'op_id');
    }
}
