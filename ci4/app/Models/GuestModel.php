<?php

namespace App\Models;
use CodeIgniter\Model;
class GuestModel extends Model 
{
    protected $table = 'anmendoza_guests';  
    
    public function getGuest ($slug = false)
    {
            return $this->findAll();
    }

}