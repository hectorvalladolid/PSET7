<form action="sell.php" method="post">
    <fieldset>
        <div class="form group">
            <select class ="form-control" name="symbol">
                <option value="Symbols">Symbol </option>
                <?php
                foreach ($symbols as $symbol)
                {
                    echo '<option value="'.$symbol["symbol"].'">'.$symbol["symbol"].'</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <button style ="color: black; background-color: blue; font-family: cursive;" class="btn btn_default" type="submit"> 
            Sell </button>
        </div>
    </fieldset>
</form>