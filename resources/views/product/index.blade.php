<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>All Products</title>
</head>

<body class="bg-primary">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h2 class="card-title">All Products List</h2>
                        <a href="{{ route('product.create') }}" class="btn btn-primary btn-lg">Add Product</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->item }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->discount }}</td>
                                    <td><a href="{{ route('product.delete',['product' => $product->id]) }}"class="btn btn-sm btn-danger">Delete</a></td>
                                    <td><a href="{{ route('product.edit',['product' => $product->id]) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
