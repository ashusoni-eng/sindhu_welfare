<?php
namespace App\Models;

use CodeIgniter\Model;

class EmailSubscriptionModel extends Model
{
    protected $table         = 'email_subscription';
    protected $pprimaryKey   = 'id';
    protected $allowedFields = ['email', 'created_at', 'updated_at'];

}
