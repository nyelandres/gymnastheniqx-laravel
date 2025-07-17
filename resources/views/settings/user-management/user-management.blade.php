@extends('layouts.adminlte')

@section('subtitle', 'User Management')
@section('content_header_title', 'User Management')
{{-- @section('content_header_subtitle', 'Dashboard') --}}
@section('content_body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="card-title mb-0">User Management</div>
                    <a href="#" class="btn btn-sm btn-primary ml-auto">Create User</a>
                </div>
                <div class="card-body">
                    <table id="sampleId" class="table-bordered table-striped w-100">
                        <thead>
                            <tr>
                                <th style="white-space: nowrap; padding: 12px">Full Name</th>
                                <th style="white-space: nowrap; padding: 12px">Email</th>
                                <th style="white-space: nowrap; padding: 12px">Username</th>
                                <th style="white-space: nowrap; padding: 12px">Contact Number</th>
                                <th style="white-space: nowrap; padding: 12px">Status</th>
                                <th style="white-space: nowrap; padding: 12px">Date Hired</th>
                                <th style="white-space: nowrap; padding: 12px">Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->full_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->username }}</td>
                                    <td>{{ $employee->contact_number }}</td>
                                    <td class="text-center {{ $employee->status === 'active' ? 'bg-olive' : 'bg-navy' }}">
                                        {{ ucfirst($employee->status) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($employee->date_hired)->toFormattedDateString() }}</td>
                                    <td>{{ $employee->role->role_name ?? 'N/A' }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $(function() {
                $('#sampleId').DataTable({
                    responsive: true
                });
            });
        </script>
    @endpush
@stop
