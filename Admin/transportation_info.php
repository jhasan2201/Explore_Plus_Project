<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transportation Info</title>
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
            <li><a href="#">Transport</a></li>
            <li><a href="hotel_info.php">Hotel</a></li>
            <li><a href="restaurant_info.php">Restaurant</a></li>
        </ul>
    </nav>
</header>

<main class="main main__table-container">
    <h1 class="center">Transport Information</h1>
    <table class="main__table transportation">
        <thead>
            <tr>
                <th id="transport-id" scope="col" class="table__head">ID</th>
                <th id="type" scope="col" class="table__head">Type</th>
                <th id="from" scope="col" class="table__head">From</th>
                <th id="to" scope="col" class="table__head">To</th>
                <th id="price" scope="col" class="table__head">Price</th>
                <th id="start-date" scope="col" class="table__head">Staring Date</th>
                <th id="start-time" scope="col" class="table__head">Starting Time</th>
                <th id="finish-date" scope="col" class="table__head">Finishing Date</th>
                <th id="finish-time" scope="col" class="table__head">Finishing Time</th>
                <th id="class" scope="col" class="table__head">Class</th>
                <th id="capacity" scope="col" class="table__head">Capacity</th>
                <th id="edit" scope="col" class="table__head">Edit</th>
            </tr>
        </thead>
        <tbody class="table__body">
            <tr>
                <td class="table__item">3</td>
                <td class="table__item">bus</td>
                <td class="table__item">dhaka</td>
                <td class="table__item">sylhet</td>
                <td class="table__item">1200</td>
                <td class="table__item">12th june</td>
                <td class="table__item">11 pm</td>
                <td class="table__item">14th june</td>
                <td class="table__item">11 pm</td>
                <td class="table__item">eco</td>
                <td class="table__item">42</td>
                <td class="table__item edit_option">
                    <button type="submit" class="table_edit"><a href="transport_crud/transport_edit.php">Edit</a></button>
                    <button type="submit" class="table_edit diff">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="table__item">3</td>
                <td class="table__item">bus</td>
                <td class="table__item">dhaka</td>
                <td class="table__item">sylhet</td>
                <td class="table__item">1200</td>
                <td class="table__item">12th june</td>
                <td class="table__item">11 pm</td>
                <td class="table__item">14th june</td>
                <td class="table__item">11 pm</td>
                <td class="table__item">eco</td>
                <td class="table__item">42</td>
                <td class="table__item edit_option">
                    <button type="submit" class="table_edit"><a href="transport_crud/transport_edit.php">Edit</a></button>
                    <button type="submit" class="table_edit diff">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="table__item">3</td>
                <td class="table__item">bus</td>
                <td class="table__item">dhaka</td>
                <td class="table__item">sylhet</td>
                <td class="table__item">1200</td>
                <td class="table__item">12th june</td>
                <td class="table__item">11 pm</td>
                <td class="table__item">14th june</td>
                <td class="table__item">11 pm</td>
                <td class="table__item">eco</td>
                <td class="table__item">42</td>
                <td class="table__item edit_option">
                    <button type="submit" class="table_edit"><a href="transport_crud/transport_edit.php">Edit</a></button>
                    <button type="submit" class="table_edit diff">Delete</button>
                </td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="12" class="table__footer">
                    <button type="submit" class="add_option" ><a href="transport_crud/transport_add.php">Add Transportation</a></button>
                </td>
            </tr>
        </tfoot>
    </table>

</main>

<?php
include "header_footer/footer.php"
?>