<?php

namespace App\Models;

use CodeIgniter\Model;

class Events extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'events';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $protectFields    = true;
    protected $allowedFields    = ['date_start', 'date_end', 'event_name', 'event_description', 'venue', 'banner', 'qr_code'];

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
