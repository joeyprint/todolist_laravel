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
          <form>
            <input type="text" name="inputList" width="500px">
            <input type="submit" value="submit">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-4 col-md-4">
          @if()
            
          @else
              
          @endif
        </div>
      </div>
    </div>
    

  </body>
</html>