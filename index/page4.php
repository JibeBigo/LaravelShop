<?php
include_once('function_index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="author" content="All Stars" />
    <meta name="description"
        content="All Stars my shop is a template of a concept store using HTML, CSS, PHP and MySQL only. You can display products and categories, 
        sign-in and sign-up, save users in database, use an admin page to manage your database. Here is an example of a concept store displaying Chrismas 
        present for people who don't have a lot of money but a great sense of humor" />
    <link href="index.css" rel="stylesheet" />
    <link href="mobile.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
        <integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>All Stars my shop</title>
</head>

<body>
    <!-- MENU -->

    <!-- show admin tools if admin -->
    <?php
    if($_COOKIE['admin']) {
    ?>
    <style type="text/css">#adminTools {
        display: flex
    }
    <?php } ?></style>   

    <div class="wrapper_menu">
        <div class="left">
            <nav class="menu navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <img src="../images/star.png" class="logo">
                    <li class="nav-item disable"><a href="#" class="nav-link">HOME</a></li>
                    <li class="nav-item disable"><a href="#" class="nav-link">SHOP</a></li>
                    <li class="nav-item disable"><a href="#" class="nav-link">MAGAZINE</a></li>
                </ul>
            </nav>
        </div>

        <div class="right">
            <nav class="menu navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="../admin/admin.php" class="nav-link" id="adminTools">ADMIN TOOLS</a></li>
                    <li class="nav-item"><a href="../authentication/logout.php" class="sign-out">SIGN OUT</a></li>
                    <img src="../images/constant/burger.png" class="menu_mobile" />
                </ul>
            </nav>
        </div>
    </div>

    <!-- SEARCH BAR -->
    <form method="post">
        <div class="grid-search">
            <div class="grid-search1">
                    <div class="search">
                        <input type="text" id="search" class="search_bar" placeholder="Search bar" name="search_input"></input>
                    </div> 
                    <div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
            </div>
        </div>
    </form>

    <!-- BODY -->
<?php
    if(isset($_POST['search_input'])) {
        filterItems();
    }
