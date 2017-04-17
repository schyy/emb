<?php

namespace emb\Contracts;

use emb\Models\emb;

/**
 * Class embRepositoryContract
 * @package embList\Contracts
 */
interface embRepositoryContract
{
    /**
     * Add a new task to the To Do list
     *
     * @param array $data
     * @return ToDo
     */
    public function createTask(array $data): emb;

    /**
     * List all tasks of the To Do list
     *
     * @return ToDo[]
     */
    public function getEmbList(): array;
}
