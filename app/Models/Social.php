<?php

namespace App\Models;

use CodeIgniter\Model;

class Social extends Model
{
    // Database table configuration
    protected $table            = 'socials';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Social::class;

    // Allowed fields for mass assignment
    protected $allowedFields    = [
        'platform',
        'url',
        'icon',
    ];

    // Date fields
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    // Validation rules
    protected $validationRules = [
        'platform' => 'required|min_length[2]|max_length[50]',
        'url'      => 'required|valid_url|max_length[255]',
        'icon'     => 'permit_empty|max_length[100]',
    ];
}
