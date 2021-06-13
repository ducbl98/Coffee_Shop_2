<div class="card-columns">
    <a href="./home.php">
        <button type="button" class="btn btn-outline-info card">Back menu</button>
    </a>
    <a href="index.php?page=bill&action=payment&bill=<?php echo $orderDetails[0]['orderNumber']; ?>">
        <button type="submit" class="btn btn-outline-info card">Thanh toán</button>
    </a>
</div>

<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên đồ uống</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Giá</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($orderDetails as $key => $value): ?>

        <tr>
            <th scope="row"><?php echo $key + 1 ?></th>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['quantity'] ?></td>
            <td><?php echo $value['price'] ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <th>Number order:<?php echo $value['orderNumber'] ?></th>
        <td></td>
        <td></td>
        <th>Total:<?php echo $totalPay['TongTien'] ?></th>
    </tr>
    </tbody>
</table>

