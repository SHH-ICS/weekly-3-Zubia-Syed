<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>
  <!-- MDL Inclusions -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  </head>

  <body>
    <div id="sample3"></div>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Circumference and area -->
          <span class="mdl-layout-title">Costs</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
          </nav>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="page-content">

          <?php
          $myVariable = "pizza_size";
          $pizza_size = ("Enter pizza size (large or extra large): ");
          $large_pizza = 6.00;
          $extra_large = 10.00;
          $toppings_ = [1, 1.75, 2.50, 3.35];
          $hst = 0.13;
          $topping_cost = $toppings_[$toppings - 1];
          $subtotal = $base_price + $topping_cost;
          $tax = $subtotal * $hst;
          $final_cost = $subtotal + $tax;
          if (isset($_POST['pizza size'])) {
            $myVariable = $_POST['pizza size'];
          }
          echo "<h1>"topping cost is".$topping_;</h1>\n";
          echo "<p>My Variable is = " . $myVariable . "</p>\n";
          ?>

  </body>

</html>