<?php

namespace App\Models;
use CodeIgniter\Model;
class GuestModel extends Model 
{
    protected $table = 'anmendoza_myguests';  
    
    protected $allowedFields =['fname', 'email', 'website', 'comment', 'gender'];

    public function getGuest ($slug = false)
    {
            return $this->findAll();
    }

}