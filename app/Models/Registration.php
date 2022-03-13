<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    /**
     * @var string
     */

    protected $table = 'registrations';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';

    protected $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'contactNumber',
        'dateOfBirth',
        'religion',
        'status',
        'gender',
        'monthlyIncome',
        'socialClass',
        'householdNumber',
        'municipality',
        'sitio',
        'sector',
        'occupation',
        'markAs',
        'remarks'
    ];
    protected $casts = [
        'beneficiaries' => 'array'
    ];
}
