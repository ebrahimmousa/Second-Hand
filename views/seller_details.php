<!DOCTYPE html>
<html>
<head>
    <title>Seller Details</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Seller Details</h1>
    <h2><?php echo $this->seller['name'] ?></h2>


    <?php 
    $totalItems = 0;
    $totalSoldItems = 0;
    $totalActiveItems = 0;
    $salesAmount = 0;
    foreach ($this->sellerInfo as $item){
        $totalItems +=1;

        if($item['is_sold'] == 1){
            $totalSoldItems += 1 ;
            $salesAmount += (int)$item['price'];
        }
        else{
            $totalActiveItems += 1 ;
        }   
    } 
    ?>

    <p>Total Items Submitted: <?php echo $totalItems; ?></p>
    <p>Total Items Sold: <?php echo $totalSoldItems; ?></p>
    <p>Total Sales Amount: <?php echo $salesAmount ; ?></p>
    <p>Total unsold items: <?php echo $totalActiveItems ; ?></p>
    

</body>
</html>
