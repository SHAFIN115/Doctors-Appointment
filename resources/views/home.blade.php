<!-- resources/views/home.blade.php -->
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<form action="{{ route('home') }}" method="GET">
  <div class="row mb-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Appointment Number" name="appointment_no" value="{{ request('appointment_no') }}">
    </div>
    <div class="col">
      <input type="date" class="form-control" placeholder="Appointment Date" name="appointment_date" value="{{ request('appointment_date') }}">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Doctor Name" name="doctor_name" value="{{ request('doctor_name') }}">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Patient Name" name="patient_name" value="{{ request('patient_name') }}">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Patient Phone" name="patient_phone" value="{{ request('patient_phone') }}">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </div>
</form>





















<div class="container">
    <h1>All Appointments</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Appointment No.</th>
                <th>Appointment Date</th>
                <th>Doctor</th>
                <th>Patient Name</th>
                <th>Patient Phone</th>
                <th>Total Fee</th>
                <th>Paid Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
            <tr>
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->appointment_no }}</td>
                <td>{{ $appointment->appointment_date }}</td>
                <td>
                    @if ($appointment->doctor)
                        {{ $appointment->doctor->name }}
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $appointment->patient_name }}</td>
                <td>{{ $appointment->patient_phone }}</td>
                <td>{{ $appointment->total_fee }}</td>
                <td>{{ $appointment->paid_amount }}</td>
            </tr>
               
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $appointments->links() }}
</div>

