<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name','nameCreador','fecha_emision','valido_hasta'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
