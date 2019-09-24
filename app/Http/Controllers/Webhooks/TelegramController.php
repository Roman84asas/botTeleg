<?php

namespace App\Http\Controllers\Webhooks;


use App\Http\Controllers\Controller;
use App\Repositories\MessageRepasitories;
use App\Repositories\UserRepositories;
use Telegram;

class TelegramController extends Controller
{

    public function process(UserRepositories $users, MessageRepasitories $messages)
    {
        $update = Telegram::bot()->getWebhookUpdate();

        $message = $update->getMessage();

        $user = $message->getFrom();

        //save User
        $user = $users->store(
            $user->getId(),
            $user->getFirstName() ?? '',
            $user->getLastName() ?? '',
            $user->getUsername() ?? ''
        );

        //Save Message
        $messages->store(
            $user,
            $message->getMessageId(),
            $message->getText() ?? ''
        );


    }

}