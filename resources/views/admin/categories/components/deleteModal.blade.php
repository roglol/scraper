<div class="modal fade" id="deletecategory" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
        <form  method="post">
            @csrf
          <p> </p>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Delete</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>