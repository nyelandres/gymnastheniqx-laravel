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
                    Details
                </div>
                <!-- Button to trigger the Create Supplier modal -->
                <a href="#" class="btn btn-sm btn-primary ml-auto" data-toggle="modal" data-target="#createSupplierModal">Create Supplier</a>
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
                        @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->email }}</td>
                            <td>{{ $supplier->phone }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td>{{ $supplier->assignee_contact}}</td>
                            <td>
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-success mr-1" data-toggle="modal" data-target="#supplierModal" data-name="{{ $supplier->name }}" data-email="{{ $supplier->email }}" data-phone="{{ $supplier->phone }}" data-address="{{ $supplier->address }}" data-assignee="{{ $supplier->assignee_contact }}">
                                        <i class="fas fa-edit"></i>&nbsp;
                                        <span>Edit</span>
                                    </button>
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

<!-- Modal for Creating Supplier -->
<div class="modal fade" id="createSupplierModal" tabindex="-1" role="dialog" aria-labelledby="createSupplierModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createSupplierModalLabel">Create Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createSupplierForm">
                    <div class="form-group">
                        <label for="createName">Name</label>
                        <input type="text" class="form-control" id="createName" placeholder="Enter supplier name">
                    </div>
                    <div class="form-group">
                        <label for="createEmail">Email</label>
                        <input type="email" class="form-control" id="createEmail" placeholder="Enter supplier email">
                    </div>
                    <div class="form-group">
                        <label for="createPhone">Phone</label>
                        <input type="text" class="form-control" id="createPhone" placeholder="Enter supplier phone">
                    </div>
                    <div class="form-group">
                        <label for="createAddress">Address</label>
                        <input type="text" class="form-control" id="createAddress" placeholder="Enter supplier address">
                    </div>
                    <div class="form-group">
                        <label for="createAssignee">Assignee Contact</label>
                        <input type="text" class="form-control" id="createAssignee" placeholder="Enter assignee contact">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="createSupplierSubmit">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure for Editing Existing Supplier -->
<div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="supplierModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="supplierModalLabel">Supplier Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="modalName">Name</label>
                        <input type="text" class="form-control" id="modalName" readonly>
                    </div>
                    <div class="form-group">
                        <label for="modalEmail">Email</label>
                        <input type="email" class="form-control" id="modalEmail" readonly>
                    </div>
                    <div class="form-group">
                        <label for="modalPhone">Phone</label>
                        <input type="text" class="form-control" id="modalPhone" readonly>
                    </div>
                    <div class="form-group">
                        <label for="modalAddress">Address</label>
                        <input type="text" class="form-control" id="modalAddress" readonly>
                    </div>
                    <div class="form-group">
                        <label for="modalAssignee">Assignee Contact</label>
                        <input type="text" class="form-control" id="modalAssignee" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    $(function() {
        // DataTable initialization
        $('#sampleId').DataTable({
            responsive: true,
        });

        // Populate modal with supplier data when the Edit button is clicked
        $('#supplierModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var name = button.data('name');
            var email = button.data('email');
            var phone = button.data('phone');
            var address = button.data('address');
            var assignee = button.data('assignee');

            // Fill the modal fields with data
            $('#modalName').val(name);
            $('#modalEmail').val(email);
            $('#modalPhone').val(phone);
            $('#modalAddress').val(address);
            $('#modalAssignee').val(assignee);
        });

        // Submit the form when the Create Supplier modal is submitted
        $('#createSupplierSubmit').on('click', function() {
            // Example: You can add an AJAX request here to save the data
            var name = $('#createName').val();
            var email = $('#createEmail').val();
            var phone = $('#createPhone').val();
            var address = $('#createAddress').val();
            var assignee = $('#createAssignee').val();

            // Handle the submission of the form data (for example, via AJAX)
            console.log('Creating supplier:', name, email, phone, address, assignee);
            // You can send this data to the server via an AJAX POST request
        });
    });
</script>
@endpush
@stop