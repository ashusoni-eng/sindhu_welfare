<?php
namespace App\Models;

use CodeIgniter\Model;

class EventsModel extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'title', 'description', 'image', 'date', 'time', 'location', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function get_latest()
    {
        $builder = $this->db->table($this->table);

        return $builder->orderBy('id', 'DESC')->limit(3)->get()->getResultArray();
    }
}
