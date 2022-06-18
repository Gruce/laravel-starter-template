<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [];
    protected $appends = [];



    /****************************************************/
    /******************* RELATIONSHIPS ******************/
    /****************************************************/
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
