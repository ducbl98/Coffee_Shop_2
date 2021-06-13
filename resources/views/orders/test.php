<form action="" method="post">
    <div class="card-columns">
        <button type="submit" class="btn btn-outline-info card">Thêm vào hóa đơn</button>
        <select class="custom-select" name="table">
            <option selected>Chọn Bàn</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="Mang ve">Mang về</option>
        </select>
        <a href="./home.php">
            <button type="button" class="btn btn-outline-info card">Back menu</button>
        </a>
    </div>

    <div class="row row-cols-1 row-cols-md-3">

        <?php foreach ($results as $key => $result): ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="public/uploads/<?php echo $result['image'] ?>" class="card-img-top" height="200"
                             width="100">
                        <h5 class="card-title"><?php echo $result['name'] ?></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="listId[<?php echo $key ?>]"
                                   id="exampleRadios2" value="<?php echo $result['id'] ?>">
                            <label class="form-check-label" for="exampleRadios2">
                                Chọn
                            </label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Giá:</span>
                            </div>
                            <input type="number" name="price[<?php echo $key ?>]"
                                   class="form-control" aria-label="Username"
                                   aria-describedby="basic-addon1" value="<?php echo (int)$result['price'] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Số Lượng</span>
                            </div>
                            <input type="number" name="quantity[<?php echo $key ?>]"
                                   class="form-control" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</form>