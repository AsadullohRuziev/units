<html lang="en">
<body>
  <h1>Bu katta bog'ning egasining ismi {{$username}}</h1> {{--  //uzgaruvchini qabulqilib olish--}}
  <ul>
  @foreach($mevalar as $meva)
          <li>
              {{$meva}}
          </li>
      @endforeach
  </ul>
</body>
</html>
