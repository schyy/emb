<?php

namespace emb\Models;

use Plenty\Modules\Plugin\DataBase\Contracts\Model;

/**
 * Class emb
 *
 * @property int     $id
 * @property string  $email
 * @property string  $name
 * @property string  $item
 */
class emb extends Model
{
    /**
     * @var int
     */
    public $id              = 0;
    public $email           = '';
    public $name            = '';
    public $item            = '';

    /**
     * @return string
     */
    public function getTableName(): string
    {
        return 'emb::emb';
    }
}
