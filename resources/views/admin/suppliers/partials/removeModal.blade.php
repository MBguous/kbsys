<div class="modal fade bs-example-modal-sm" id="delete">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">
	        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
	      </button>
	    </div>
	    <div class="modal-body">
	      <p>Are you sure want to delete the supplier's record?</p>
	    </div>
	    <div class="modal-footer">
	      {!! Form::open(array('route' => array('admin.suppliers.destroy', $supplier->id), 'method' => 'DELETE')) !!}
	        <button type="submit" class="btn btn-primary">Yes</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
	      {!! Form::close() !!}
	    </div>
	  </div>
	</div>
</div>