<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Add Product
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control" name="price">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cost</label>
                        <input type="number" step="0.01" class="form-control" name="cost">
                        <?php if (isset($errors['cost'])): ?>
                            <p class="text-danger"><?php echo $errors['cost'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="category">
                            <option value="0" disabled selected>Choose Category</option>
                            <?php foreach ($categories as $category):?>
                                <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                            <?php endforeach;?>
                        </select>
                        <?php if (isset($errors['category'])): ?>
                            <p class="text-danger"><?php echo $errors['category'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name='image' type="file" id="formFile">
                        <?php if (isset($errors['image'])): ?>
                            <p class="text-danger"><?php echo implode("",$errors['image']) ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="status">
                            <option value="" disabled selected>Choose...</option>
                            <option value="1">Cold</option>
                            <option value="2">Hot</option>
                        </select>
                        <?php if (isset($errors['status'])): ?>
                            <p class="text-danger"><?php echo $errors['status'] ?></p>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a type="button" href="./index.php?page=beverages" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>


