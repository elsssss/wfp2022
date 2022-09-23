<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Category</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nama }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>