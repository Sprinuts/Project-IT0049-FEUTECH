<?php
namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model{

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $useautoincrement = true;

    protected $allowedFields = [
        'id',
        'name',
        'birthdate',
        'password',
        'status', //activated or deactivated
        'role', //ITSO, associate or student
        'email',
        'username',
        'activationcode',
        'datecreated',
        'resetcode',
    ];


}

?>