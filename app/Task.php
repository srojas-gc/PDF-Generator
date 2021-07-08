<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['user_id','name','nameCreador','fecha_emision','valido_hasta','ContentCant','hasContent'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
