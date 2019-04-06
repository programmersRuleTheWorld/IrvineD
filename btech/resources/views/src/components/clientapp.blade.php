<form class="col-lg-10 m-auto bg-warning" method="POST" action="/">
@csrf
<div class="alert alert-warning text-center" role="alert">
  <small>
  Client Application
  </small>
  </div>
  <div class="row">
<div class="form-group col-sm text-dark">
<label for="First name">First Name</label>
<input type="text" name="firstname" class="form-control" id="firstname" maxlength="255" aria-describedby="firstname" placeholder="First name" value="{{ old('firstname') }}">
@if($errors->any())
    @foreach($errors->get('firstname') as $error)
      <div class="alert alert-danger text-dark">{{ $error }}</div>
    @endforeach
@endif
</div>
<div class="form-group col-sm text-dark">
<label for="Last name">Last Name</label>
<input type="text" name="lastname" class="form-control" id="lastname" maxlength="255" aria-describedby="lastname" placeholder="Last name" value="{{ old('lastname') }}">
@if($errors->any())
    @foreach($errors->get('lastname') as $error)
      <div class="alert alert-danger text-dark">{{ $error }}</div>
    @endforeach
@endif
</div>
</div>
  <div class="row">
<div class="form-group col-sm text-dark">
<label for="email">Email address</label>
<input type="email" name="email" class="form-control" id="email" maxlength="255" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
@if($errors->any())
    @foreach($errors->get('email') as $error)
      <div class="alert alert-danger text-dark">{{ $error }}</div>
    @endforeach
@endif
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group text-dark">
<label for="phone">Phone Number</label>
<input type="phone" name="cellnum" id="UserMobile" maxlength="10" maxlength="255" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" data-fv-notempty-message="This field cannot be left blank." placeholder="Mobile No. " class="form-control" data-fv-field="data[User][mobile] value="{{ old('cellnum') }}"">
@if($errors->any())
    @foreach($errors->get('cellnum') as $error)
      <div class="alert alert-danger text-dark">{{ $error }}</div>
    @endforeach
@endif
<label for="select">Type of Project</label>
<select class="form-control" name="projtype">
  <option value="Web Development">Web Development</option>
  <option value="Website Repair">Website Repair</option>
  <option value="Mobile App Development">Mobile App Development</option>
  <option value="Security Testing">Security Testing</option>
  <option value="Custom Proposal">Custom Proposal</option>

</select>
</div>
@if($errors->any())
    @foreach($errors->get('projtype') as $error)
      <div class="alert alert-danger text-dark">{{ $error }}</div>
    @endforeach
@endif
</div>
<div class="form-group col-sm text-dark">
  <label for="formControlTextarea">Description of your project (Max length 1000 characters)</label>
  <textarea name="description" class="form-control" id="formControlTextarea" rows="5" maxlength="1000" placeholder="What are the goals of your project?
Is this a personal, or commercial site?
What is your timeframe for completing this project?
What have been the biggest challenges you've run into with other developers?
Do you require services not described in our brochure?">{{ old('description') }}</textarea>
@if($errors->any())
    @foreach($errors->get('description') as $error)
      <div class="alert alert-danger text-dark">{{ $error }}</div>
    @endforeach
@endif
</div>
</div>

<button type="submit" class="btn btn-warning m-3">Submit</button>
</form>
