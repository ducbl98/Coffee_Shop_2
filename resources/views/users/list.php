<?php
?>




<table>
    <tr>
        <th></th>
        <th>Ten do uong</th>
        <th>Hinh Anh</th>
        <th> Gia do uong </th>
    </tr>
    <?php foreach ($results as $key =>$result):?>
    <tr>
    <th><input type="checkbox" name="listId[]" value="<?php echo $result['id']?>"></th>
    <th><?php echo $result['name']?></th>
    <th><?php echo $result['image']?></th>
    <th><?php echo $result['price']?></th>
    </tr>
    <?php endforeach;?>
</table>
