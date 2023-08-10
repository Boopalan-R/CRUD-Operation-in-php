

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>
   <style>
    body{
        background: lightskyblue;
    }
    .mainbody{
       width: 350px;
       background: white;
       padding: 20px;
       margin: auto;
       margin-top: 100px;
       border-radius: 10px;
    }
    input{
        width: 100%;
        padding: 10px;
    }
    .radio{
    display: flex;
    margin-top: 10px;
    }
    button{
        width: 100%;
        padding: 8px;
        border: none;
        border-radius: 5px;
        background: green;
        color:white;
        font-weight: 600;
    }
   </style>
</head>

<body>
   <div class="mainbody">
    <h1>Add users</h1>
    <form action="adduser.php" method="post">
        <label for="">Firstname</label>
        <input type="text" name="first_name" placeholder="enter the first name">
        <br>
        <label for="">Lastname</label>
        <input type="text" name="last_name" placeholder="enter the first name">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="enter the email">
        <br>
        <div class="radio">
        <label for="">male</label>
            <input type="radio" name="gender" value="male">
            <label for="">Female</label>    
            <input type="radio" name="gender" value="female">
        </div>
        <br>
        <button type="submit">submit</button>
    </form>
   </div>
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>