<header class="header">

   <div class="flex">

      <a href="index.php" class="logo">foodies</a>

      <nav class="navbar">
         <a href="admin.php">add products</a>
         <a href="products.php">view products</a>
         <a href="register.php">Register</a>
         <a href="logIn.php">Log In</a>
         <a href="logOut.php">Log Out</a>
      </nav>

      <?php
      @include 'config.php';

      $select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE u_email = '$email'") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>