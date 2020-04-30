<!-- Modal -->
<div class="modal fade" id="daily-sales-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('silver.store') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Values</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{ route('silver.store') }}" method="post">
                 @csrf
                 <div class="form-group">
                 <label>DATE</label>
                 <input class="form-control mb-2" type="date" name="date">
                 <div class="form-group">
                 <label>NUM OF LITTERS SOLD</label>
                 <input class="form-control mb-2" name="num_of_liters_sold" placeholder="NUM OF LITERS SOLD"/>
                 <div class="form-group">
                 <label>PRODUCT</label>
                 <select class="form-control mb-2" name="product" placeholder="Product"  }}>
                        <option value="silver">Silver</option> 
                        <option value="premium">Premium</option> 
                        <option value="diesel">Diesel</option> 
                 </select>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Values</button>
      </div>
      </form>
    </div>
  </div>
</div>