<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::paginate(10);
        return view('index', compact('customers'));
    }

    public function datatable()
    {
        $customers = Customers::all();
        return view('datatable', compact('customers'));
    }
}
