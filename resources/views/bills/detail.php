<?php ?>
<h2>Detail Bill No.</h2>
<div class="card-deck" style="text-align: center">
    <?php foreach ($bills as $bill):?>
    <div class="card">
        <img style=" margin: auto ;width: 250px;height: 250px" src="<?php echo 'public/uploads/' . $bill->image?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $bill->nameBev?></h5>
            <p class="card-text">Quantity: <?php echo $bill->quantity?></p>
            <p class="card-text">Price: <?php echo $bill->priceEach?></p>
            <p class="card-text">Table: <?php echo $bill->tableNumber?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="card-footer" >
    <medium class="text-muted">Total: <?php echo $bill->total?></medium>
</div>
<div class="card-footer" >
    <a href="index.php?page=bill&action=payment&bill=<?php echo $bill->id ?>">
        <button type="button" class="btn btn-outline-secondary">Thanh toan</button>
    </a>
</div>
