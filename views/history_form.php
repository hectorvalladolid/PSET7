<table class="table table-striped">

    <thead>
        <tr>
            <th style ="color: red; font-family: cursive">Type</th>
            <th style ="color: red; font-family: cursive">Date and Time</th>
            <th style ="color: red; font-family: cursive">Symbol</th>
            <th style ="color: red; font-family: cursive">Shares</th>
            <th style ="color: red; font-family: cursive">Price</th>
        </tr> 
    </thead>


    <tbody>
    <?php
	    foreach ($table as $row)	
        {   
            echo("<tr>");
            echo("<td>" . $row["type"] . "</td>");
            echo("<td>" . date('d/m/y, g:i A',strtotime($row["date-time"])) . "</td>");
            echo("<td>" . $row["symbol"] . "</td>");
            echo("<td>" . $row["shares"] . "</td>");
            echo("<td>$" . number_format($row["price"], 2) . "</td>");
            echo("</tr>");
        }
    ?>
    </tbody>
</table>