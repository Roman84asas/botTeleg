<?php


namespace App\Repositories;


use App\Entities\Message;
use App\Entities\User;

class MessageRepasitories extends AbstractRepositories
{

    public function __construct(Message $entity)
    {
        parent::__construct($entity);
    }

    /**
     * @param User $user
     * @param int $externalId
     * @param string $text
     * @return Message|\Eloquent|\Illuminate\Database\Eloquent\Model
     */
    public function store(User $user, int $externalId, string $text)
    {
        return $this->entity->create([
            'user_id' => $user->id,
            'external_id' => $externalId,
            'text' => $text,
        ]);
    }

}