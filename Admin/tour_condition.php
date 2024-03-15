<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tour Condition</title>
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
            <li><a href="#">Tour</a></li>
            <li><a href="finance.php">Finance</a></li>
            <li><a href="guide_profile.php">Guide</a></li>
        </ul>
        <ul class="header__ul header__admin">
            <li><a href="trip_crud/trip_adding.php">Trip Adding</a></li>
            <li><a href="transportation_info.php">Transport</a></li>
            <li><a href="hotel_info.php">Hotel</a></li>
            <li><a href="restaurant_info.php">Restaurant</a></li>
        </ul>
    </nav>
</header>


<main class="main main__table-container">
    <h1 class="center">Tour Condition</h1>
    <table class="main__table transportation">
        <thead>
        <tr>
            <th id="tour-id" scope="col" class="table__head">Tour Id</th>
            <th id="place" scope="col" class="table__head">place</th>
            <th id="country" scope="col" class="table__head">country</th>
            <th id="city" scope="col" class="table__head">city</th>
            <th id="budget" scope="col" class="table__head">budget</th>
            <th id="seat" scope="col" class="table__head">seat</th>
            <th id="map" scope="col" class="table__head">map</th>
            <th id="start-date" scope="col" class="table__head">start-date</th>
            <th id="finish-date" scope="col" class="table__head">finish-date</th>
            <th id="guide" scope="col" class="table__head">guide</th>
            <th id="edit" scope="col" class="table__head">Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="table__item">3</td>
            <td class="table__item">Sydney</td>
            <td class="table__item">Australia</td>
            <td class="table__item">Sydney</td>
            <td class="table__item">42000</td>
            <td class="table__item">40</td>
            <td class="table__item">https://maps.app.goo.gl/DLzYYKSfLbaGTqbx5</td>
            <td class="table__item">2024-05-12</td>
            <td class="table__item">2024-05-17</td>
            <td class="table__item">Kavalkanti</td>
            <td class="table__item edit_option">
                <button type="submit" class="table_edit"><a href="trip_crud/trip_edit.php">Edit</a></button>
                <button type="submit" class="table_edit diff">Delete</button>
            </td>
        </tr>
        <tr>
            <td class="table__item">3</td>
            <td class="table__item">Sydney</td>
            <td class="table__item">Australia</td>
            <td class="table__item">Sydney</td>
            <td class="table__item">42000</td>
            <td class="table__item">40</td>
            <td class="table__item">https://maps.app.goo.gl/DLzYYKSfLbaGTqbx5</td>
            <td class="table__item">2024-05-12</td>
            <td class="table__item">2024-05-17</td>
            <td class="table__item">Kavalkanti</td>
            <td class="table__item edit_option">
                <button type="submit" class="table_edit"><a href="trip_crud/trip_edit.php">Edit</a></button>
                <button type="submit" class="table_edit diff">Delete</button>
            </td>
        </tr>
        <tr>
            <td class="table__item">3</td>
            <td class="table__item">Sydney</td>
            <td class="table__item">Australia</td>
            <td class="table__item">Sydney</td>
            <td class="table__item">42000</td>
            <td class="table__item">40</td>
            <td class="table__item">https://maps.app.goo.gl/DLzYYKSfLbaGTqbx5</td>
            <td class="table__item">2024-05-12</td>
            <td class="table__item">2024-05-17</td>
            <td class="table__item">Kavalkanti</td>
            <td class="table__item edit_option">
                <button type="submit" class="table_edit"><a href="trip_crud/trip_edit.php">Edit</a></button>
                <button type="submit" class="table_edit diff">Delete</button>
            </td>
        </tr>


        </tbody>

        <tfoot>
        <tr>
            <td colspan="12" class="table__footer">
                <button type="submit" class="add_option" ><a href="trip_crud/trip_adding.php">Add Trip</a></button>
            </td>
        </tr>
        </tfoot>
    </table>

</main>

<?php
include "header_footer/footer.php"
?>