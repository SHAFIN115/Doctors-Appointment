<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <div class="container">
        <h1>Edit Doctor</h1>
         <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $doctor->name }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $doctor->phone }}">
            </div>
            <div class="form-group">
                <label for="fee">Fee:</label>
                <input type="text" class="form-control" id="fee" name="fee" value="{{ $doctor->fee }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

