<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Article extends Model
{
    use LogsActivity;

    protected $fillable = ['title'];

    protected static $logAttributes = ['title'];
}