?>
    <div class="big-container">
        <div class="grid-container">
            <div class="grid-item1" id=<?php echo(includeIdFromDb(16));?>>
            <img src="<?php echo(includeImgFromDb(16));?>" class="image" alt="Coombes">
                <div class="description">
                    <div class="info-container">
                        <div class="info">
                            <p class="line1-text" ><strong><?php echo(includeNameFromDb(16));?></strong></p>
                            <p class="info-text"><?php includeDescriptionFromDb(16);?></p>
                        </div>
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star.png" alt="Rating">
                    </div>

                    <div class="buy">
                        <div class="price">
                            <p class="line1-text">$<?php includePriceFromDb(16);?></p>
                        </div>
                        <img src="../images/constant/Cart Button.png" class="img-cart" alt="Add item to cart">
                    </div>
                </div>
            </div>

            <div class="grid-item2">
                <img src="<?php echo(includeImgFromDb(17));?>" class="image" alt="Coombes">

                <div class="description">
                    <div class="info-container">
                        <div class="info">
                            <p class="line1-text" ><strong><?php echo(includeNameFromDb(17));?></strong></p>
                            <p class="info-text"><?php includeDescriptionFromDb(17);?></p>
                        </div>
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star.png" alt="Rating">
                    </div>

                    <div class="buy">
                        <div class="price">
                            <p class="line1-text">$<?php includePriceFromDb(17);?></p>
                        </div>
                        <img src="../images/constant/Cart Button.png" class="img-cart" alt="Add item to cart">
                    </div>
                </div>
            </div>

            <div class="grid-item3">
                <img src="<?php echo(includeImgFromDb(18));?>" class="image" alt="Keeves Set">

                <div class="description">
                    <div class="info-container">
                        <div class="info">
                            <p class="line1-text" ><strong><?php echo(includeNameFromDb(18));?></strong></p>
                            <p class="info-text"><?php includeDescriptionFromDb(18);?></p>
                        </div>
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star.png" alt="Rating">
                    </div>

                    <div class="buy">
                        <div class="price">
                            <p class="line1-text">$<?php includePriceFromDb(18);?></p>
                        </div>
                        <img src="../images/constant/Cart Button.png" class="img-cart" alt="Add item to cart">
                    </div>
                </div>
            </div>

            <div class="grid-item4">
                <img src="<?php echo(includeImgFromDb(19));?>" class="image" alt="Nillè">

                <div class="description">
                    <div class="info-container">
                        <div class="info">
                            <p class="line1-text"><strong><?php echo(includeNameFromDb(19));?></strong></p>
                            <p class="info-text"><?php includeDescriptionFromDb(19);?></p>
                        </div>
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star.png" alt="Rating">
                    </div>

                    <div class="buy">
                        <div class="price">
                            <p class="line1-text">$<?php includePriceFromDb(19);?></p>
                        </div>
                        <img src="../images/constant/Cart Button.png" class="img-cart" alt="Add item to cart">
                    </div>
                </div>
            </div>

            <div class="grid-item5">
                <img src="<?php echo(includeImgFromDb(20));?>" class="image" alt="Blanko">

                <div class="description">
                    <div class="info-container">
                        <div class="info">
                            <p class="line1-text"><strong><?php echo(includeNameFromDb(20));?></strong></p>
                            <p class="info-text"><?php includeDescriptionFromDb(20);?></p>
                        </div>
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star.png" alt="Rating">
                    </div>

                    <div class="buy">
                        <div class="price">
                            <p>$<?php includePriceFromDb(20);?></p>
                        </div>
                        <img src="../images/constant/Cart Button.png" class="img-cart" alt="Add item to cart">
                    </div>
                </div>
            </div>

            <div class="grid-item6">
                <img src="<?php echo(includeImgFromDb(21));?>" class="image" alt="Momo">

                <div class="description">
                    <div class="info-container">
                        <div class="info">
                            <p class="line1-text"><strong><?php echo(includeNameFromDb(21));?></strong></p>
                            <p class="info-text">S<?php includeDescriptionFromDb(21);?></p>
                        </div>
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star.png" alt="Rating">
                    </div>

                    <div class="buy">
                        <div class="price">
                            <p>$<?php includePriceFromDb(21);?></p>
                        </div>
                        <img src="../images/constant/Cart Button.png" class="img-cart" alt="Add item to cart">
                    </div>
                </div>
            </div>

            <div class="grid-item7">
                <img src="<?php echo(includeImgFromDb(22));?>" class="image" alt="Penemillè">

                <div class="description">
                    <div class="info-container">
                        <div class="info">
                            <p class="line1-text"><strong><?php echo(includeNameFromDb(22));?></strong></p>
                            <p class="info-text"><?php includeDescriptionFromDb(22);?></p>
                        </div>
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star.png" alt="Rating">
                    </div>

                    <div class="buy">
                        <div class="price">
                            <p>$<?php includePriceFromDb(22);?></p>
                        </div>
                        <img src="../images/constant/Cart Button.png" class="img-cart" alt="Add item to cart">
                    </div>
                </div>
            </div>

            <div class="grid-item8">
                <img src="<?php echo(includeImgFromDb(23));?>" class="image" alt="Kappu">

                <div class="description">
                    <div class="info-container">
                        <div class="info">
                            <p class="line1-text"><strong><?php echo(includeNameFromDb(23));?></strong></p>
                            <p class="info-text"><?php includeDescriptionFromDb(23);?></p>
                        </div>
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star - On.png" alt="Rating">
                        <img class="start" src="../images/constant/Star.png" alt="Rating">
                    </div>

                    <div class="buy">
                        <div class="price">
                            <p>$<?php includePriceFromDb(23);?></p>
                        </div>
                        <img src="../images/constant/Cart Button.png" class="img-cart" alt="Add item to cart">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PAGINATION -->
    <footer>
        <div class="pagination">
            <a class="p1" href="index.php">1</a>
            <a class="p2" href="page2.php">2</a>
            <a class="p3" href="page3.php">3</a>
            <a class="p4 active" href="page4.php">4</a>
            <a class="p5" href="page5.php">5</a>
            <a class="p6" href="page6.php">6</a>
            <a id="page_arrow" href="#">&gt;</a>
        </div>
    </footer>
    
</body>
</html>