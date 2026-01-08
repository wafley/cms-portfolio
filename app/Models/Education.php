<?php

namespace App\Models;

use CodeIgniter\Model;

class Education extends Model
{
    // Database table configuration
    protected $table            = 'educations';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Education::class;

    // Allowed fields for mass assignment
    protected $allowedFields    = [
        'institution',
        'degree',
        'start_year',
        'end_year',
        'description',
    ];

    // Date fields
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    // Validation rules
    protected $validationRules = [
        'institution' => 'required|min_length[3]',
        'start_year'  => 'permit_empty|numeric|exact_length[4]',
        'end_year'    => 'permit_empty|numeric|exact_length[4]',
    ];
}
