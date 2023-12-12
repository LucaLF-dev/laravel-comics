

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>


  
  <section class="py-5">
    <div class="container">
      <div class="row">
        @foreach ($comics as $item)
            <h1>{{$item->price}}</h1>
        @endforeach
      </div>
    </div>
  </section>

</body>
</html>
    

    


