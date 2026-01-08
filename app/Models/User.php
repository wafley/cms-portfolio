<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    // Database table configuration
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = User::class;

    // Allowed fields for mass assignment
    protected $allowedFields    = [
        'username',
        'password',
    ];

    // Date fields
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    // Validation rules
    protected $validationRules = [
        'username' => 'required|is_unique[users.username,id,{id}]',
        'password' => 'required|min_length[8]',
    ];

    // Callbacks
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    // Hash password before saving to database
    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
