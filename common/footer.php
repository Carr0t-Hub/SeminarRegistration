<!-- Script CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<script src='https://unpkg.com/@popperjs/core@2'></script>
<script src="assets/js/scripts.js"></script>


<script type="text/javascript">
  var myModal = document.getElementById('logoutModal')
  var myInput = document.getElementById('logoutBtnModal')

  myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()
  })
</script>

<form method="POST" action="process/logout.php">
  <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h6 class="modal-title" id="logoutModalLabel"><strong class="text-white"> Ready to Leave?</strong></h6>
        </div>
        <div class="modal-body text-dark"><i class="fas fa-sign-out-alt"></i> This will end your current session.</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm fw-bold btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" name="logout" id="logoutBtnModal" class="btn btn-sm fw-bold btn-danger shadow-none"><i class="fas fa-sign-out-alt"></i> Logout!</button>
        </div>
      </div>
    </div>
  </div>
</form>


<div class="modal fade" id="privacyContents" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="privacyContentsLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <center>
              <img src="assets/img/guidelines.png" class="img-fluid">
            </center>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#consent"><i class="fa-solid fa-check"></i> I Understand</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="consent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="consentLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="consentLabel">Privacy Consent</h1>
      </div>
      <div class="modal-body">
        <p>By accepting this Data Privacy Statement, I consent to the collection, processing, storage and retention of my personal data by DA-BAR for the purpose(s) mentioned in this document, in accordance with Republic Act 10173 or the Data Privacy Act of 2012, including its Implementing Rules and Regulations, as well as all other guidelines and issuances by the National Privacy Commission.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="fa-solid fa-thumbs-up"></i> I Agree</button>
        <button type="button" class="btn btn-danger" onclick="window.location.reload();"><i class="fa-solid fa-thumbs-down"></i> I Disagree</button>
      </div>
    </div>
  </div>
</div>

  
<div class="modal fade" id="confirmRegistration" tabindex="-1" role="dialog" aria-labelledby="confirmRegistrationLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h6 class="modal-title" id="confirmRegistrationLabel"><strong class="text-white"> Success Registration</strong></h6>
      </div>
      <div class="modal-body text-dark">This information is being saved!</div>
      <div class="modal-footer">
        <button type="submit" name="logout" id="logoutBtnModal" class="btn btn-success btn-md" data-bs-dismiss="modal"><i class="fas fa-sign-out-alt"></i> Confirm!</button>
      </div>
    </div>
  </div>
</div>

<!-- CUSTOM JAVASCRIPTS -->
<script type="text/javascript">
  function confirmRegistration() {
    $('#confirmRegistration').modal('show');
  }
</script>



<script type="text/javascript">
    window.onload = function () {
        OpenPrivacyContentsPopup();
    };
    function OpenPrivacyContentsPopup() {
        // $("#privacyContents").modal('show');
    }
</script>

<script type="text/javascript">
  (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>

<script type="text/javascript">
  $(function() {
    $("#farmerCoop").change(function() {
      if ($(this).val() == "Yes") {
        $("#coopName").removeAttr("disabled");
        $("#coopName").val("");
      } else {
        $("#coopName").attr("disabled", "disabled");
        $("#coopName").val("N/A");
      }
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    $("#farmerAssoc").change(function() {
      if ($(this).val() == "Yes") {
        $("#assocName").removeAttr("disabled");
        $("#assocName").val("");
      } else {
        $("#assocName").attr("disabled", "disabled");
        $("#assocName").val("N/A");
      }
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    $("#RIC").change(function() {
      if ($(this).val() == "Yes") {
        $("#RICName").removeAttr("disabled");
        $("#RICName").val("");
      } else {
        $("#RICName").attr("disabled", "disabled");
        $("#RICName").val("N/A");
      }
    });
  });
</script>

</body>
</html>