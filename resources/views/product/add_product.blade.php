<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Add Product</title>
</head>
<body>
    <div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            <strong>Success:</strong>{{Session::get('success')}}
        </div>
        @endif
        <!-- this is used to check the error messages -->
        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <strong>Errors:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-6 col-md-offset-3 text-center">
            <h1>Add Product</h1>
            <form action="{{url('save_product')}}" method="post">
                @csrf
            
                    <label for="name" class="text-left">Product Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
                    <label for="name">Product Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter Product Price">
                    <label for="name">Product Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter Product Description">
                    <input type="submit" class="btn btn-primary" style="margin-top:10px;">                
                    <p class="text-left"><a href="{{url('/')}}"> << Back</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
