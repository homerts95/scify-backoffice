<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(): Response {

        $games = Game::with('creator', 'application')->get();

        return Inertia::render('Dashboard', ['games' => $games]);
    }
}
