<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
  <body>
    <form method="post">
        <h1>Vyber cisla</h1>
        <div class="mb-3 row">
            <label for="cislo1" class="col-2">Cislo 1:</label>
            <input type="text" class="col-10" id="cislo1" >

          </div>
          <div class="mb-3 row">
            <label for="cislo2" class="col-2">Cislo 2:</label>
            <input type="text" class="col-10" id="cislo2"  >

          </div>

        <div class="mb-3 row ">
            <label for="enabledSelect" class=" col-2">Vyber operacie:</label>
            <select id="enabledSelect" class="col-10">
                <option >Vyber</option>
              <option>+</option>
              <option >-</option>
              <option >*</option>
              <option >/</option>
            </select>
          </div>
          <div class="row">
          <button type="submit" class="btn btn-primary col-2">Submit</button>
          </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>