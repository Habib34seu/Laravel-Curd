<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Gender;
use App\Models\Country;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function gender()
    {
         return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
    public function countries()
    {
         return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    public function user()
    {
         return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
