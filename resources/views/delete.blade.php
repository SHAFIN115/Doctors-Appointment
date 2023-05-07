<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <div class="container">
        <h1>Delete Doctor</h1>
        <p>Are you sure you want to delete the following doctor?</p>

        <div class="card">
            <div class="card-header">{{ $doctor->name }}</div>
            <div class="card-body">
                <p><strong>Phone:</strong> {{ $doctor->phone }}</p>
                <p><strong>Fee:</strong> {{ $doctor->fee }}</p>
                <form method="POST" action="{{ route('doctors_destroy', $doctor->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

