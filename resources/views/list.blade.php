<html lang="en">
<body>
<h1>Bu katta bog'ning egasining ismilari</h1> {{--  //uzgaruvchini qabulqilib olish--}}
<ul>
    @foreach($users as $user)
         <li>
             {{$user}}
         </li>
    @endforeach
</ul>
</body>
</html>
