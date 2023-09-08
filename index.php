<?php include "./functions.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <title>Phpassword generator</title>
</head>

<body>
  <div class="container">
    <form action="" method="GET">
      <label class="fw-bold mb-2">Select password length:</label>
      <select class="form-select" name="quantity" aria-label="Default select example">
        <option selected value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="14">14</option>
        <option value="16">16</option>
      </select>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value=true name="Numbers" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Numbers (1, 2, 3, 4, ...)
          </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value=true name="Symbols" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Symbols (=, ?, ^, ",...)
          </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value=true name="Upper" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Uppercase (A, B, C, D, ...)
          </label>
      </div>
      <button type="submit" class="btn btn-primary mt-2"> Submit</button>
    </form>
  </div>
  <div class="container">
    <h1 class="text-center">Generated password:</h1>
    <h2 class="text-center text-danger"><?php echo $password ?></h2>

  </div>
</body>

</html>