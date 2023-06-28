<?php namespace NielsVanDenDries\Downloadmanager\Models;

use Model;

/**
 * Model
 */
class Files extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $table = 'nielsvandendries_downloadmanager_files';

    public $rules = [
    ];

    public $attachMany = [
    'files' => \System\Models\File::class
    ];
}
