<!DOCTYPE html>
<html>
<head>
    <title>Add Clothes</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Add Clothes</h1>
    <form action="index.php?action=garments&task=insertclothes" method="post">
        <div class="form-line">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        </div>
        <div class="form-line">
        <label for="seller_id">Seller ID:</label>
        <input id="seller_id" name="seller_id" required>
        </div>
        <div class="form-line">
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required>
        </div>
        <div class="form-line">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>
        </div>
        
        <input type="submit" value="Add Clothes">
    </form>
</body>
</html>