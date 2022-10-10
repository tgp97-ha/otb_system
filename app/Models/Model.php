<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as ModelOrigin;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends ModelOrigin
{
    use        SoftDeletes;
}
