<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart - Cupcake Confections LLC</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="icon" href="img/logoBlack.svg" type="image/svg" sizes="any">
    <script src="js/cart.js"></script>

  </head>

  <body>

    <?php
    include 'backend/navbar.php';
    ?>
    <br>
    <div class="container-fluid shadow-lg p-3 mb-5 bg-light rounded">
      <button class="btn btn-danger" onclick="emptyCart()">EMPTY CART</button>
      <br>
      <br>

      <?php
        include 'backend/db.php';
        $dbConn = new db;

        $c = $_COOKIE["cart"];
        if (isSet($c)) {

          echo '<table class="table">
            <thead>
              <tr>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>';

          $items = explode(",", $c);
          $occourences = array_count_values($items);
          foreach ($occourences as $i => $qty) {
            $sub += echoTableRow($i, $qty);
          }
          $taxRate = 0.07;
          $tax = $sub * $taxRate;
          $tax=round($tax, 2);
          $total = $sub+$tax;
          echo '<tr>
                <td></td>
                <td align="right">Subtotal: </td>
                <td>'.$sub.'</td>
                </tr>';
          echo '<tr>
                <td></td>
                <td align="right">Tax: </td>
                <td>'.$tax.'</td>
                </tr>';
          echo '<tr>
                <td></td>
                <td align="right">Total: </td>
                <td>'.$total.'</td>
                </tr>';
          echo '</tbody></table>';
        }
        else {
          echo '<h5>Your cart is currently empty</h5>';
        }


        function echoTableRow($item, $qty)
        {
          $sql = "SELECT * FROM productTest WHERE prod_id=".$item;
          $result = $GLOBALS['dbConn']->queryDatabase($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $priceForUnit = $row["price"] * $qty;
                echo '<tr>
                        <td>'.$row["name"].'</td>
                        <td>'.$qty.'</td>
                        <td>'.$priceForUnit.'</td>
                      </tr>';
                return $priceForUnit;
              }
            }
        }
      ?>
    </div>

  </body>
</html>
