<!-- Modal -->
<div class="modal fade" id="wet-stock-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('values.store') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Values</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{ route('values.store') }}" method="post">
                 @csrf
                 <div class="form-group">
                 <label>DATE</label>
                 <input class="form-control mb-2" type="date" name="date">
                 <div class="form-group">
                 <label>GROSS SALES</label>
                 <input class="form-control mb-2" name="gross_sales" placeholder="GROSS SALES"/>
                 <div class="form-group">
                 <label>OPNG INVTY</label>
                 <input class="form-control mb-2" name="opng_invty" placeholder="OPNG INVTY"/>
                 <div class="form-group">
                 <label>PURCHASE/DEL</label>
                 <input class="form-control mb-2" name="purchase_del" placeholder="PURCHASE/DEL"/>
                 <div class="form-group">
                 <label>DIPSTK RDG</label>
                 <input class="form-control mb-2" name="dipstk_rdg" placeholder="DIPSTK RDG"/>
                 <div class="form-group">
                 <label>ACT INVTY</label>
                 <input class="form-control mb-2" name="act_invty" placeholder="ACT INVTY"/>
                 <div class="form-group">
                 <label>MULATIVE VAR</label>
                 <input class="form-control mb-2" name="mulative_var" placeholder="MULATIVE VAR"/>
            </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Values</button>
      </div>
      </form>
    </div>
  </div>
</div>