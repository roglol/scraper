<div class="card" >
    <div class="card-header">
    <button type="button" style="display:block;margin-left:auto;background:none;border:none;outline:none" data-toggle="modal" data-target="#addwebsite">
        <i class="fas fa-plus-circle" style="font-size:20px;"></i>
     </button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-striped">
        <thead>
            <tr>
                <th >
                    #
                </th>
                <th style="width:30%;">
                     Name
                </th>
                <th style="width:40%;">
                     Domain
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach($websites as $website)
            <tr>
                <td>
                    #
                </td>
               
              <td>{{$website->name}}</td>
              <td><a href={{$website->domain}} target="_blank">{{$website->domain}}</a></td>
        
                <td class="project-actions">
                    <a class="btn btn-primary btn-sm" href="/admin/websites/{{$website->id}}/articles">
                        <i class="fas fa-folder">
                        </i>
                        Articles
                    </a>
                    <a class="btn btn-info btn-sm edit" href="javascript:void(0);" data-id={{$website->id}}>
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm delete" href="javascript:void(0);" data-id={{$website->id}} data-name={{$website->name}}>
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
      {{-- @yield('modal') --}}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->