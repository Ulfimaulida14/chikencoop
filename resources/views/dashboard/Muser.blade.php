<head>
    <title>manage-user</title>
</head>

@extends('dashboard.app')

@section('konten')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Manage Users</h5>
                    <button class="btn btn-light" data-toggle="modal" data-target="#addUserModal"><i class="ri-add-line"></i> Add User</button>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example data -->
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>john.doe@example.com</td>
                                <td>Admin</td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#updateUserModal"><i class="ri-edit-line"></i> Update</button>
                                    <button class="btn btn-sm btn-danger"><i class="ri-delete-bin-line"></i> Delete</button>
                                </td>
                            </tr>
                            <!-- Repeat for each user -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="userName">Name</label>
                        <input type="text" class="form-control" id="userName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="userEmail">Email</label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="userRole">Role</label>
                        <select class="form-control" id="userRole">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update User Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="updateUserName">Name</label>
                        <input type="text" class="form-control" id="updateUserName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="updateUserEmail">Email</label>
                        <input type="email" class="form-control" id="updateUserEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="updateUserRole">Role</label>
                        <select class="form-control" id="updateUserRole">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        border-radius: 12px;
    }

    .card-header {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-light {
        color: #495057;
    }

    .modal-content {
        border-radius: 12px;
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Handle Add User Form submission here
        $('#addUserModal form').submit(function(e) {
            e.preventDefault();
            // Add user logic here
            $('#addUserModal').modal('hide');
        });

        // Handle Update User Form submission here
        $('#updateUserModal form').submit(function(e) {
            e.preventDefault();
            // Update user logic here
            $('#updateUserModal').modal('hide');
        });

        // Handle Delete User action here
        $('.btn-danger').click(function() {
            // Delete user logic here
        });
    });
</script>
@endpush
