
<!-- /.card -->
  <div class="card" >
    <div class="card-header">
        <div class="col-sm-6">
        <form>
            <!-- select -->
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control" onchange="this.form.submit()" name="category">
                <option value="">All</option>
                @foreach ($categories as $category)        
              <option 
              @if($scraper == $category->id) selected  @endif
              value={{$category->id}}>
              {{$category->name}}</option>
                @endforeach
              </select>
            </div>
        </form>
          </div>
          <div class="col-sm-6">
          <form method="post" action="/admin/websites/{{$websiteId}}/scraper?category={{$scraper}}&website={{$websiteId}}">
            @csrf
            @if ($scraper)
                <button type="submit" class="btn btn-success">Scrape Articles</button>
                @endif
              </form>
          </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if($type) 
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
      @else
      <p>There is no scraper for this category!!</p>
      @endif
      {{-- @yield('modal') --}}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->