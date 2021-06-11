<?php
?>



    <table>
        <?php echo "Don hang : " .$totalPay['TongTien']." VND"?>
        <tr>
            <th>stt</th>
            <th style="display: none">OrderNumber</th>
            <th style="display: none">BeverageId</th>
            <th>Beverage</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>

        <?php foreach ($orderDetails as $key=> $value):?>
        <tr>
            <th><?php echo $key+1?></th>
            <th style="display: none"><input type="number" name="orderId" value="<?php echo $value['orderNumber']?>"></th>
            <th style="display: none"><input type="number" value="<?php echo $value['beverageId']?>" name="beverageId"></th>
            <th><?php echo $value['name']?> </th>
            <th><?php echo $value['quantity']?> Cốc</th>
            <th><?php echo $value['price']?> VNĐ </th>
        </tr>
        <?php endforeach;?>
    </table>
