<!DOCTYPE html>
<html lang="en">
  <head>
    <title>to do list</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>To do list</h1>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12 text-center">
          <form action="/" method="post">
            <input type="text" name="inputList" width="500px">
            <button class="btn btn-success btn-sm" type="submit">submit</button>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-offset-3 col-md-6">
          @if(@isset($list))
            @foreach($list as $l)
            <div class="col-md-10">
              {{ $l -> list }}
            </div>
            <div class="col-md-2">
              <form action="/del" method="post">
                <button class="btn btn-danger btn-sm" type="submit" name="delete" value="{{ $l -> id }}">Delete</button>
                {{ csrf_field() }}
              </form>
            </div>
            <br>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </body>
</html>