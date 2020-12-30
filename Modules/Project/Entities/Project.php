<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = [
        'owner_id',
        'designer_id',
        'category_id',
        'title',
        'subtitle',
        'description',
        'tags',
        'vote',
        'country',
        'address',
        'location_lat',
        'location_long',
        'deadline',
        'objective',
    ];
}
