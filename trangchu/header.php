<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/04dcc1994a.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/tkw.css">
    <link rel="stylesheet" href="css/dangky.css">
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                    <li><a href="index.php?act=gopy">Góp Ý</a></li>
                    <li><a href="index.php?act=hoidap">Giải Đáp</a></li>
                </ul>
            </nav>
            <form action="index.php?act=listsp" method="post">
                <input type="search" name="pm" required>
                <input type="submit" name="timkiem" value="TimKiem">
            </form>
        </header>