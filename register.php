<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    
    <!-- header start -->
     <?php include "layout/header.html" ?>
     <!-- header end -->

    <h3>Daftar Akun</h3>
    <form action="register.php" method="post">
        <input type="username" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password" />
        <button type="submit">Daftar Sekarang</button>
    </form>

    <!-- footer start -->
     <?php include "layout/footer.html" ?>
     <!-- footer end -->
</body>
</html>