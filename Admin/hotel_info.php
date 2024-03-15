<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header class="header admin">
    <div class="header__logo">
        <figure>
            <img src="../img/logo3.png" alt="logo" title="logo" height="115" width="600">
        </figure>
    </div>
    <div class="header_search">
        <form class="search__bar" action="">
            <input class="search__input" type="text" placeholder="Search anything" name="search">
            <button class="search__button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <nav class="header__nav nav__admin">
        <ul class="header__ul header__admin">
            <li><a href="transaction.php">Transaction</a></li>
            <li><a href="tour_condition.php">Tour</a></li>
            <li><a href="finance.php">Finance</a></li>
            <li><a href="guide_profile.php">Guide</a></li>
        </ul>
        <ul class="header__ul header__admin">
            <li><a href="trip_crud/trip_adding.php">Trip Adding</a></li>
            <li><a href="transportation_info.php">Transport</a></li>
            <li><a href="#">Hotel</a></li>
            <li><a href="restaurant_info.php">Restaurant</a></li>
        </ul>
    </nav>
</header>

<main class="main main__table-container">
    <h1 class="center">Hotel Information</h1>
    <table class="main__table">
        <thead>
            <tr>
                <th id="hotel-id" scope="col" class="table__head">Hotel ID</th>
                <th id="type" scope="col" class="table__head">Type</th>
                <th id="name" scope="col" class="table__head">Name</th>
                <th id="price" scope="col" class="table__head">Price</th>
                <th id="available-room" scope="col" class="table__head">Avai Room</th>
                <th id="place" scope="col" class="table__head">Place</th>
                <th id="map" scope="col" class="table__head">Map</th>
                <th id="picture" scope="col" class="table__head">Picture</th>
                <th id="edit" scope="col" class="table__head">Edit</th>
            </tr>
        </thead>
        <tbody class="table__body">
            <tr>
                <td class="table__item">california</td>
                <td class="table__item">california</td>
                <td class="table__item">123</td>
                <td class="table__item">3 star</td>
                <td class="table__item">12</td>
                <td class="table__item">coxs</td>
                <td class="table__item">31 st</td>
                <td class="table__item">
                    <div class="hotel__pic">
                        <figure>
                            <img src="../img/hotel/vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" alt="hotel1" width="4608" height="3072">
                        </figure>
                    </div>
                </td>
                <td class="table__item edit_option">
                    <button type="submit" class="table_edit"><a href="hotel_crud/hotel_edit.php">Edit</a></button>
                    <button type="submit" class="table_edit diff">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="table__item">california</td>
                <td class="table__item">california</td>
                <td class="table__item">123</td>
                <td class="table__item">3 star</td>
                <td class="table__item">12</td>
                <td class="table__item">coxs</td>
                <td class="table__item">31 st</td>
                <td class="table__item">
                    <div class="hotel__pic">
                        <figure>
                            <img src="../img/hotel/vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" alt="hotel1" width="4608" height="3072">
                        </figure>
                    </div>
                </td>
                <td class="table__item edit_option">
                    <button type="submit" class="table_edit"><a href="hotel_crud/hotel_edit.php">Edit</a></button>
                    <button type="submit" class="table_edit diff">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="table__item">california</td>
                <td class="table__item">california</td>
                <td class="table__item">123</td>
                <td class="table__item">3 star</td>
                <td class="table__item">12</td>
                <td class="table__item">coxs</td>
                <td class="table__item">31 st</td>
                <td class="table__item">
                    <div class="hotel__pic">
                        <figure>
                            <img src="../img/hotel/vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" alt="hotel1" width="4608" height="3072">
                        </figure>
                    </div>
                </td>
                <td class="table__item edit_option">
                    <button type="submit" class="table_edit"><a href="hotel_crud/hotel_edit.php">Edit</a></button>
                    <button type="submit" class="table_edit diff">Delete</button>
                </td>
            </tr>


        </tbody>
        <tfoot>
            <tr>
                <td colspan="12" class="table__footer">
                    <button type="submit" class="add_option" ><a href="hotel_crud/hotel_add.php">Add Hotel</a></button>
                </td>
            </tr>
        </tfoot>
    </table>
</main>


<?php
include "header_footer/footer.php"
?>