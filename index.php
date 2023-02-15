<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
   <body>
    
    
    <video autoplay muted loop  class="backVideo">
      <source src="video/bgvideo.mp4" >
    </video>
    <form action="process.php" method="post" >
        <div class="form-group">
          <label for="exampleInputEmail1 ">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="passwordU" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button>Show Alert</button>
        <div class="alert hide">
            <span class="fas fa-exclamation-circle"></span>
            <span class="msg">Warning: This is a warning alert!</span>
            <div class="close-btn">
                <span class="fas fa-times"></span>
            </div>
        </div>
      
      </form>
      
   </body>
</html>