

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container">
    <div class="row mt-3">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <div style="float: left;">
                        <h2>Laravel image crud</h2>
                    </div>
                    <div class="" style="float: right">
                        <a class="btn btn-dark" href="product.index">All product</a>

                    </div>

                </div>

                <div class="card-body">


                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                   <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Product name</label>
                             <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product image</label>
                             <input type="file" name="image" class="form-control" style="height: 50px;">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

























