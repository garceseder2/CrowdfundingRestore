@extends('head.admin')
   @section('contend')
 <div class="container">
     <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Category</th>
          </tr>
        </thead>

        <tbody>
            @foreach($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
</div> 


   @endsection