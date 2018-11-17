@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')

  <div class="card">

    <div class="card-header">

      <i>Edit Site Settings</i>

    </div>

    <div class="card-body">

        <form action="{{ route('settings.update') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" value="{{  $settings->address }}">
                </div>

          <div class="form-group">
              <label for="contact_number">Contact Number</label>
              <input type="text" name="contact_number" value="{{  $settings->contact_number }}" class="form-control">
          </div>

          <div class="form-group">
              <label for="contact_number">Contact Email</label>
              <input type="email" name="contact_email" value="{{  $settings->contact_email }}" class="form-control">
          </div>




          <div class="form-group">
            <div class="text-center">
              <button class="btn btn-success" type="submit" >
                    Update Settings
              </button>
            </div>


          </div>






        </div>

        </form>


    </div>

  </div>

  @stop
