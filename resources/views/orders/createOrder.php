<?php
?>

<body>
<div class="container">
    <form action="" method="post">
        <table class="table">

            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Do Uong</th>
                <th scope="col">Hinh Anh</th>
                <th scope="col">Gia</th>
                <th scope="col">So Luong</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $key => $result): ?>
                <tr>
                    <td><input type="checkbox" name="listId[<?php echo $key ?>]" value="<?php echo $result['id'] ?>">
                    </td>
                    <td><?php echo $result['name'] ?></td>
                    <td><img src="public/uploads/<?php echo $result['image'] ?>" height="50" width="50"></td>
                    <td><input type="number" name="price[<?php echo $key ?>]"
                               value="<?php echo (int)$result['price'] ?>"></td>
                    <td><input type="number" name="quantity[<?php echo $key ?>]"></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <div>
                <select name="table" class="btn btn-outline-info">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="Mang ve">Mang ve</option>
                </select>
                <button type="submit" class="btn btn-outline-info my-2 my-sm-0">Them</button>
            </div>
        </table>
    </form>
</div>
</body>
