@extends('layouts.publicportal.main')
@section('content')

<section class="masthead white-bg">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>
</section>
<section class="white-bg">
      <div class="container text-center">

        <div class="form-row row justify-content-md-center">
            <div class="col col-lg-8">


                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(session()->has('warning'))
                    <div class="alert alert-danger">
                        {{ session()->get('warning') }}
                    </div>
                @endif

                <form id="contact-form" action="contact-us/save" method="post" onsubmit="return checkform(this);">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <div class="form-group">
                        <div class="row text-left">
                            <div class="col">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" size="30" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row text-left">
                            <div class="col">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row text-left">
                            <div class="col">
                                <label for="email">Your Interest</label>
                                <select name="interest">
                                    <option></option>
                                    <option>Athlete</option>
                                    <option>Dentist</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row text-left">
                            <div class="col">
                                <label for="comments">Comments</label>
                                <textarea id="comments" name="comments" rows="10" class="form-control" cols="50" placeholder="Please enter your comments below." required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row text-center">
                            <div class="col">
                                <input type="submit" name="s" value="Submit" />
                            </div>
                        </div>
                    </div>
                    
                </form>

            </div>
        </div>
      </div>
      


    </section>  
  
@endsection