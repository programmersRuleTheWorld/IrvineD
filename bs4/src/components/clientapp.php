<form class="col-auto bg-cyan">

  <div class="alert alert-warning text-center" role="alert">
  <small>
  Need a website or mobile app created, repaired or tested? Fill out the form below and let us know how we can help you!
  </small>
  </div>

  <div class="row">
    <div class="col">
  </div>
  </div>
  <div class="row">
<div class="form-group col-sm text-dark">
<label for="First name">First Name</label>
<input type="text" class="form-control" id="firstname" aria-describedby="firstname" placeholder="First name">
</div>
<div class="form-group col-sm text-dark">
<label for="Last name">Last Name</label>
<input type="text" class="form-control" id="lastname" aria-describedby="lastname" placeholder="Last name">
</div>
</div>
  <div class="row">
<div class="form-group col-sm text-dark">
<label for="email">Email address (this will be your new username)</label>
<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group col-sm text-dark">
<label for="exampleInputEmail1">Password</label>
<input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Enter password">
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group text-dark">
<label for="phone">Phone Number</label>
<input type="phone" id="UserMobile" maxlength="10" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="Mobile No. " class="form-control" name="data[User][mobile]" data-fv-field="data[User][mobile]">
<label for="select">Type of Project</label>
<select class="form-control">
  <option>Web Development</option>
  <option>Website Repair</option>
  <option>Mobile App Development</option>
  <option>Security Testing</option>
  <option>Custom Proposal</option>
</select>
</div>
</div>
<div class="form-group col-sm text-dark">
  <label for="formControlTextarea">Description of your project</label>
  <textarea class="form-control" id="formControlTextarea" rows="5" placeholder="What are the goals of your project?
Is this a personal, or commercial site?
What is your timeframe for completing this project?
What have been the biggest challenges you've run into with other developers?"></textarea>
</div>
</div>

<button type="submit" class="btn btn-warning m-3">Submit</button>
</form>
