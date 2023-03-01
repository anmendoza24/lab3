<?php

namespace App\Models;
use CodeIgniter\Model;
class NewsModel extends Model 
{
<<<<<<< HEAD
    protected $table = 'news';  
    protected $allowedFields = ['title', 'slug', 'body'];
=======
    protected $table = 'anmendoza_news';  

>>>>>>> 79f5165b03f5f2441d88fe7f1a91d38d60e27ae3
    public function getNews ($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }
        return $this->where(['slug' =>  $slug]) -> first();
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> 79f5165b03f5f2441d88fe7f1a91d38d60e27ae3
