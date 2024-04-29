@extends('admin.layout.main')

@section('main-section-admin')
    <!-- Content Header (Page header) -->
    <style>
        .form-container {
             width: 100%;
             padding: 20px;
             border: 1px solid #ccc;
             border-radius: 5px;
             background-color: #f9f9f9;
         }
     
         .form-group {
             margin-bottom: 20px;
         }
     
         .form-label {
             font-weight: bold;
         }
     
         .form-input {
             width: 100%;
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 5px;
             box-sizing: border-box;
         }
     
         .form-textarea {
             width: 100%;
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 5px;
             box-sizing: border-box;
         }
     
         .form-select {
             width: 100%;
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 5px;
             box-sizing: border-box;
         }
     
         .form-submit {
             padding: 10px 20px;
             border: none;
             border-radius: 5px;
             background-color: #007bff;
             color: #fff;
             cursor: pointer;
         }
     
         .form-submit:hover {
             background-color: #0056b3;
         }
     </style>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.users.user') }}" class="btn btn-primary">New Users</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group input-group" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                        
                                <th>Role</th>
                                <th>View</th>

                                <th width="150">Update</th>
                                <th width="100">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.view', ['id' =>$user->id]) }}">
                                            <i class="fas fa-eye"></i> 
                                        </a>
                                    </td>
                                    <td><a href="{{ route('admin.users.edit', ['id' =>$user->id]) }}" class="btn btn-sm btn-warning">Edit</a></td>
                                    <td>
                                        <form action="{{ route('admin.users.destroy', ['id' =>$user->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="form-container">
                <form id="userForm" method="post" action="{{ route('admin.users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">Name <span class="wpforms-required-label">*</span></label>
                        <input type="text" id="name" class="form-input" name="name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email <span class="wpforms-required-label">*</span></label>
                        <input type="email" id="email" class="form-input" name="email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone">Password</label>
                        <input type="tel" id="phone" class="form-input" name="password">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="role">Role</label>
                        <select id="role" class="form-select" name="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="form-submit-container">
                        <button type="submit" class="form-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection