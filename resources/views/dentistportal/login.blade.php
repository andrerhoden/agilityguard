@extends('layouts.dentistportal.main')
@section('content')

<section class="white-bg">
        <div class="container">

            <div class="row">
                <div class="col text-center">
            
                    <p>
                    Please use the form below to log into Agility Guard's Dentist Portal
                    </p>

                </div>
            </div>
            <div class="row justify-content-sm-center">
                <div class="col-sm-8 col-md-6">
                
                    <form id="log_in" action="/dentist-portal/login/execute" method="post" class="cf" >	{{ csrf_field() }}

                        <div class="form-group">
                            <label for="Email">Email Address *</label>
                            <input type="email" class="form-control" id="Email" name="Email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <label for="strPassword">Password</label>
                            <input type="password" class="form-control" id="strPassword" name="strPassword" autocomplete="off" />
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="col-sm-8 text-right">
                                <p class="small">
                                    Forgot your password?
                                    <a data-toggle="collapse" href="#collapseResetPassword" role="button" aria-expanded="false" aria-controls="collapseResetPassword">
                                        Reset Password
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                    <div class="collapse" id="collapseResetPassword">
                         
                        <p>Please enter in your email information below. We will send you an email to reset your password.</p>

                        <form id="resetPassword" action="#" method="get">
                            <div class="form-group">
                                <label for="resetEmail">Email *</label>
                                <input type="email" class="form-control" name="resetEmail" id="resetEmail" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label for="resetEmail2">Confirm *</label>
                                <input type="email" class="form-control" name="resetEmail2" id="resetEmail2" autocomplete="off" />
                            </div>
                            <button type="submit" class="btn btn-primary">Reset</button>
                        </form>
                    </div>

                </div>
            </div>
       
            <br /><br /><br /><br /><br />
        </div>
     
      </section>
<!--
<section class="white-bg">
      <div class="container text-center">
        <div class="row">
          <div class="col">
              <div class="prefix">login</div>
              <h2 class="line">Index</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
                  <p>
                  
                  <form id="log_in" action="/dentist-portal/login/execute" method="post" class="cf" >	{{ csrf_field() }}
		<fieldset style="border:0; width:600px; margin:auto;" class="cf">


        <table width="100%" align="center"> 
        	<tr>
            	<td>
                	<table width="100%" cellpadding="0" cellspacing="2">
                    	<tr>
        			    	<td align="left" colspan="5">Please use the form below to log into Agility Guard's Dentist Portal</td>
            			</tr> 
                    	<tr>
                        	<td align="left" valign="top" width="40%">
                            	<p>
									<label for="Email">*Email</label><br />
									<input type="text" class="required Email" name="Email" value="" id="Email">
								</p>

                            </td>
                            <td width="4%">&nbsp;</td>
                            <td valign="top" width="40%" align="left">
                            	<p>
									<label for="strPassword">*Password</label><br />
									<input type="password" class="required strPassword" name="strPassword" value="" id="strPassword">
								</p>
                            </td>
                            <td width="4%">&nbsp;</td>
                            <td valign="top" align="right"> 
                            	<p>
                            	<input type="submit" value="Login" class="sub" />
                                </p>
                            </td>                           
                    	</tr>
                    </table>
                </td>
            </tr>
            </table>
            </fieldset>

                        </form>

                    </p>
              </div>
          
          </div>
      </div>

      Login
      
    </section>  
  


-->

@endsection