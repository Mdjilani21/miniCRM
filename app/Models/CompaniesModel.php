<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeesModel;

class CompaniesModel extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];

    public function getEmployee()
    {
        return $this->hasMany(EmployeesModel::class, 'company', 'name' );
    }
}
