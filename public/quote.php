<?php

    // configuration
    require("../includes/config.php");
    
     // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
        {
            // else render form
            render("quote_form.php", ["title" => "Quote"]);
        }
    // If user reached page via POST
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST["symbol"] == NULL)
            {
                apologize("You must enter a symbol");
            }
            
        $stock = lookup($_POST["symbol"]);
    
    
        if ($stock == 0) 
            {
                apologize("Stock not found");
            }
            
        //Render
        render("quote.php", ["title" => "Quote", "stock" => $stock]);
}
?>