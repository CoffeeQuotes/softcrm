<?php

namespace App\Models\Lead;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "middlename",
        "lastname",
        "lead_group_id",
        "user_id",
        "status",
        "created_at",
        "updated_at",
    ];
}
