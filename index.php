<?php include('common/header.php'); ?>

<div class="container">
  <div class="card mt-2">
    <div class="card-header">
      <h2 class="card-title text-success">
        <center>
          <img src="assets/img/logo.png" class="img-fluid" height="100" width="100"><br>
          <strong>ONLINE SEMINAR SERIES</strong><br>
          <h3>REGISTRATION FORM</h3>
        </center>
      </h2>
    </div>
    <!-- <form action="process/register.php" method="POST" enctype="multipart/form-data"> -->
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
            <input type="text" class="form-control-plaintext text-center border-0" name="seminarTitle" id="seminarTitle" value="Postharvest quality, safety, and nutritional attributes of organically grown vegetables" readonly>
          </div>
        </div>
      </div>
      <hr>
      <ul class="nav nav-tabs" id="infoTab">
        <li class="nav-item">
            <a href="#home" class="nav-link active" data-bs-toggle="tab">Basic Information</a>
        </li>
        <li class="nav-item">
            <a href="#farmer" class="nav-link" data-bs-toggle="tab">Others</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
          <div class="row g-3 needs-validation mt-1" novalidate>
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
              <label for="gender" class="form-label">Sex <span class="text-danger">*</span></label>
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
                <option value="19 years old & below">19 years old & below</option>
                <option value="20-29 years old">20-29 years old</option>
                <option value="30-39 years old">30-39 years old</option>
                <option value="40-49 years old">40-49 years old</option>
                <option value="50-59 years old">50-59 years old</option>
                <option value="60 years old & older">60 years old & older</option>
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
          </div>
        </div>
        <div class="tab-pane fade" id="farmer">
          <div class="row g-3 needs-validation mt-1" novalidate>
            <div class="col-md-5">
              <label for="farmerCoop" class="form-label">Member of a farmer or fisherfolk cooperative? <span class="text-danger">*</span></label>
              <select class="form-select" id="farmerCoop" required>
                <option selected disabled value="">Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <!-- <div class="invalid-feedback">
                Please select a valid state.
              </div> -->
            </div>
            <div class="col-md-7">
              <label for="coopName" class="form-label">Name of the farmer or fisherfolk cooperative that you are in? <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="coopName">
              <!-- <div class="valid-feedback">
                Looks good!
              </div> -->
            </div>
            <div class="col-md-5">
              <label for="farmerAssoc" class="form-label">Member of farmer or fisherfolk association? <span class="text-danger">*</span></label>
              <select class="form-select" id="farmerAssoc" required>
                <option selected disabled value="">Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <!-- <div class="invalid-feedback">
                Please select a valid state.
              </div> -->
            </div>
            <div class="col-md-7">
              <label for="assocName" class="form-label">Name of the farmer or fisherfolk association that you are in? <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="assocName">
              <!-- <div class="valid-feedback">
                Looks good!
              </div> -->
            </div>
            <div class="col-md-5">
              <label for="RIC" class="form-label">Member of RIC (Rural Improvement Club)? <span class="text-danger">*</span></label>
              <select class="form-select" id="RIC" required>
                <option selected disabled value="">Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <!-- <div class="invalid-feedback">
                Please select a valid state.
              </div> -->
            </div>
            <div class="col-md-7">
              <label for="RICName" class="form-label">Name of the RIC (Rural Improvement Club) that you are in? <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="RICName">
              <!-- <div class="valid-feedback">
                Looks good!
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="row g-1">
        <!-- <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div> -->
        <div class="col-12">
          <button class="btn btn-primary btn-md" onclick="submitThis()"><i class="fa-solid fa-check"></i> Submit</button>
        </div>
      </div>
    </div>
    <!-- </form> -->
  </div>
</div>

<script type="text/javascript">
  function submitThis(){
    // Seminar Title
    var title = document.getElementById("seminarTitle").value;

    // Basic Information
    var fName = document.getElementById("firstName").value;
    var mName = document.getElementById("middleName").value;
    var lName = document.getElementById("lastName").value;
    var sex = document.getElementById("gender").value;
    var ageGroup = document.getElementById("age").value;
    var email = document.getElementById("emailAdd").value;
    var loc = document.getElementById("location").value;
    var work = document.getElementById("occupation").value;
    var workplace = document.getElementById("agency").value;
    var memberIP = document.getElementById("ipSelect").value;
    var pwde = document.getElementById("pwd").value;
    
    // Other Information
    var fCoop = document.getElementById("farmerCoop").value;
    var cpName = document.getElementById("coopName").value;
    var fAssoc = document.getElementById("farmerAssoc").value;
    var aName = document.getElementById("assocName").value;
    var fRIC = document.getElementById("RIC").value;
    var rName = document.getElementById("RICName").value;

    alert(title+fName + mName + lName + sex + ageGroup+email+loc+work+workplace+memberIP+pwde+fCoop+cpName+fAssoc+aName+fRIC+rName);
    $.ajax({
      url: 'process/register.php',
      type: 'post',
      data: {
        stitle:title,
        sFName:fName,
        sMName:mName,
        sLName:lName,
        sSex:sex,
        sAgeGroup:ageGroup,
        sEmail:email,
        sLoc:loc,
        sWork:work,
        sWorkplace:workplace,
        sMemberIP:memberIP,
        sPwde:pwde,
        sFCoop:fCoop,
        sCpName:cpName,
        sFAssoc:fAssoc,
        sAName:aName,
        sFRIC:fRIC,
        sRName:rName
      },
      dataType: "json",
      success:function(response){
        if(response == "submitted"){
          alert("Information Saved!");
          // history.go(0);
        }
      }
    });
  }
</script>

<?php include('common/footer.php'); ?>