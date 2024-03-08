<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\organisator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlockController extends Controller
{
    public function showBlockedUsers()
    {
        $blockedUsers = client::where('status', '0')->get();    
        $blockedOrganisators = organisator::where('status', '0')->get();

        return view('admin.block', compact('blockedUsers', 'blockedOrganisators'));
    }

    public function showUnBlockedUsers()
    {
        $UnblockedUsers = client::where('status', '1')->get();    
        $UnblockedOrganisators = organisator::where('status', '1')->get();

        return view('admin.blocked', compact('UnblockedUsers', 'UnblockedOrganisators'));
    }
}
