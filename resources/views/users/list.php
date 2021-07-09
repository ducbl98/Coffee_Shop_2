<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Beverage List
        </div>
        <div class="card-body">
            <div class="col-12">
                <a class="btn btn-success mb-2" href="./index.php?page=beverages&action=add">Add Beverage</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Order</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Detail</th>
                        <th>Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($beverages

                    as $key => $beverage): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $beverage->name ?></td>
                        <td><?php echo $beverage->price ?></td>
                        <td style="width: 200px ; height: 100px "><img
                                    style="height: 100%; width: 100%; object-fit: contain;"
                                    src='public/uploads/<?php echo $beverage->image ?>' alt='Error Image'></td>
                        <td>
                            <a href="./index.php?page=beverages&action=detail&id=<?php echo $beverage->id; ?>"
                               class="btn btn-primary btn-sm">Detail</a>
                        </td>
                        <td>
                            <a href="./index.php?page=beverages&action=delete&id=<?php echo $beverage->id; ?>"
                               class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                            <a href="./index.php?page=beverages&action=edit&id=<?php echo $beverage->id; ?>"
                               class="btn btn-primary btn-sm">Update</a>
                        </td>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

