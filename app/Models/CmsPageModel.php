<?php 

namespace App\Models;

use CodeIgniter\Model;

class CmsPageModel extends Model
{
    protected $table = 'cms_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['slug', 'title', 'content', 'status'];
}
