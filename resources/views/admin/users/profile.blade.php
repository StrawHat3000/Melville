@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')

  <div class="card">

    <div class="card-header">

      <i>Edit Your Profile</i>

    </div>

    <div class="card-body">

        <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
          <div class="form-group">
              <label for="name">Username</label>
              <input type="text" name="name" value="{{ $user->name }}" class="form-control">
          </div>

          <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="email" value="{{ $user->email }}"class="form-control">
          </div>

          <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" name="password" class="form-control" >
          </div>

          <div class="form-group">
            <label for="avatar">Upload new Avatar</label>
            <input type="file" name="avatar" class="form-control">
          </div>

          <div class="form-group">
            <label for="facebook">Facebook Profile</label>
            <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
          </div>

          <div class="form-group">
             <label for="name">Instagram Profile</label>
             <input type="text" name="instagram" value="{{ $user->profile->instagram }}" class="form-control">
           </div>

           <div class="form-group">
              <label for="about">About You</label>
              <textarea name="about" id="about" cols="6" row="6" class="form-control">{{ $user->profile->about }}</textarea>
           </div>


          <div class="form-group">
            <div class="text-center">
              <button class="btn btn-success" type="submit" >
                    Update Profile
              </button>
            </div>


          </div>






        </div>

        </form>


    </div>

  </div>

  @stop
