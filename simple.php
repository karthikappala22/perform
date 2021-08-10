<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Multiple Select Dropdown in PHP</title>
  <style>
    .container {
      max-width: 350px;
      margin: 50px auto;
      text-align: center;
    }
    select {
      width: 100%;
      min-height: 150px;
      margin-bottom: 20px;
    }

    input[type="submit"] {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <form action="ojinsert.php" method="post" class="mb-3">
       <h1>ADD OJs</h1>
    <p >Choose oj to add</p>
        <select name="o" multiple>
          <option value="" disabled selected>Choose option</option>
          <option value="codechef">Codechef</option>
          <option value="codeforce">Codeforce</option>
          <option value="hackerrank">Hackerrank</option>
          <option value="hackerearth">Hackerearth</option>
          
        </select>

         <button type="submit" class="registerbtn">ADD</button>
    </form>


</body>

</html>