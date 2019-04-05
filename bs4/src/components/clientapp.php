<form class="col-lg-9 m-auto bg-warning">
<div class="alert alert-warning text-center" role="alert">
  <small>
  Client Application
  </small>
  </div>
  <div class="row">
<div class="form-group col-sm text-dark">
<label for="First name">First Name</label>
<input type="text" class="form-control" id="firstname" maxlength="255" aria-describedby="firstname" placeholder="First name">
</div>
<div class="form-group col-sm text-dark">
<label for="Last name">Last Name</label>
<input type="text" class="form-control" id="lastname" maxlength="255" aria-describedby="lastname" placeholder="Last name">
</div>
</div>
  <div class="row">
<div class="form-group col-sm text-dark">
<label for="email">Email address</label>
<input type="email" class="form-control" id="email" maxlength="255" aria-describedby="emailHelp" placeholder="Enter email">
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group text-dark">
<label for="phone">Phone Number</label>
<input type="phone" id="UserMobile" maxlength="10" maxlength="255" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="Mobile No. " class="form-control" name="data[User][mobile]" data-fv-field="data[User][mobile]">
<label for="select">Type of Project</label>
<select class="form-control" nama="projtype">
  <option value="1">Web Development</option>
  <option value="2">Website Repair</option>
  <option value="3">Mobile App Development</option>
  <option value="4">Security Testing</option>
  <option value="5">Custom Proposal</option>
</select>
</div>
</div>
<div class="form-group col-sm text-dark">
  <label for="formControlTextarea">Description of your project (Max length 1000 characters)</label>
  <textarea class="form-control" id="formControlTextarea" rows="5" maxlength="1000" placeholder="What are the goals of your project?
Is this a personal, or commercial site?
What is your timeframe for completing this project?
What have been the biggest challenges you've run into with other developers?"></textarea>
</div>
</div>

<button type="submit" class="btn btn-warning m-3">Submit</button>
</form>
