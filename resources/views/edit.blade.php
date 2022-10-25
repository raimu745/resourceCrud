<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
      <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{route('customer.update',$customer->id)}}" method="post">
                    @csrf
                    @method('Put')
                    <div class="mt-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$customer->name}}">
                    </div>
                    <div class="mt-3">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" value="{{old('customer',$customer->city)}}">
                    </div>
                    <input type="submit" value="save" class="mt-5 btn btn-primary">
                </form>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>