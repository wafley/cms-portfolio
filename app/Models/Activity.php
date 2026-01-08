<?php

namespace App\Models;

use CodeIgniter\Model;

class Activity extends Model
{
    // Database table configuration
    protected $table            = 'activities';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Activity::class;

    // Allowed fields for mass assignment
    protected $allowedFields    = [
        'activity_date',
        'title',
        'description',
        'category',
        'picture',
    ];

    // Date fields
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    // Validation rules
    protected $validationRules = [
        'activity_date'    => 'required|valid_date',
        'title'            => 'required|min_length[3]|max_length[150]',
    ];
}
