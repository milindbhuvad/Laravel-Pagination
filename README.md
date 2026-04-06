Set Database name in .env file
    DB_DATABASE=db_seeder_faker

Create customer controller and model
    php artisan make:model Customers -c

Define in controller
    use App\Models\Customers;

    public function index()
    {
        $customers = Customers::paginate(10);
        return view('customers.index', compact('customers'));
    }

Define Route
    Route::get('/customers', [CustomersController::class, 'index']);

Create layout.blade.php and index.blade.php

    index.blade.php

    For Sr.No.
    <td>{{ ($customers->currentPage() - 1) * $customers->perPage() + $loop->iteration }}</td>

    For pagination add below code 
    {{ $customers->links() }}

Pagination with Data Table js
    Add below css and js in layout.blade.php
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    in datatable.blade.php
    <table id="customersTable" >

    <script>
        $(document).ready(function() {
            $('#customersTable').DataTable();
        });
    </script>