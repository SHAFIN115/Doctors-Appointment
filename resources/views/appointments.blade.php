<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container">
  <h1>Make an Appointment</h1>
  <form method="POST" action="{{ route('doctors.store') }}">
    @csrf
    <div class="form-group">
      <label for="appointment_date">Appointment Date:</label>
      <input type="date" class="form-control" id="appointment_date" name="appointment_date">
    </div>
    <div class="form-group">
      <label for="department_id">Department:</label>
      <select class="form-control" id="department_id" name="department_id">
        <option value="">Select Department</option>
        @foreach ($departments as $department)
          <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
    <div id="fee-container"></div>
      <label for="doctor_id">Doctor:</label>
      <select class="form-control" id="doctor_id" name="doctor_id">
        <option value="">Select Doctor</option>
        @foreach ($doctors as $doctor)
            <option value="{{ $doctor->name }}">{{ $doctor->name }}>{{ $doctor->fee }}</option>
        @endforeach

      </select>
    </div>
    </div>
    <button id="submit-btn" type="button" class="btn btn-primary">Submit</button>
  </form>
</div>



<script>
  // Add an event listener to the button
  document.getElementById("submit-btn").addEventListener("click", function() {
    // Code to execute when the button is clicked
    alert("The Fee of the Doctor is: {{ $doctor->fee }}");
  });
</script>