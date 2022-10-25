<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
      <div class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
         
                @if(Session('msg'))
                  <div class="alert alert-success">
                    {{Session('msg')}}
                  </div>

                @endif

                <a href="{{route('customer.create')}}" class="btn btn-success my-3">Add Reocrd</a>
            <table class="table table-bordered">
                <tr>
                    <th>#id</th>
                    <th>Name</th>
                    <th>city</th>
                    <th>Product Name</th>
                    <th>Product Email</th>
                    <th>Action</th>
                </tr>
                @php
                 $i=1;    
                @endphp
               @foreach ($customer as $custom)
                <tr>
                <td>{{$i++}}</td>
                <td>{{$custom->name}}</td>
                <td>{{$custom->city}}</td>
                <td>{{$custom->product->pname}}</td>
              <td>{{$custom->product->product_email}}</td>
                <td>{{$custom->city}}</td>
                <td>
                    <a href="{{route('customer.show',$custom->id)}}" class="btn btn-info">View</a>
                <a href="{{route('customer.edit',$custom->id)}}" class="btn btn-success">Edit</a>

                 <form action="{{route('customer.destroy',$custom->id)}}" method="post" style="display: inline">
                  @csrf  
                 @method('Delete')

                 <button type="submit" class="btn btn-danger">Delete</button>

                 </form>

                </td>
                </tr>
             @endforeach
            </table>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>