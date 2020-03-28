<div class="card" >
  <div class="card-header">
  </div>
  <!-- /.card-header -->
  <div class="card-body">
  
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Title</th>
          <th scope="col">Created At</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $article)
        <tr>
        <td><img src="{{$article->img}}" height="42" width="42"></td>
          <td> <a href={{$article->link}} target="_blank">{{$article->title}}</a></td>
          <td> {{$article->date}}</td>
        </tr>
    @endforeach

      </tbody>
    </table>
    <div class="row">
        <div class="col-12 text-center">
           {{$articles->appends(request()->except('page'))->links()}}
        </div>
    </div>

    {{-- @yield('modal') --}}
  </div>
  <!-- /.card-body -->
</div>