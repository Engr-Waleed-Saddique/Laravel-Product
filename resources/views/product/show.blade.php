<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Product Details</title>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>
        <p><b>Product Name:</b>{{$product->name}}</p>
        <p><b>Product Description:</b> {{$product->description}}</p>
        <p><b>Price: </b>{{$product->price}}</p>
        <p><b>Created At: </b>{{$product->created_at}}</p>
        <p><b>Update At: </b>{{$product->updated_at}}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
