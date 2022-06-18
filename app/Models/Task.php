<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;


    protected $fillable = ['name', 'description', 'is_active', 'state',  'importance'];
    protected $appends = [];



    /****************************************************/
    /******************* RELATIONSHIPS ******************/
    /****************************************************/
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
