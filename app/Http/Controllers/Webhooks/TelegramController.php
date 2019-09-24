<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.09.2019
 * Time: 16:26
 */

namespace App\Http\Controllers\Webhooks;


use App\Http\Controllers\Controller;
use App\Repositories\UserRepositories;
use Telegram;

class TelegramController extends Controller
{

    public function process(UserRepositories $users)
    {
        $update = Telegram::bot()->getWebhookUpdate();

        $message = $update->getMessage();

        $user = $message->getFrom();

        $users->store(
            $user->getId(),
            $user->getFirstName(),
            $user->getLastName()
        );
    }

}