<div class="d-flex align-items-center justify-content-center my-5">
    <div class="col col-md-6">
        <h3 class="text-center mb-4">Edit Product</h3>
        <form action="<?= base_url('products/edit/'.$product['id']); ?>" method="post" class="rounded shadow p-4 bg-light">
            <div class="form-group mb-3">
                <label for="barcode" class="form-label">Barcode</label>
                <input type="text" name="barcode" id="barcode" class="form-control" value="<?= $product['barcode']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="productname" class="form-label">Product Name</label>
                <input type="text" name="productname" id="productname" class="form-control" value="<?= $product['productname']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="<?= $product['description']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" name="unit" id="unit" class="form-control" value="<?= $product['unit']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="purchaseprice" class="form-label">Purchase Price</label>
                <input type="number" step="0.01" name="purchaseprice" id="purchaseprice" class="form-control" value="<?= $product['purchaseprice']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="sellingprice" class="form-label">Selling Price</label>
                <input type="number" step="0.01" name="sellingprice" id="sellingprice" class="form-control" value="<?= $product['sellingprice']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="wholesaleprice" class="form-label">Wholesale Price</label>
                <input type="number" step="0.01" name="wholesaleprice" id="wholesaleprice" class="form-control" value="<?= $product['wholesaleprice']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="deliverydate" class="form-label">Delivery Date</label>
                <input type="datetime-local" name="deliverydate" id="deliverydate" class="form-control" value="<?= $product['deliverydate']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="form-control" value="<?= $product['supplier']; ?>" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Edit Product</button>
                <a href="<?= base_url('products'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
