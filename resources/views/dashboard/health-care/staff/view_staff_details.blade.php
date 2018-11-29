@extends('dashboard.layouts.layouts')

@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">User Profile</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">DashRock</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
     </ol>
   </div>
 <div class="col-sm-3">
   <div class="btn-group float-sm-right">
    <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <div class="dropdown-menu">
      <a href="javaScript:void();" class="dropdown-item">Action</a>
      <a href="javaScript:void();" class="dropdown-item">Another action</a>
      <a href="javaScript:void();" class="dropdown-item">Something else here</a>
      <div class="dropdown-divider"></div>
      <a href="javaScript:void();" class="dropdown-item">Separated link</a>
    </div>
  </div>
 </div>
 </div>
<!-- End Breadcrumb-->
  <div class="row">
    <div class="col-lg-4">
       <div class="profile-card-4">
        <div class="card">
          <div class="card-body text-center bg-primary rounded-top">
           <div class="user-box">
            <img src="{{URL::to('assets/images/avatars/avatar-1.png')}}" alt="user avatar"/>
          </div>
          <h5 class="mb-1 text-white">John Musama</h5>
          <h6 class="text-light">Doctor</h6>
         </div>
          <div class="card-body">
            <ul class="list-group shadow-none">
            <li class="list-group-item">
              <div class="list-icon">
                <i class="fa fa-phone-square"></i>
              </div>
              <div class="list-details">
                <span>08034522337</span>
                <small>Mobile Number</small>
              </div>
            </li>
            <li class="list-group-item">
              <div class="list-icon">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="list-details">
                <span>musamaj@gmail.com</span>
                <small>Email Address</small>
              </div>
            </li>
            <li class="list-group-item">
              <div class="list-icon">
                <i class="fa fa-globe"></i>
              </div>
              <div class="list-details">
                <span>Non</span>
                <small>Website Address</small>
              </div>
            </li>
            <li class="list-group-item">
              <div class="list-icon">
                <i class="fa fa-book"></i>
              </div>
              <div class="list-details">
                <span>Specialty</span>
                <small>Pregnancy/Gynecology</small>
              </div>
            </li>
            </ul>
            <div class="row text-center mt-4">
              <div class="col p-2">
               <h4 class="mb-1 line-height-5">4</h4>
                <small class="mb-0 font-weight-bold">Health Care Station</small>
               </div>
                <div class="col p-2">
                  <h4 class="mb-1 line-height-5">41</h4>
                 <small class="mb-0 font-weight-bold">Health Care Assignment</small>
                </div>
                <div class="col p-2">
                 <h4 class="mb-1 line-height-5">Total Appointments</h4>
                 <small class="mb-0 font-weight-bold">490</small>
                </div>
             </div>
           </div>
           <!-- <div class="card-footer text-center">
             <a href="javascript:void()" class="btn-social btn-facebook waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
             <a href="javascript:void()" class="btn-social btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
             <a href="javascript:void()" class="list-inline-item btn-social btn-behance waves-effect waves-light"><i class="fa fa-behance"></i></a>
             <a href="javascript:void()" class="list-inline-item btn-social btn-dribbble waves-effect waves-light"><i class="fa fa-dribbble"></i></a>
           </div> -->
         </div>
       </div>
    </div>
    <div class="col-lg-8">
       <div class="card">
        <div class="card-body">
        <ul class="nav nav-pills nav-pills-primary nav-justified">
            <li class="nav-item">
                <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
            </li>
            <li class="nav-item">
                <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">My Diagnose/ Test Operations</span></a>
            </li>
            <li class="nav-item">
                <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">My Payroll</span></a>
            </li>
        </ul>
        <div class="tab-content p-3">
            <div class="tab-pane active" id="profile">
                <h5 class="mb-3">User Profile</h5>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Specialties</h6>
                        <p>
                            Obstetrics & Gynecology<
                        </p>
                        <!-- <h6>Hobbies</h6>
                        <p>
                            Reading & Singing. I love the great outdoors.
                        </p> -->
                    </div>
                    <div class="col-md-6">
                        <h6>Interest</h6>
                        <a href="javascript:void();" class="badge badge-dark badge-pill">Obstetrics & Gynecology</a>
                        <a href="javascript:void();" class="badge badge-dark badge-pill">infertility</a>
                        <a href="javascript:void();" class="badge badge-dark badge-pill">multiple births</a>
                        <a href="javascript:void();" class="badge badge-dark badge-pill">triplets</a>
                        <a href="javascript:void();" class="badge badge-dark badge-pill">drawing</a>
                        <a href="javascript:void();" class="badge badge-dark badge-pill">painting</a>
                        <hr>
                        <!-- <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                        <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                        <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span> -->
                    </div>
                    <div class="col-md-12">
                        <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                        <table class="table table-hover table-striped">
                            <tbody>                                    
                                <tr>
                                    <td>
                                        <strong>Appointments</strong>Maryam's pregnancy test   <strong>`Completed`</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Appointment</strong> Engr Chike<strong>`Cancelled`</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Appoinmeent</strong> Miss Maryam's Ante-natal <strong>`pending`</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Prescription</strong> Mr Ogonna's drugs precription endorsment <strong>`Completed`</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Appointment</strong> Miss Chinoye Ante-natal <strong>`Completed`</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/row-->
            </div>
            <div class="tab-pane" id="messages">
                <div class="alert alert-info alert-dismissible" role="alert">
			   <button type="button" class="close" data-dismiss="alert">&times;</button>
			    <div class="alert-icon">
				 <i class="icon-info"></i>
			    </div>
			    <div class="alert-message">
			      <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
			    </div>
              </div>
                <table class="table table-hover table-striped">
                    <tbody>                                    
                        <tr>
                            <td>
                               <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                            </td>
                        </tr>
                    </tbody> 
                </table>
            </div>
            <div class="tab-pane" id="edit">
                <form>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">First name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="Mark">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="Jhonsan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="email" value="mark@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Website</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="url" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="" placeholder="Street">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-6">
                            <input class="form-control" type="text" value="" placeholder="City">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" type="text" value="" placeholder="State">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Username</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="jhonsanmark">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password" value="11111122333">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password" value="11111122333">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <input type="reset" class="btn btn-secondary" value="Cancel">
                            <input type="button" class="btn btn-primary" value="Save Changes">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  </div>
    
    </div>
@endsection