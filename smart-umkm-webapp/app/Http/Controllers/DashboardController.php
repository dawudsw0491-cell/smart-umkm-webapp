<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;

        return match ($role) {
            'owner' => view('dashboard.owner'),
            'admin' => view('dashboard.admin'),
            'kasir' => view('dashboard.kasir'),
            default => abort(403),
        };
    }
}