<!DOCTYPE html>
<html>
<head>
    <title>Add Seller</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Add Seller</h1>
    <form action="index.php?action=seller&task=insertseller" method="post">
    <div class="form-line">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
        <div class="form-line">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
        <div class="form-line">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
      
        <div class="form-line">
        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" required>
    </div>
        <div class="form-line">
        <label for="address">Adress:</label>
        <input type="text" id="address" name="address" required>
    </div>

        <input type="submit" value="Add Seller">
    </form>
</body>
</html>