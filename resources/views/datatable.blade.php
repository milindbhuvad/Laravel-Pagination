@extends('layout')
@section('content')

<table id="customersTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>User Name</th>
            <th>Email</th>
            <th width="150">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($customers as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->user_name }}</td>
            <td>{{ $item->email }}</td>
            <td>
                {{-- <a href="{{ route('customers.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('customers.destroy', $item->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form> --}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#customersTable').DataTable();
    });
</script>
@endsection