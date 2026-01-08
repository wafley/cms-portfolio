<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile extends Model
{
    // Database table configuration
    protected $table            = 'profiles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Profile::class;

    // Allowed fields for mass assignment
    protected $allowedFields    = [
        'full_name',
        'headline',
        'about',
        'email',
        'phone',
        'address',
        'photo',
    ];

    // Date fields
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    // Validation rules
    protected $validationRules = [
        'full_name' => 'required|min_length[3]|max_length[255]',
        'headline'  => 'required|max_length[50]',
        'about'     => 'required',
        'email'     => 'required|valid_email',
        'phone'     => 'required|min_length[10]|max_length[20]',
        'address'   => 'required',
    ];
}
