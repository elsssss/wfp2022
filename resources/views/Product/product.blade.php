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
        <h2>Product</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama </th>
                    <th>Form</th>
                    <th>Restriction</th>
                    <th>Description</th>
                    <th>Category ID</th>
                    <th>Faskes 1</th>
                    <th>Faskes 2</th>
                    <th>Faskes 3</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->nama }}</td>
                        <td>{{ $c->form }}</td>
                        <td>{{ $c->restriction }}</td>
                        <td>{{ $c->description }}</td>
                        <td>{{ $c->category_id }}</td>
                        <td>{{ $c->faskes1 }}</td>
                        <td>{{ $c->faskes2 }}</td>
                        <td>{{ $c->faskes3 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
