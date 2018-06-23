<style>
    label[for='referrer_source'] {display:none;}
</style>
<form id="registrationForm" class="form-horizontal material" method="POST"
      action="{{ route('register') }}" novalidate>
    {{ csrf_field() }}

    <div class="row m-b-10">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <input id="name" type="text" name="name"
                   value="{{ old('name') }}" required autofocus
                   placeholder="Full Name">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <input id="phone" type="text" name="phone"
                   required placeholder="Phone">
        </div>
    </div>
    <div class="row m-b-10">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <input id="email" type="email" name="email"
                   value="{{ old('email') }}"
                   placeholder="Email Address">
        </div>
        <div class="col-md-6">
            <input id="address" type="text" name="address"
                   required placeholder="Address">
        </div>
    </div>

    <div class="row m-b-10">
        <div class="col-md-6">
            <input id="password" type="password" name="password"
                   required placeholder="Password">
        </div>
        <div class="col-md-6">
            <input id="password-confirm" type="password"
                   name="password_confirmation" required
                   placeholder="Confirm Password">
        </div>
    </div>

    <div class="row m-b-10">
        <div class="col-md-12">
            <label>How did you know about us?</label>

            <input type="radio" id="referrer1" name="referrer"
                   value="FB Ad Campaign" placeholder="Facebook Ad" required onchange="showAdditionalField();"/>
            <input type="radio" name="referrer" value="Google search"
                   placeholder="Google Search" onchange="showAdditionalField();"/>
            <input type="radio" name="referrer" value="refered"
                   placeholder="Friends/Relatives" onchange="showAdditionalField();" />
            <input type="radio" name="referrer" value="Others"
                   placeholder="Others" onchange="showAdditionalField();"/>

            <input type="text" name="referrer_source" class="referrer_source" style="display: none;" placeholder="Specify..." />

        </div>

        <div class="col-md-12">
            <input type="checkbox" class="checkbox" name="accept_terms"
                   value="1"
                   placeholder="Accept <a href='/terms' target='_blank'>Terms & Conditions</a>" required/>
        </div>

        {{--<div class="col-md-6">
            <input id="house-no" type="text"
                   name="house_no" required
                   placeholder="House No.">
        </div>--}}

    </div>


    <div class="row m-b-10">
        <div class="col-md-12">

            <!-- Ajax errors -->
            <div class="alert alert-danger hide registration-form-error">
                <ul></ul>
            </div>
            <div class="alert alert-success hide registration-form-success">

            </div>

            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
</form>
