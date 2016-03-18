<h1><?= $stock["name"]?></h1>
    Price: $<?= $stock["price"]?>
    <div class="form-group">
        <a focus class="btn btn-primary" type="submit" style="color: white;" href="buy.php?symbol=<?=$stock["symbol"]?>">
            Buy stock
        </a>
    </div>
    
    <div class="form-group">
        <a focus class="btn btn-primary" type="submit" style="color: white;" href="sell.php=<?=$stock["symbol"]?>">
            Sell Stock
        </a>
    </div>