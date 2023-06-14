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
                <th>Email</th>
                <th>Tel</th>
                <th>Adress</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ( $this->sellers as $seller  ) { ?> 
            <tr>
                <td><?php echo $seller["id"] ?></td>
                <td><?php echo $seller["name"] ?></td>
                <td><?php echo $seller["email"] ?></td>
                <td><?php echo $seller["phone"] ?></td>
                <td><?php echo $seller["address"] ?></td>
                <td><a href="index.php?action=seller&task=sellerinfo&id=<?php echo $seller["id"]; ?>">More info</a></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

</body>
</html>
