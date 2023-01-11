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

<!-- CUSTOM JAVASCRIPTS -->
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

<!-- Script CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="assets/js/scripts.js"></script>

</body>
</html>