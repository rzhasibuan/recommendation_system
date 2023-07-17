 {{-- start create modal --}}
 <div class="modal fade" tabindex="-1" role="dialog" id="createModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/dashboard/products" enctype="multipart/form-data" class="needs-validation" novalidate="">
          @csrf
          <div class="card-body">
              <div class="form-group ">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control"  value="{{ old('name') }}" required="">
                  <div class="invalid-feedback">
                    Please fill this form
                  </div>
                </div>
              {{-- <div class="form-group ">
                  <label>Description</label>
                  <input type="text" name="description" class="form-control"  value="{{ old('description') }}" required="">
                  <div class="invalid-feedback">
                    Please fill this form
                  </div>
                </div> --}}

                <div class="form-group">
                  <label>Description</label>
                  <textarea class="summernote-simple" name="description" >{{ old('description') }}</textarea>
                  <div class="invalid-feedback">
                    Please fill this form
                  </div>
                </div>
              <div class="form-group ">
                  <label>Image</label>
                  <input type="file" name="image" class="form-control"  value="{{ old('image') }}" >
                </div>
                
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>