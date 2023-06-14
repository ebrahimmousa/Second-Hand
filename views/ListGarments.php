<!DOCTYPE html>
<html>
<head>
    <title>Second Hand Butik</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <table>
        <thead> 
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ( $this->garments as $garment  ) { ?> 
            <tr>
                <td><?php echo $garment["id"] ?></td>
                <td><?php echo $garment["name"] ?></td>
                <td><?php echo $garment["description"] ?></td>
                <td><?php echo $garment["price"] ?></td>
                <td><?php echo ($garment["is_sold"]=="0")? 'Not sold' :'Sold'; ?></td>
                <td><?php if ($garment["is_sold"]=="0"){?>
                    <a href="index.php?action=garments&task=setassold&id=<?php echo $garment["id"] ?>">Set As Sold</a>
                <?php }
                ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>       
</body>
</html>