<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Appointment</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 5rem;
    }
    
    .nav-link {
      font-size: 1.2rem;
      font-weight: bold;
      color: #333;
    }
    
    .nav-link:hover {
      color: #000;
    }
    
    .active {
      color: #007bff !important;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Doctor Appointment</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('doctors_index') }}">Doctor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('appointments') }}">Appointments</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1>Welcome Doctor's Appointment Website!</h1>
    <p>A doctor's appointment website is an online platform that allows patients to schedule and manage their appointments with healthcare providers. These websites typically provide information on available doctors, their specialties, locations, and availability. Patients can easily book an appointment with their preferred doctor by selecting a date and time that is convenient for them. The website also provides tools for patients to manage their appointments, reschedule or cancel appointments, and receive reminders before the scheduled appointment time. Some websites may also allow patients to see their medical records, communicate with their doctors, or request prescription refills. Overall, doctor's appointment websites aim to simplify the process of scheduling and managing appointments for patients while reducing the workload for healthcare providers.</p>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</body>
</html>
