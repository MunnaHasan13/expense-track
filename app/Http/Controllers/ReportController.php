<?php

namespace App\Http\Controllers;
use App\Models\Expense;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
//use Auth;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $today = now()->format('Y-m-d');
        $yesterday = now()->subDay()->format('Y-m-d');
        $last7Days = now()->subDays(7)->format('Y-m-d');
        $last30Days = now()->subDays(30)->format('Y-m-d');
        $currentYear = now()->format('Y');

        $todayExpense = Expense::whereDate('date', $today)->sum('amount');
        $yesterdayExpense = Expense::whereDate('date', $yesterday)->sum('amount');
        $last7DaysExpense = Expense::where('date', '>=', $last7Days)->sum('amount');
        $last30DaysExpense = Expense::where('date', '>=', $last30Days)->sum('amount');
        $currentYearExpense = Expense::whereYear('date', $currentYear)->sum('amount');

        return view('reports.index', [
            'todayExpense' => $todayExpense,
            'yesterdayExpense' => $yesterdayExpense,
            'last7DaysExpense' => $last7DaysExpense,
            'last30DaysExpense' => $last30DaysExpense,
            'currentYearExpense' => $currentYearExpense
        ]);
    }
}
