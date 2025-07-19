@extends('layouts.adminlte')

@section('subtitle', 'Supplier')
@section('content_header_title', 'Supplier')
{{-- @section('content_header_subtitle', 'Dashboard') --}}
@section('content_body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <div class="card-title mb-0" style="letter-spacing: 1ch; text-transform: uppercase;" id="title_emp">
                    Details</div>
                <a href="#" class="btn btn-sm btn-primary ml-auto">Create Supplier</a>
            </div>
            <div class="card-body">
                <table id="sampleId" class="table-bordered w-100">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap; padding: 12px">Name</th>
                            <th style="white-space: nowrap; padding: 12px">Email</th>
                            <th style="white-space: nowrap; padding: 12px">Phone</th>
                            <th style="white-space: nowrap; padding: 12px">Address</th>
                            <th style="white-space: nowrap; padding: 12px">Assignee Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- {{ dd($employees) }} --}}
                        @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->email }}</td>
                            <td>{{ $supplier->phone }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td>{{ $supplier->assignee_contact}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#"
                                        class="btn btn-sm btn-success mr-1 d-flex items-center justify-center">
                                        <i class="fas fa-edit"></i>&nbsp;
                                        <span>Edit</span>
                                    </a>
                                </div>
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
            responsive: true,
        });

    });
</script>
@endpush
@stop