@extends('layouts.dentistportal.main')
@section('content')

<section class="masthead white-bg">
    <div class="container">
    <div class="row">
        <div class="col">
        <h1>Lab Orders</h1>
        </div>
    </div>
    </div>
</section>



<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col">
            <nav class="portal-menu">
                <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                <a class="nav-link"  href="/dentist-portal/account">Account Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dentist-portal/create-order">Create Lab Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/dentist-portal/orders">Lab Orders</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#">Change Password</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="/dentist-portal/logout">Logout</a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</section>


<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col">
                <table id="dtLabOrders" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th class="th-sm">Lab Number
                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                            </th>
                            <th class="th-sm">Date Submitted
                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                            </th>
                            <th class="th-sm">Customer Name
                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                            </th>
                            <th class="th-sm">Status
                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>425654</td>
                            <td>October 23 2018</td>
                            <td>Tiger Nixon</td>
                            <td>Active</td>
                            </tr>
                            <tr>
                            <td>1236</td>
                            <td>October 3 2018</td>
                            <td>Garrett Winters</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>25846</td>
                            <td>June 4 2018</td>
                            <td>Ashton Cox</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>985674</td>
                            <td>August 28 2018</td>
                            <td>Cedric Kelly</td>
                            <td>Active</td>
                            </tr>
                            <tr>
                            <td>252461</td>
                            <td>January 11 2018</td>
                            <td>Airi Satou</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>963457</td>
                            <td>January 11 2018</td>
                            <td>Brielle Williamson</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>86456</td>
                            <td>January 11 2018</td>
                            <td>Herrod Chandler</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>56786</td>
                            <td>January 11 2018</td>
                            <td>Rhona Davidson</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>789245</td>
                            <td>January 11 2018</td>
                            <td>Colleen Hurst</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>47836852</td>
                            <td>January 11 2018</td>
                            <td>Sonya Frost</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>27863782</td>
                            <td>January 11 2018</td>
                            <td>Jena Gaines</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>86386</td>
                            <td>January 11 2018</td>
                            <td>Quinn Flynn</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>5786</td>
                            <td>January 11 2018</td>
                            <td>Charde Marshall</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>667856</td>
                            <td>January 11 2018</td>
                            <td>Haley Kennedy</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>8685857</td>
                            <td>January 11 2018</td>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>66868</td>
                            <td>January 11 2018</td>
                            <td>Michael Silva</td>
                            <td>Complete</td>
                            </tr>
                            <tr>
                            <td>352437</td>
                            <td>March 11 2018</td>
                            <td>Paul Byrd</td>
                            <td>Completed</td>
                            </tr>
                            <tr>
                            <td>1245337</td>
                            <td>January 11 2018</td>
                            <td>Gloria Little</td>
                            <td>Completed</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Lab Number
                            </th>
                            <th>Date Submitted
                            </th>
                            <th>Customer Name
                            </th>
                            <th>Status
                            </th>
                            </tr>
                        </tfoot>
                </table> 
            </div>
        </div>
    </div>
</section>
  
@endsection