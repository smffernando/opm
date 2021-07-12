<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    table {
      border-collapse: collapse;
      width: 1000px;
    }

    td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px 80px;
    }

    tr {
      background-color: #dddddd;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .odrbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .container {
      padding: 16px;
      margin-left: 200px;
      width: 750px;
      text-align: end;
    }


    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      .cancelbtn {
        width: 100%;
      }
    }
  </style>
  {{View::make('header')}}
  @yield('content')
</head>

<body>


  <form action="/action_page.php" method="post">

    <table>

      <tr>
        <td> <input type="checkbox" id="package1" name="package1" value="package1">
          Package 1
        </td>
        <td>
          LKR 250

        </td>
        <td>
          Qty:
          <input type="text">
      </tr>
      <tr>
        <td><input type="checkbox" id="package2" name="package1" value="package2">
          Package 2
        </td>
        <td>
          LKR 350
        </td>
        <td>
          Qty:
          <input type="text">
        </td>
      </tr>
      <tr>
        <td><input type="checkbox" id="package3" name="package1" value="package3">
          Package 3
        </td>
        <td>
          LKR 500
        </td>
        <td>
          Qty: <input type="text">
        </td>
      </tr>

    </table>

    <div class="container">
      <label>Total:</label>
      <input type="text">
      <br>
      <button type="button" class="odrbtn">Order</button>
    </div>
  </form>
  {{View::make('footer')}}

</body>

</html>