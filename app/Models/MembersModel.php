<?php
namespace App\Models;

use CodeIgniter\Model;

class MembersModel extends Model
{
    protected $table         = 'members';
    protected $pprimaryKey   = 'id';
    protected $allowedFields = ['name', 'dob', 'wife', 'date_of_marriage', 'father_name', 'mother_name', 'qualification', 'residencial_address', 'residencial_phone', 'mobile', 'email', 'office_name', 'office_phone', 'office_address', 'member_type', 'photo', 'status', 'created_at', 'updated_at'];

    public function get_members($start, $length, $search = '')
    {
        $builder = $this->db->table($this->table);

        if (! empty($search)) {
            $builder->like('name', $search);
            $builder->orLike('office_name', $search);
        }

        return $builder->orderBy('name')->limit($length, $start)->get()->getResultArray();
    }

    public function count_all_items()
    {
        return $this->db->table($this->table)->countAllResults();
    }

    public function count_filtered_items($search = '')
    {
        $builder = $this->db->table($this->table);

        if (! empty($search)) {
            $builder->like('name', $search);
        }

        return $builder->countAllResults();
    }

    public function get_dice()
    {
        $builder = $this->db->table($this->table);

        return $builder
            ->whereNotIn('member_type', ['member', 'working committee', 'past president', 'birthday chairmen', 'anniversary chairmen', 'ambulance chairmen', 'team'])
            ->orWhere('id', 12)
            ->orderBy("FIELD(member_type, 'president', 'vice president', 'joint president', 'secretary',  'joint secretary','treasurer', 'past president')", '', false)
            ->get()
            ->getResultArray();
    }

    public function get_former_president()
    {
        $builder = $this->db->table($this->table);

        return $builder
            ->where('member_type', 'past president')
            ->orderBy("FIELD(id, 80, 127, 119, 122, 37, 12)", '', false)
            ->get()
            ->getResultArray();
    }

     public function get_chairmen()
    {
        $builder = $this->db->table($this->table);

        return $builder
            ->whereIn('id', [18, 134, 122])
            ->orderBy("FIELD(id, 18, 134, 122)", '', false)
            ->get()
            ->getResultArray();
    }

}
