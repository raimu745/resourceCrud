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

               <div class="border-success">
               <div class="b-2">
                 Customer Name : {{$customer->name}}
               </div>
               <div class="b-2">
                Customer City : {{$customer->city}}
              </div>
               <div class="b-2">
                Product Name : {{$customer->product->pname}}
              </div>
              <div class="b-2">
                Product Email : {{$customer->product->product_email}}
              </div>
            </div>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>