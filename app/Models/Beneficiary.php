<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $table = 'beneficiaries';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    protected $fillable = [
        'ben_id',
        'familyMembers',
        'relation',
        'birthDate',
        'gender',
        'occupation',
        'sector',
        'healthCondition'
    ];
}
