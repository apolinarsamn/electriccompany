<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerAccountModel extends Model
{
    protected $table            = 'customer_accounts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields = [
        'account_number',
        'customer_name',
        'address',
        'phone',
        'email',
        'meter_number',
        'connection_type',
        'status',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getAccountsPaginated($perPage = 5)
    {
        return $this->orderBy('id', 'DESC')->paginate($perPage);
    }

    public function searchAccounts($keyword, $perPage = 5)
    {
        return $this->groupStart()
            ->like('account_number', $keyword)
            ->orLike('customer_name', $keyword)
            ->orLike('email', $keyword)
            ->orLike('phone', $keyword)
            ->groupEnd()
            ->orderBy('id', 'DESC')
            ->paginate($perPage);
    }

    public function getAccountsByStatus($status, $perPage = 5)
    {
        return $this->where('status', $status)
            ->orderBy('id', 'DESC')
            ->paginate($perPage);
    }

    public function getAccountsByType($type, $perPage = 5)
    {
        return $this->where('connection_type', $type)
            ->orderBy('id', 'DESC')
            ->paginate($perPage);
    }

    public function getTotalAccounts()
    {
        return $this->countAllResults();
    }

    public function getCountByStatus($status)
    {
        return $this->where('status', $status)->countAllResults();
    }
}