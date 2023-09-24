<nav class="navbar navbar-expand-sm bg-dark fixed-top navbar-dark" style="height: 100px;">
  <div class="container">
    <a style="font-weight: bold;" class="navbar-brand" href="<?php echo base_url(); ?>">
      The African Union
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
                    <a class="nav-link" href="#apropos">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#obligations">Obligations politiques et educations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#solutions">Solutions</a>
                </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Become a member</a>
        </li>
        <li class="nav-item" style="margin-left: 10px;">
          <a href="https://www.paypal.com/donate/?hosted_button_id=GJJZ5DL2JSR9S" class="btn btn-outline-warning" target="_blank">
            <i class="fab fa-paypal" style="font-size: 20px;"></i> Donate
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Become a member</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php echo form_open('signup', array('autocomplete' => 'off')) ?>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">First Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your first name" name="fn" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Middle Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your middle" name="mn" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Surname:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your surname" name="sn" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Address:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your address" name="address" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Street Number:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your street number" name="snumb" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">State or Province:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your state or province" name="sop" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Country:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your country" name="country" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Zip code or Postal code:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your zip code or postal code" name="zp" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Occupation:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your occupation" name="occupation" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Highest Educational Level:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your Highest Educational level" name="el" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Telephone Number:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your Telephone Number" name="tn" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Country Code:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your Country Code" name="cc" required>
        </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Local Number:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your Local Number" name="ln" required>
        </div>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Become a member</button>
        </form>
      </div>

    </div>
  </div>
</div>