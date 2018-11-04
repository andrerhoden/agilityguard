@extends('layouts.dentistportal.main')
@section('content')

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
                  <form id="log_in" action="/assets/services/DentistLogin/" method="post" class="cf" >	
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
  
@endsection