<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description'];
    protected $appends = [];


    /****************************************************/
    /******************* RELATIONSHIPS ******************/
    /****************************************************/

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
