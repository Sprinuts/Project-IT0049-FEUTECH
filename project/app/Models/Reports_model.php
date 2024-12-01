<?php
namespace App\Models;

use CodeIgniter\Model;

class Reports_model extends Model{

    protected $table = 'items';

    protected $primaryKey = 'id';

    protected $useautoincrement = true;

    protected $allowedFields = [
        'id',
        'type',
        'equipmentid',
        'username',
    ];


}

?>