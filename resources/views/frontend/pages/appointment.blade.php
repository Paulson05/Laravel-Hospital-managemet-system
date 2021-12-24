@extends('frontend.master')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Make An Appointment</h2>
            <div style="height:50px;">&nbsp;</div>
            <div class="alert alert-danger" id="validationErrorsBox" style="display: none"></div>
            <form method="POST" action="https://hms.infyom.com/appointment" accept-charset="UTF-8" id="appointmentForm"><input name="_token" type="hidden" value="lehBkHv5U0RFlIWNrZtxQg91f66ObgbXMTR1CJqK">
            <input type="hidden" name="_token" value="lehBkHv5U0RFlIWNrZtxQg91f66ObgbXMTR1CJqK">                <div class="row">
<div class="form-group col-sm-6">
    <label for="gender" class="font-weight-bold">Patient Appointment:</label>
    <br>
    <input type="radio" class="new-patient-radio" name="patient_type"
           value="1" checked>&nbsp;New Patient &nbsp;&nbsp;&nbsp;
    <input type="radio" class="old-patient-radio" name="patient_type"
           value="2"> Old Patient
</div>
<div class="form-group col-sm-6 patient-email-div">
    <label for="email" class="font-weight-bold">Email:</label><span
            class="text text-danger">*</span>
    <input class="form-control old-patient-email" autocomplete="off" required name="email" type="email" id="email">
</div>
<div class="form-group col-sm-6 old-patient d-none">
    <label for="patient_id" class="font-weight-bold">Patient Name:</label>
    <span class="text text-danger">*</span>
    <input class="form-control" id="patientName" autocomplete="off" required readonly name="patient_name" type="text">
    <input id="patient" name="patient_id" type="hidden">
</div>
<div class="form-group col-sm-3 first-name-div">
    <label for="first_name" class="font-weight-bold">First Name:</label><span
            class="text text-danger">*</span>
    <input class="form-control" autocomplete="off" required id="firstName" name="first_name" type="text">
</div>
<div class="form-group col-sm-3 last-name-div">
    <label for="last_name" class="font-weight-bold">Last Name:</label><span
            class="text text-danger">*</span>
    <input class="form-control" autocomplete="off" required id="lastName" name="last_name" type="text">
</div>
<div class="form-group col-md-6 gender-div">
    <label for="gender" class="font-weight-bold">Gender:</label><span
            class="text text-danger">*</span> &nbsp;<br>
    <input checked="checked" name="gender" type="radio" value="0" id="gender"> Male &nbsp;
    <input name="gender" type="radio" value="1" id="gender"> Female
</div>
<div class="form-group col-md-3 password-div">
    <label for="password" class="font-weight-bold">Password:</label><span
            class="text text-danger">*</span>
    <input class="form-control" required min="6" max="10" id="password" name="password" type="password" value="">
</div>
<div class="form-group col-md-3 confirm-password-div">
    <label for="password_confirmation" class="font-weight-bold">Confirm Password:</label>
    <span
            class="text text-danger">*</span>
    <input class="form-control" required min="6" max="10" id="confirmPassword" name="password_confirmation" type="password" value="">
</div>


<div class="form-group col-sm-6">
    <label for="department_id" class="font-weight-bold">Doctor Department:</label>
    <span class="text text-danger">*</span>
    <select class="form-control" id="departmentId" required name="department_id"><option selected="selected" value="">Select Department</option><option value="1">Cardiologists</option><option value="2">Endocrinologists</option><option value="3">Allergists</option><option value="4">Dermatologists</option><option value="5">Ophthalmologists</option><option value="6">Nephrologists</option></select>
</div>
<div class="form-group col-sm-6">
    <label for="doctor_id" class="font-weight-bold">Doctor:</label><span
            class="text text-danger">*</span>
    <select class="form-control" autocomplete="off" id="doctorId" required name="doctor_id"><option selected="selected" value="">Select Doctor</option></select>
</div>
<div class="form-group col-sm-6">
    <label for="opd_date" class="font-weight-bold">Date:</label><span
            class="text text-danger">*</span>
    <input class="form-control" autocomplete="off" id="opdDate" required name="opd_date" type="text">
</div>
<div class="form-group col-sm-12">
    <label for="problem" class="font-weight-bold">Description:</label>
    <textarea class="form-control" autocomplete="off" rows="3" name="problem" cols="50" id="problem"></textarea>
</div>
<div align="left" class="form-group col-sm-12">
    <div class="doctor-schedule" style="display: none">
        <i class="fas fa-calendar-alt"></i>
        <span class="day-name"></span>
        <span class="schedule-time"></span>
    </div>
    <strong class="error-message" style="display: none"></strong>
    <div class="slot-heading">
        <strong class="available-slot-heading" style="display: none">Available:</strong>
    </div>
    <div class="row">
        <div class="available-slot form-group col-sm-10">
        </div>
    </div>
    <div class="color-information" align="right" style="display: none">
        <span><i class="fa fa-circle fa-xs" aria-hidden="true"> </i> Not Available</span>
    </div>
</div>
<div class="form-group col-sm-6 pl-3">
    <input class="btn btn-primary btn-flat send-enquiry-btn" id="btnSave" type="submit" value="Save">
</div>
</div>
            </form>
        </div>
    




</script>
</div>
@endsection