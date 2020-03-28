<div class="card" >
    <div class="card-header">
    <button type="button" style="display:block;margin-left:auto;background:none;border:none;outline:none" data-toggle="modal" data-target="#addcategory">
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
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
            <tr>
                <td>
                    #
                </td>
               
              <td>{{$category->name}}</td>
        
                <td class="project-actions">
                    <a class="btn btn-info btn-sm edit" href="javascript:void(0);" data-id={{$category->id}}>
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm delete" href="javascript:void(0);" data-id={{$category->id}} data-name={{$category->name}}>
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