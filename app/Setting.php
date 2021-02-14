<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    // don't look for created_at and updated_at columns
    public $timestamps = false;
}
