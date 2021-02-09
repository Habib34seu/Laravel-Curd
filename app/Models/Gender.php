<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
class Gender extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function profile()
    {
        return $this->hasOne(Profile::class,'gender_id', 'id');
       
    }
}
