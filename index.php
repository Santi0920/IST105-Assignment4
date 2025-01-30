<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-secondary-subtle">
    <div class="container shadow p-5 rounded text-center mt-3 bg-light">
        <h1 class="text-danger">Enter Numerical Values</h1>
        <form action="process.php" method="post">
            <label for="a">Value for a:</label>
            <input type="number" id="a" name="a" required><br><br>

            <label for="b">Value for b:</label>
            <input type="number" id="b" name="b" required><br><br>

            <label for="c">Value for c:</label>
            <input type="number" id="c" name="c" required><br><br>

            <input type="submit" value="Calculate Final Result" class="btn btn-success">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>