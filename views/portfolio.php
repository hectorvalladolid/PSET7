<h4>
    <?php
    print("Add money to your account");
    ?>
</h4>
<table border="2" style="width:100% color: blue;"class="table table-striped">
    <thead>
        
        <tr>
            <th style="color:green;">Symbol</th>
            <th style="color:green;">Name</th>
            <th style="color:green;">Shares</th>
            <th style="color:green;">Price</th>
            <th style="color:green;">TOTAL</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($positions as $position)
        {
            print("<tr>");
            print("<tr>");
			print("<td>" . $position["symbol"] . "</td>");
			print("<td>" . $position["name"] . "</td>");
			print("<td>" . $position["shares"] . "</td>");
			print("<td>$" . $position["price"] . "</td>");
			print("<td>$" . $position["total"] . "</td>");
			print("</tr>");
        }
        ?>
        <form action="intro.php" method="post">
            <fieldset>
            <div class="form-group">
                <input class="form-control" name="intro" placeholder="Cash to be introduced" type="text"/>
            </div>
            </fieldset>
        </form>
        
    </tbody>
</table>