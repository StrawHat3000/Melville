@extends('layouts.app')


@section('content')

      <div class="card">

        <div class="card-header">

      <div class="card-body">
        <table class="table table-hover">

          <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Restore</th>
            <th>Destroy</th>
          </thead>

          <tbody>

             @foreach ($posts as $post)

               <tr>
                   <td>
                      <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                   </td>

                   <td>
                     {{ $post->title }}
                   </td>



                  <td>
                    <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-sm btn-outline-success">Restore</a>
                  </td>

                  <td>
                    <a href=" {{  route('post.kill', ['id' => $post->id]) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                  </td>

               </tr>

             @endforeach
          </tbody>

        </table>
      </div>


        </div>

      </div>


@endsection