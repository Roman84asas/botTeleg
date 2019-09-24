<?php

namespace App\Http\Controllers\Webhooks;


use App\Http\Controllers\Controller;
use App\Repositories\MessageRepasitories;
use App\Repositories\UserRepositories;
use Log;
use Telegram;

class TelegramController extends Controller
{


    /**
     * @param UserRepositories $users
     * @param MessageRepasitories $messages
     */
    public function process(UserRepositories $users, MessageRepasitories $messages)
    {

        $update = Telegram::bot()->getWebhookUpdate();
        Log::debug('Telegram.process', [
            'update' => $update,
        ]);

        $message = $update->getMessage();

        $user = $message->getFrom();


        //save or find User
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