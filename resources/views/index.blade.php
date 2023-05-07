<!-- index.blade.php -->
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<h1>Doctors</h1>
<div class="d-flex justify-content-between align-items-center">
    <a href="/create-doctor" class="btn btn-primary">Create Doctor</a>
</div>

<div class="d-flex justify-content-between align-items-center">
    <a href="/doctors_edit" class="btn btn-primary">Edit the Doctor's Information</a>
</div>


@if (count($doctors) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department ID</th>
                <th>Phone</th>
                <th>Fee</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->department_id }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->fee }}</td>
                    <td>{{ $doctor->created_at }}</td>
                    <td>{{ $doctor->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No doctors found.</p>
@endif
<!-- Create Doctor Modal -->
<div class="modal fade" id="createDoctorModal" tabindex="-1" role="dialog" aria-labelledby="createDoctorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDoctorModalLabel">Create Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('doctors.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="department_id">Department ID</label>
                        <input type="text" class="form-control" id="department_id" name="department_id" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="fee">Fee</label>
                        <input type="text" class="form-control" id="fee" name="fee" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>