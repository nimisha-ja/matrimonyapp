<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table            = 'accounts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    // Optional: to use UUIDs for lookups
    protected $primaryKeyType   = 'int';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;

    protected $allowedFields = [
        'uuid',
        'email',
        'username',
        'password',
        'full_name',
        'phone',
        'profile_picture',
        'status',
        'is_verified',
        'role',
        'last_login_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation rules (optional, helpful for forms)
    protected $validationRules = [
        'email'    => 'required|valid_email|is_unique[accounts.email,id,{id}]',
        'username' => 'required|min_length[3]|is_unique[accounts.username,id,{id}]',
        'password' => 'permit_empty|min_length[6]',
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'This email is already registered.',
        ],
        'username' => [
            'is_unique' => 'This username is already taken.',
        ],
    ];

    protected $skipValidation = false;
}
