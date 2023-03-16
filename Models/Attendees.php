<?php

namespace App\Models;

use CodeIgniter\Model;

class Attendees extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'attendees';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
   
    protected $protectFields    = true;
    protected $allowedFields    = ['first_name', 'middle_name', 'last_name', 'sex', 'qr_code', 'email','contact_number','address','age'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
