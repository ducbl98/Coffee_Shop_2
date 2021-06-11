<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Detail Beverage
        </div>
        <div class="card-body">
            <div class="col-12">
                <a type="button" href="./index.php?page=beverages" class="btn btn-secondary">Back</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Cost</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $beverage->name ?></td>
                        <td><?php echo $beverage->price ?></td>
                        <td><?php echo $beverage->cost ?></td>
                        <td><?php echo $beverage->category ?></td>
                        <td><?php echo $beverage->status ?></td>
                        <td style="width: 200px ; height: 100px " ><img style="height: 100%; width: 100%; object-fit: contain;" src='public/uploads/<?php echo $beverage->image?>' alt='Error Image'></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>