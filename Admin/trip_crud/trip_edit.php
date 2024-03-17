<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trip Edit</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header class="header admin">
    <div class="header__logo">
        <figure>
            <img src="../../img/logo3.png" alt="logo" title="logo" height="115" width="600">
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
            <li><a href="../transaction.php">Transaction</a></li>
            <li><a href="../tour_condition.php">Tour</a></li>
            <li><a href="../finance.php">Finance</a></li>
            <li><a href="../guide_info.php">Guide</a></li>
        </ul>
        <ul class="header__ul header__admin">
            <li><a href="trip_adding.php">Trip Adding</a></li>
            <li><a href="../transportation_info.php">Transport</a></li>
            <li><a href="../hotel_info.php">Hotel</a></li>
            <li><a href="../restaurant_info.php">Restaurant</a></li>
        </ul>
    </nav>
</header>


<main class="main__form">
  <form class="form__all" action="">
    <h3 class="form__h3">Edit the tour:</h3>
    <fieldset class="form__fieldset">
      <p class="form__p">
        <label class="form__label" for="city">City:</label>
        <input class="form__input" type="text" name="city" id="city"  required autofocus>
      </p>
      <p class="form__p">
        <label class="form__label" for="country">Country</label>
        <input class="form__input" type="text" name="country" id="country"  required autofocus>
      </p>
      <p class="form__p">
        <label class="form__label" for="budget">Budget</label>
        <input class="form__input" type="text" name="budget" id="budget"  required autofocus>
      </p>
      <p class="form__p">
        <label class="form__label" for="capacity">Capacity</label>
        <input class="form__input" type="text" name="capacity" id="capacity"  required autofocus>
      </p>
      <p class="form__p p_option">
        <label class="form__label form__txt">Transport</label>
        <select class="form__select">
          <option value="menu-1">transport-1</option>
          <option value="menu-2">transport-2</option>
          <option value="menu-3">transport-3</option>
          <option value="menu-4">transport-4</option>
        </select>
      </p>
      <p class="form__p">
        <label class="form__label" for="tour-duration">Tour Duration:</label>
        <input class="form__input" type="text" name="tour-duration" id="tour-duration"  required autofocus>
      </p>
      <p class="form__p p_option">
        <label class="form__label form__txt">Hotel</label>
        <select class="form__select">
          <option value="hotel-1">hotel-1</option>
          <option value="hotel-2">hotel-2</option>
          <option value="hotel-3">hotel-3</option>
          <option value="hotel-4">hotel-4</option>
        </select>
      </p>
      <p class="form__p p_option">
        <label class="form__label form__txt">Menu-item</label>
        <select class="form__select">
          <option value="menu-1">menu-1</option>
          <option value="menu-2">menu-2</option>
          <option value="menu-3">menu-3</option>
          <option value="menu-4">menu-4</option>
        </select>
      </p>
      <p class="form__p">
        <label class="form__label" for="guide-name">Guide Name</label>
        <input class="form__input" type="text" name="guide-name" id="guide-name"  required autofocus>
      </p>

      <p class="form__p">
        <label for="from" class="form__label">From</label>
        <input type="datetime-local" class="form__input" name="from" id="from" required>

      </p>
      <p class="form__p">
        <label for="to" class="form__label">To</label>
        <input type="datetime-local" class="form__input" name="to" id="to" required>
      </p>
      <p class="form__p">
        <label class="form__label" >Map:</label>
        <input class="form__input" type="url" name="map" id="map" required autofocus>
      </p>
      <p class="form__p form__txt">
        <label class="form__label" for="features">Features &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <textarea class="form__textarea" name="features" id="features" cols="10" rows="3"></textarea>
      </p>
      <p class="form__p">
        <button class="form__btn" type="submit">Submit</button>
      </p>
    </fieldset>
    <div class="crud__div">
      <button class="crud__btn" type="submit"><a href="../tour_condition.php">Submit</a></button>
      <button class="crud__btn diff2" type="reset">Reset</button>
    </div>

  </form>
</main>
<footer class="footer admin-foot">
  <div class="footer__contact">
    <h3 class="footer__h3">Contact us:</h3>
    <ul class="footer__ul">
      <li><a href="../../footerPage/contact_us.html">Contact</a></li>
      <li><a href="../../footerPage/customer.html">Customer</a></li>
      <li><a href="../../footerPage/website_feedback.html">Website Feedback</a></li>
    </ul>
    <div class="footer__icons">
      <i class="fa-brands fa-square-facebook"></i>
      <i class="fa-brands fa-square-instagram"></i>
      <i class="fa-brands fa-square-twitter"></i>
      <i class="fa-brands fa-square-youtube"></i>
    </div>
  </div>
  <div class="footer__about">
    <h3 class="footer__h3">About us:</h3>
    <ul class="footer__ul">
      <li><a href="../../footerPage/about__us.html">About Explore.com</a></li>
      <li><a href="../../footerPage/terms_condition.html">Terms &amp; Conditions</a></li>
      <li><a href="../../footerPage/privacy_statement.html">Privacy Statement</a></li>
    </ul>
    <h4 class="footer__h3">Payment Method</h4>
    <div class="footer__icons">
      <i class="fa-brands fa-cc-mastercard"></i>
      <i class="fa-brands fa-cc-paypal"></i>
      <i class="fa-brands fa-cc-amazon-pay"></i>
      <i class="fa-brands fa-apple-pay"></i>
      <i class="fa-brands fa-google-pay"></i>
    </div>
  </div>
</footer>

</body>
</html>