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
        'fistName',
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

    public function registration()
    {
        return $this->hasOne(Beneficiary::class, 'ben_id');
    }
}
