<?php
namespace App\Models;

use CodeIgniter\Model;

class Reports_model extends Model{

    protected $table = 'reports';

    protected $primaryKey = 'id';

    protected $useautoincrement = true;

    protected $allowedFields = [
        'id',
        'username',
        'type',
        'equipmentid',
        'equipmentname',
        'category',
    ];


}

?>