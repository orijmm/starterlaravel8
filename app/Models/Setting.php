<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name_company',
        'description',
        'address',
        'phone',
        'email',
        'locale',
        'timezone',
        'state_id',
        'city_id',
        'country_id',
        'currency_id'
    ];

    //faltan relaciones de state,city,country and currency

    /**
     * Get all of the media for settings.
     */
    public function media()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }

}
