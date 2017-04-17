<?php

namespace embList\Repositories;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;
use emb\Contracts\embRepositoryContract;
use emb\Models\emb;
use emb\Validators\embValidator;
use Plenty\Modules\Frontend\Services\AccountService;


class embRepository implements embRepositoryContract
{
    /**
     * @var AccountService
     */
    private $accountService;

    /**
     * UserSession constructor.
     * @param AccountService $accountService
     */
    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    /**
     * Get the current contact ID
     * @return int
     */
    public function getCurrentContactId(): int
    {
        return $this->accountService->getAccountContactId();
    }

    /**
     * Add a new item to the To Do list
     *
     * @param array $data
     * @return ToDo
     * @throws ValidationException
     */
    public function createTask(array $data): emb
    {
        try {
            embValidator::validateOrFail($data);
        } catch (ValidationException $e) {
            throw $e;
        }

        /**
         * @var DataBase $database
         */
        $database = pluginApp(DataBase::class);

        $emb = pluginApp(emb::class);

        $emb->taskDescription = $data['taskDescription'];

        $emb->userId = $this->getCurrentContactId();

        $emb->createdAt = time();

        $database->save($emb);

        return $emb;
    }

    /**
     * List all items of the To Do list
     *
     * @return ToDo[]
     */
    public function getEmbList(): array
    {
        $database = pluginApp(DataBase::class);

        $id = $this->getCurrentContactId();
        /**
         * @var ToDo[] $toDoList
         */
        $embList = $database->query(emb::class)->where('Id', '=', $id)->get();
        return $embList;
    }
}
