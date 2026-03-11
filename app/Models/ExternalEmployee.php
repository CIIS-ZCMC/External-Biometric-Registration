<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExternalEmployee extends Model
{
    protected $connection = 'UMIS';
    protected $table = 'external_employees';
}
