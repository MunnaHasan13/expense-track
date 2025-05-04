@extends('layouts.app')

@section('content')
    <div class="container margin-all">
        <h1 class="report-title"> Reports </h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Today's Expense</h5>
                        <p class="card-text">{{ number_format($todayExpense, 2) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Yesterday's Expense</h5>
                        <p class="card-text">{{ number_format($yesterdayExpense, 2) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Last 7 Days' Expense</h5>
                        <p class="card-text">{{ number_format($last7DaysExpense, 2) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Last 30 Days' Expenses</h5>
                        <p class="card-text">{{ number_format($last30DaysExpense, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Current Year Expenses</h5>
                        <p class="card-text">Total Expenses: {{ number_format($currentYearExpense, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
