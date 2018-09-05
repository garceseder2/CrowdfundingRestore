@extends('head.admin')
   @section('contend')

<div class="container">
    <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Tag</th>
          </tr>
        </thead>

        <tbody>
            @foreach($tags as $tag)
          <tr>
            <td>{{ $tag->id }}</td>
            <td>{{ $tag->label }}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
</div>
  


   @endsection