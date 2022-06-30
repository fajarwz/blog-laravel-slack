<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InvoicePaid;
use App\Models\User;

class SlackController extends Controller
{
    public function onDemand() {
        Notification::route('slack', 'https://hooks.slack.com/services/...')
            ->notify(new InvoicePaid());
        
        return 'Slack On Demand success!';
    }

    public function byUserModel() {
        $user = new User;

        $user->notify(new InvoicePaid());

        return 'Slack By User Model success!';
    }
}
