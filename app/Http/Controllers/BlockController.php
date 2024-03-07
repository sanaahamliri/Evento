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
        $blockedUsers = DB::table('users')
            ->join('clients', 'users.id', '=', 'clients.IdUser')
            ->where('clients.status', 0)
            ->select('users.name', 'users.email', 'users.role', 'users.created_at')
            ->get();

        $blockedOrganisators = DB::table('users')
            ->join('organisators', 'users.id', '=', 'organisators.IdUser')
            ->where('organisators.status', 0)
            ->select('users.name', 'users.email', 'users.role', 'users.created_at')
            ->get();

        $blockedUsers = $blockedUsers->merge($blockedOrganisators)->toArray();

        return view('admin.block', compact('blockedUsers'));
    }
}


