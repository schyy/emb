<?php

namespace emb\Migrations;

use emb\Models\emb;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

/**
 * Class CreateEmb
 */
class CreateEmbTable
{
    /**
     * @param Migrate $migrate
     */
    public function run(Migrate $migrate)
    {
        $migrate->createTable(emb::class);
    }
}
