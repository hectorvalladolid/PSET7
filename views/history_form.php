<body style="background-color: #7CFC00 	">
<table border="1" style="width:100%" class="table table-striped table-hover">
<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQqDrAknlDHJQGv23Vdur2Tuo736i1zqiVhNFSqA0Sg0d1V7_b2" alt="Your history" class="img-thumbnail">
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
</body>