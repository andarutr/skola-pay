<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkedUser extends Model
{
    use HasFactory;

    protected $table = 'linked_account';

    protected $primaryKey = 'id_linked';

    protected $guarded = [];
}
