<div class="container my-5">
    <h3 class="text-center mb-4">List of Products</h3>
    <div class="d-flex justify-content-center mb-3">
        <a href="<?= base_url('products/add'); ?>" class="btn btn-lg btn-success">Add New Product</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Barcode</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th>Purchase Price</th>
                    <th>Selling Price</th>
                    <th>Wholesale Price</th>
                    <th>Delivery Date</th>
                    <th>Supplier</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id']; ?></td>
                    <td><?= $product['barcode']; ?></td>
                    <td><?= $product['productname']; ?></td>
                    <td><?= $product['description']; ?></td>
                    <td><?= $product['unit']; ?></td>
                    <td><?= number_format($product['purchaseprice'], 2); ?></td>
                    <td><?= number_format($product['sellingprice'], 2); ?></td>
                    <td><?= number_format($product['wholesaleprice'], 2); ?></td>
                    <td><?= date('Y-m-d', strtotime($product['deliverydate'])); ?></td>
                    <td><?= $product['supplier']; ?></td>
                    <td class="text-center">
                        <a href="<?= base_url('products/view/'.$product['id']); ?>" class="btn btn-sm btn-warning">View</a>
                        <a href="<?= base_url('products/edit/'.$product['id']); ?>" class="btn btn-sm btn-secondary">Edit</a>
                        <a href="<?= base_url('products/delete/'.$product['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
