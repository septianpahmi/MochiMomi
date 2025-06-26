<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Feedback;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\TransactionItems;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';
        $userCount = User::count();
        $transakiCount = TransactionItems::count();
        $produkCount = Products::count();
        $feedCount = Feedback::count();
        return view('dashboard.dashboard', compact('pageTitle', 'userCount', 'transakiCount', 'produkCount', 'feedCount'));
    }
}
