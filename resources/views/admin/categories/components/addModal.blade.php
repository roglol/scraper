<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" >New Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  method='post' action='/admin/categories'>
                @csrf 
                <div class="form-group">
                    <label for='name'>Name</label>
                    <input type="text" class="form-control" autocomplete="off"  name ='name' id='name' placeholder='Name'>
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