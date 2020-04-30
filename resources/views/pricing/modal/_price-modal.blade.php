<!-- Modal -->
<div class="modal fade" id="price-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('price.store') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product Price</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{ route('price.store') }}" method="post">
            @csrf
                 <div class="form-group">
                 <label>DATE</label>
                 <input class="form-control mb-2" type="date" name="date">
                 <div class="form-group">
                <div class="form-group">
                 <label>ADD PREMIUM PRICE</label>
                 <input class="form-control mb-2" name="premium_price" placeholder="ADD PRICE"/>
                 <div class="form-group">
                 <label>ADD SILVER PRICE</label>
                 <input class="form-control mb-2" name="silver_price" placeholder="ADD PRICE"/>
                 <div class="form-group">
                 <label>ADD DIESEL PRICE</label>
                 <input class="form-control mb-2" name="diesel_price" placeholder="ADD PRICE"/>
                
                
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Product Price</button>
      </div>
      </form>
    </div>
  </div>
</div>