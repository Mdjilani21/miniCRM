<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CompaniesModel;

class EmployeesModel extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'firstname',
        'lastname',
        'company',
        'email',
        'phone',
    ];

    public function getCompany()
    {
        return $this->belongsTo(CompaniesModel::class);
    }
}
