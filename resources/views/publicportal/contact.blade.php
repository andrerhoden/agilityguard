@extends('layouts.publicportal.main')
@section('content')

<section class="white-bg">
      <div class="container text-center">
        <div class="row">
          <div class="col">
              <div class="prefix">Contact Us</div>
              <h2 class="line">Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
                  <p>
                      
                      
                    </p>
              </div>
          
          </div>
      </div>
      





            <form action="contact/" method="post" onsubmit="return checkform(this);">

            Your name: <input type="text" id="name" name="name" size="30" /></span>

            Email address: <input type="text" id="email" name="email" size="30" />

            Subject: <input type="text" id="subject" name="subject" size="30" />


            Please enter your comments below.  
            <textarea name="comments" rows="10" cols="50"></textarea>

            <input type="submit" name="s" value="Submit" />

            </form>







    </section>  
  
@endsection