@extends('layouts.backend')

@section('content')

   @include('admin.includes.errors')

   <div class="container-fluid">
     <div class="row">
       <!-- Basic Form-->
       <div class="col-lg-4">
       </div>

       <div class="col-lg-4">
         <div class="card">
           <div class="card-close">
             <div class="dropdown">
               <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
               <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
             </div>
           </div>
           <div class="card-header d-flex align-items-center">
             <h3 class="h4">Create A New User</h3>
           </div>
           <div class="card-body">
             <p>create new user with default privileges.</p>
             <form action="{{ route('user.store') }}" method="post">
                  {{ csrf_field() }}
               <div class="form-group">
                 <label class="form-control-label">User</label>
                 <input type="text" placeholder="User Name" name="name" class="form-control">
               </div>
               <div class="form-group">
                 <label class="form-control-label">Email</label>
                 <input type="email" placeholder="Email" name="email" class="form-control">
               </div>
               <div class="form-group">
                 <input type="submit" value="Submit" class="btn btn-btn-outline-success">
               </div>
             </form>
           </div>
         </div>
       </div>

     </div>
   </div>

  @stop
