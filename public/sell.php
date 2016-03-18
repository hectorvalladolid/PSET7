<?php
// conf
    require("../includes/config.php"); 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $symbols = CS50::query("SELECT symbol FROM Portfolio WHERE user_id = ?", $_SESSION["id"]);
        render("sell_form.php", ["title" => "Sell", "symbol" => $symbols]);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST["symbol"]=='Symbol')
        {
            apologize("Please enter the stock symbol.");
        }
        else if ($_POST["shares"]== NULL) 
        {
            apologize("Empty share field, retry.");
        }
        
        $stock = lookup($_POST["symbol"]);
        if ($stock == 0)
        {
            apologize("Invalid stock symbol.");
        }
        
        if (preg_match("/^\d+$/", $_POST["shares"]) == NULL)
        {
            apologize("You must enter a positive integer.");
        }
        
        $stock = lookup($_POST["symbol"]);
        $shares = CS50::query("SELECT shares FROM Portfolio WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
        $earn = $stock["price"] * $shares[0]["shares"];  
        $type = 'Sell';
        CS50::query("INSERT INTO history (id, type, symbol, shares, price) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], $type, $_POST["symbol"], $shares[0]["shares"], $stock["price"]);
        CS50::query("UPDATE users SET cash = cash + ? WHERE id = ?", $earn, $_SESSION["id"]);
        CS50::query("DELETE FROM Portfolio WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
        
        redirect("/");    
    }    
?>