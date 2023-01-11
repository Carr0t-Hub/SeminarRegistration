<?php include('common/header.php'); ?>

<div class="container">
  <div class="card mt-2">
    <div class="card-header">
      <h2 class="card-title">
        <center>
          <img src="assets/img/logo.png" class="img-fluid" height="100" width="100"><br>
          <strong>ONLINE SEMINAR SERIES</strong><br>
          <h3>REGISTRATION FORM</h3>
        </center>
      </h2>
    </div>
    <div class="card-body">
      <div class="row mt-2">
        <div class="col-md-12">
          <div class="d-flex justify-content-center">
            <h3>DA-BAR Online Seminar Series Registration Form</h3>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-8">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="seminarTitle" value="Postharvest quality, safety, and nutritional attributes of organically grown vegetables" readonly>
            <label for="seminarTitle">Seminar Title <span class="text-danger">*</span></label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailAddress" placeholder="name@example.com">
            <label for="emailAddress">Email Address <span class="text-danger">*</span></label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="firstName" placeholder="First Name">
            <label for="firstName">First Name <span class="text-danger">*</span></label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="middleName" placeholder="Middle Name">
            <label for="middleName">Middle Name <span class="text-danger">*</span></label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="lastName" placeholder="Last Name">
            <label for="lastName">Last Name <span class="text-danger">*</span></label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-floating">
            <select class="form-select" id="sexSelect" aria-label="Sex Selection">
              <option readonly>-- Please Select --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <label for="sexSelect">Gender <span class="text-danger">*</span></label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-floating">
            <select class="form-select" id="sexSelect" aria-label="Sex Selection">
              <option readonly>-- Please Select --</option>
              <option value="19 yrs old & below">19 yrs old & below</option>
              <option value="20-29 yrs old">20-29 yrs old</option>
              <option value="30-39 yrs old">30-39 yrs old</option>
              <option value="40-49 yrs old">40-49 yrs old</option>
              <option value="50-59 yrs old">50-59 yrs old</option>
              <option value="60 yrs old & older">60 yrs old & older</option>
            </select>
            <label for="sexSelect">Age <span class="text-danger">*</span></label>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-floating">
            <select class="form-select" id="locationSelect" aria-label="Location Selection">
              <option readonly>-- Please Select --</option>
              <option value="Ilocos Region">Ilocos Region</option>
              <option value="Cagayan Valley">Cagayan Valley</option>
              <option value="Central Luzon">Central Luzon</option>
              <option value="CALABARZON">CALABARZON</option>
              <option value="MIMAROPA">MIMAROPA</option>
              <option value="Bicol Region">Bicol Region</option>
              <option value="Western Visayas">Western Visayas</option>
              <option value="Central Visayas">Central Visayas</option>
              <option value="Zamboanga Peninsula">Zamboanga Peninsula</option>
              <option value="Northern Mindanao">Northern Mindanao</option>
              <option value="Davao Region">Davao Region</option>
              <option value="SOCCSKSARGEN">SOCCSKSARGEN</option>
              <option value="CARAGA">CARAGA</option>
              <option value="National Capital Region">National Capital Region</option>
              <option value="Cordillera Administrative Region">Cordillera Administrative Region</option>
              <option value="Bangsamoro Autonomous Region in Muslim Mindanao">Bangsamoro Autonomous Region in Muslim Mindanao</option>
            </select>
            <label for="locationSelect">Location <span class="text-danger">*</span></label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating">
            <select class="form-select" id="occupationSelect" aria-label="Occupation Selection">
              <option readonly>-- Please Select --</option>
              <option value="Farmer or Fisherfolk">Farmer or Fisherfolk</option>
              <option value="Agripreneur">Agripreneur</option>
              <option value="Researcher">Researcher</option>
              <option value="Agriculturist">Agriculturist</option>
              <option value="Aquaculturist">Aquaculturist</option>
              <option value="Extension Worker">Extension Worker</option>
              <option value="Farmer Technician">Farmer Technician</option>
              <option value="Student">Student</option>
              <option value="Teacher / Professor">Teacher / Professor</option>
              <option value="Overseas Filipino Worker">Overseas Filipino Worker</option>
            </select>
            <label for="occupationSelect">Occupation <span class="text-danger">*</span></label>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="form-floating">
            <select class="form-select" id="agencySelect" aria-label="Agency Selection">
              <option readonly>-- Please Select --</option>
              <option value="Department of Agriculture (RFO, AA and Staff Bureaus)">Department of Agriculture (RFO, AA and Staff Bureaus)</option>
              <option value="Farmers or Fisherfolk Cooperatives or Associations">Farmers or Fisherfolk Cooperatives or Associations</option>
              <option value="National Government Agencies other than the Department of Agriculture">National Government Agencies other than the Department of Agriculture</option>
              <option value="Local Government Units (Provincial, Municipal, and Barangay Levels)">Local Government Units (Provincial, Municipal, and Barangay Levels)</option>
            </select>
            <label for="agencySelect">Agency or Institution <span class="text-danger">*</span></label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating">
            <select class="form-select" id="ipSelect" aria-label="IP Selection">
              <option readonly>-- Please Select --</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <label for="ipSelect">Member of Indigenous Peoples? <span class="text-danger">*</span></label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating">
            <select class="form-select" id="disableSelect" aria-label="PWD Selection">
              <option readonly>-- Please Select --</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <label for="disableSelect">Are you a person with disability? <span class="text-danger">*</span></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('common/footer.php'); ?>