
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
                        <a class="btn btn-dark" href="{{route('product.create')}}">Add new product</a>

                    </div>

                </div>
                <div class="card-body">



                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Product image</th>
                                <th>Product name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cruds as $crud )
                            <tr>



                            <td>{{$crud->id}}</td>

                            <td><img src="{{asset('images/products/'.$crud->image)}}" alt="" style="height: 100px;width:100px;"></td>

                            <td>{{$crud->name}}</td>





                            <td>

                            <a class="btn btn-success" href="{{route('product.edit',$crud->id)}}">Edit</a>

                            <form action="{{route('product.delete',$crud->id)}}" method="post" >
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>



                            </td>



                        </tr>

                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>

</div>













