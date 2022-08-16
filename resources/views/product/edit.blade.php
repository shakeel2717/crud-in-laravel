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
                        <h2 class="card-title">Edit this Product</h2>
                        <a href="{{ route('product.index') }}" class="btn btn-primary btn-lg">View All Products</a>
                    </div>
                    <form action="{{ route('product.update',['product' => $product->id]) }}" method="POST">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="item">Item</label>
                            <input type="text" name="item" id="item" class="form-control" value="{{ $product->item }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" name="stock" id="stock" class="form-control" value="{{ $product->stock }}">
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="text" name="discount" id="discount" class="form-control" value="{{ $product->discount }}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Update Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
