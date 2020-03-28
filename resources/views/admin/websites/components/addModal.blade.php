<div class="modal fade" id="addwebsite" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" >New Website</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  method='post' action='/admin/websites'>
                @csrf 
                <div class="form-group">
                    <label for='name'>Name</label>
                    <input type="text" class="form-control" autocomplete="off"  name ='name' id='name' placeholder='Name'>
                  </div>
                  <div class="form-group">
                    <label for='domain'>Domain</label>
                    <input type="text" class="form-control" autocomplete="off"  name ='domain' id='domain' placeholder='Domain'>
                  </div>
                  <div class="form-group">
                    <label>Multiple</label>
                    <select class="select2" multiple="multiple" name ="categories[]" data-placeholder="Select a State" style="width: 100%;">
                      @foreach ($categories as $category)
                      <option 
                      value="{{$category->id}}">
                      {{$category->name}}
                      </option>
                      @endforeach
                    </select>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancell</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>