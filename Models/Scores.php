<?php

namespace App\Models;

use CodeIgniter\Model;

class Scores extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'scores';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['datetime_start', 'datetime_end', 'score', "details"];

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
