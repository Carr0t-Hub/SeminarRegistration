<?php include('common/header.php'); ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2 class="card-title text-success">
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
          <div class="text-center">
            <h3>DA-BAR Online Seminar Series Registration Form</h3>
          </div>
        </div>
      </div>
      <hr>
      <div class="row mb-2">
        <div class="col-12">
          <div class="text-center">
            <span class="form-control-label"><strong><i>Postharvest quality, safety, and nutritional attributes of organically grown vegetables</i></strong></label>
          </div>
        </div>
      </div>
      <hr>
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="firstName" required>
          <!-- <div class="valid-feedback">
            Looks good!
          </div> -->
        </div>
        <div class="col-md-4">
          <label for="middleName" class="form-label">Middle Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="middleName" required>
          <!-- <div class="valid-feedback">
            Looks good!
          </div> -->
        </div>
        <div class="col-md-4">
          <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="lastName" required>
          <!-- <div class="valid-feedback">
            Looks good!
          </div> -->
        </div>
        <div class="col-md-3">
          <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
          <select class="form-select" id="gender" required>
            <option selected disabled value="">Choose...</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <!-- <div class="invalid-feedback">
            Please select a valid state.
          </div> -->
        </div>
        <div class="col-md-4">
          <label for="age" class="form-label">Age <span class="text-danger">*</span></label>
          <select class="form-select" id="age" required>
            <option selected disabled value="">Choose...</option>
            <option value="19 yrs old & below">19 yrs old & below</option>
            <option value="20-29 yrs old">20-29 yrs old</option>
            <option value="30-39 yrs old">30-39 yrs old</option>
            <option value="40-49 yrs old">40-49 yrs old</option>
            <option value="50-59 yrs old">50-59 yrs old</option>
            <option value="60 yrs old & older">60 yrs old & older</option>
          </select>
          <!-- <div class="invalid-feedback">
            Please select a valid state.
          </div> -->
        </div>
        <div class="col-md-5">
          <label for="emailAdd" class="form-label">Email Address <span class="text-danger">*</span></label>
          <input type="email" class="form-control" id="emailAdd" required>
          <!-- <div class="valid-feedback">
            Looks good!
          </div> -->
        </div>
        <div class="col-md-8">
          <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
          <select class="form-select" id="location" required>
            <option selected disabled value="">Choose...</option>
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
          <!-- <div class="invalid-feedback">
            Please select a valid state.
          </div> -->
        </div>
        <div class="col-md-4">
          <label for="occupation" class="form-label">Occupation <span class="text-danger">*</span></label>
          <select class="form-select" id="occupation" required>
            <option selected disabled value="">Choose...</option>
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
        </div>
        <div class="col-md-6">
          <label for="agency" class="form-label">Agency or Institution <span class="text-danger">*</span></label>
          <select class="form-select" id="agency" required>
            <option selected disabled value="">Choose...</option>
            <option value="DA (RFO, AA and Staff Bureaus)">DA (RFO, AA and Staff Bureaus)</option>
            <option value="Farmers or Fisherfolk Cooperatives or Associations">Farmers or Fisherfolk Cooperatives or Associations</option>
            <option value="NGA other than the DA">NGA other than the DA</option>
            <option value="LGU (Provincial, Municipal, and Brgy. Levels)">LGU (Provincial, Municipal, and Brgy. Levels)</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="ipSelect" class="form-label">Member of Indigenous Peoples? <span class="text-danger">*</span></label>
          <select class="form-select" id="ipSelect" required>
            <option selected disabled value="">Choose...</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <!-- <div class="invalid-feedback">
            Please select a valid state.
          </div> -->
        </div>
        <div class="col-md-3 mb-3">
          <label for="pwd" class="form-label">Person with disability? <span class="text-danger">*</span></label>
          <select class="form-select" id="pwd" required>
            <option selected disabled value="">Choose...</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <!-- <div class="invalid-feedback">
            Please select a valid state.
          </div> -->
        </div>
        <hr>
        <div class="col-md-6">
          <label for="farmerCoop" class="form-label">Are you a member of a farmer or fisherfolk cooperative? <span class="text-danger">*</span></label>
          <select class="form-select" id="farmerCoop" required>
            <option selected disabled value="">Choose...</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <!-- <div class="invalid-feedback">
            Please select a valid state.
          </div> -->
        </div>
        <div class="col-md-12">
          <label for="coopName" class="form-label">What is the name of the farmer or fisherfolk cooperative that you are a member of? <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="coopName" required>
          <!-- <div class="valid-feedback">
            Looks good!
          </div> -->
        </div>
        <div class="col-md-6">
          <label for="farmerAssoc" class="form-label">Are you a member of farmerAssoc or fisherfolk association? <span class="text-danger">*</span></label>
          <select class="form-select" id="farmer" required>
            <option selected disabled value="">Choose...</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
          <!-- <div class="invalid-feedback">
            Please select a valid state.
          </div> -->
        </div>

        <!-- Accept -->
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include('common/footer.php'); ?>