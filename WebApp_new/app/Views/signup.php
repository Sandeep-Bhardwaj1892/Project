<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/styleci.css');?>">


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Welcome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn-outline-success" href="<?php echo base_url('/');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-outline-success" href="#">SERVICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-outline-success" href="#">DESIGN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-outline-success" href="#">ABOUT</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link btn-outline-success " href="#">CONTECT</a>
      </li>
     
     
    </ul>





    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div class="content">
                  <h1>Web Design & <br> <span>Development</span> <br> site</h1>
                  <p class="par">Independence day is a national holiday for everyone.<br>
                     It celebrates our country's freedom after a long struggle and  <br>
                     sacrifice. It reminds us of the struggle and bravery of our <br>
                      freedom fighters. We celebrate Independence Day by hoisting <br>
                       the flag and singing the national anthem.</p>
                  <button  class="cn"> <a href="#">JOIN US</a></button>

                  </div> 

<div class="container col-md-6" >
<div class="form">
    <H2>SignUp Page</H2>

       
      <?php if (isset($validation)) : ?>
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                <?=$validation->listErrors()?>
            </div>
        </div>
       <?php endif; ?>



       <?php if (isset($Flash_message)) : ?>
        <div class="col-12">
            <div class="alert alert-success" role="alert">
               Congratulations ! Registration successfully
            </div>
        </div>
       <?php endif; ?>








       <form action="/signup" method="post">


<div class="">
    <label for="firstName">First Name</label>
    <input type="text" name="first_name" class="form-control" id=""  value="<?= set_value('first_name')?>" placeholder="First Name">
    
</div>

<div class="">
    <label for="lastName">Last Name</label>
    <input type="text" name="last_name" class="form-control" id="" value="<?= set_value('last_name')?>" placeholder="Last Name">
    
</div>



<div class="">
    <label for="Email">Email address</label>
    <input type="email" name="email" class="form-control" id="" value="<?= set_value('email')?>" placeholder="Enter Email">
    
</div>

<div class="">
    <label for="Phone">Phone No</label>
    <input type="text" name="phone" class="form-control" id="" value="<?= set_value('phone')?>" placeholder="Phone NO">
</div>


<div class="">
    <label for="Password">Password</label>
    <input type="password" name="password" class="form-control" id=""  placeholder="Password">
</div>


<div class="">
    <label for="Password">Confirm Password</label>
    <input type="password" name="confirm_password" class="form-control" id="" placeholder="Confirm Password">
</div>




<button type="submit" class="btnn">Submit</button>

<p class="link"> This  Account Page<br><br></p>
                
                  <p class="liw">Log in with</p>

</form>
</div>
 </div>


 
</body>
</html>