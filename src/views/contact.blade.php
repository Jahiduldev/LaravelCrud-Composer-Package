<html>
<head>

</head>
<body>
 <h1>This is my fist package , and feeling happy</h1>
 <div style="margin-left:500px;">
     <form action="{{route('contact')}}" method="post">
      @csrf

         <input type="text" name="name"><br>
         <input type="email" name="email"><br>
         <textarea name="message" cols="30" rows="5"></textarea><br>
         <input type="submit" value="submit">

     </form>
 </div>
</body>
</html>