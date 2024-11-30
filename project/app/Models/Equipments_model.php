<?php
namespace App\Models;

use CodeIgniter\Model;

class Equipments_model extends Model{

    protected $table = 'items';

    protected $primaryKey = 'id';

    protected $useautoincrement = true;

    protected $allowedFields = [
        'id',
        'equipmentid',
        'borrower',
        'reserver',
        'datecreated',
        'equipmentname',
        'accessories',
        'dateborrowed', 
        'datereserved',
        'status',
        'category',
        'description',
        'image',
    ];


}

?>