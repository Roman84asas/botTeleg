<?php

namespace Tests\Repositories;


use App\Entities\Message;
use App\Entities\User;
use App\Repositories\MessageRepasitories;
use Tests\TestCase;

/**
 * @property MessageRepasitories repository
 * @property \Mockery\MockInterface entity
 * @property  user
 * @property \Mockery\MockInterface user
 */
class MessageRepositoryTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();

        $this->user = $this->mock(User::class);
        $this->entity = $this->mock(Message::class);
        $this->repository = new MessageRepasitories($this->entity);
    }

    public function test_store()
    {
        $userId = $this->facker()->randomNumber();
        $this->user->shouldReceive('getAttribute')->with('id')->andReturn($userId);
        $externalId = $this->facker()->randomNumber();
        $text = $this->facker()->text;

        $message = $this->repository->store($this->user, $externalId, $text);
    }
}