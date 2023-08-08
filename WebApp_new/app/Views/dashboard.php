
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashborad</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css1/style.css');?>">


 </head>
 <body>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h4>Welcome</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn-outline-success" href="<?php echo base_url('/');?>">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  btn-outline-success" href="#">SERVICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-outline-success" href="#">DESIGN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-outline-success" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-outline-success" href="#">CONTECT</a>
      </li>
      
     

      <li>
        
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="#">Search</a></button>
    </form> 
     </li>    
    

      <div class="col ">
           <h4> User <a href="<?php echo base_url()?>/logout">Logout</a></h4>
        </div>
      
     
    </ul>

    </div>
</nav>
    
    <div class=" container col-md-8 ">
    
    <table class="table table-hover ">
  <thead>
    <tr >
      <th scope="col">User Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach($usersdata as $key=>$val) { ?>
    <tr>
      <th> <?php echo $val['id'] ?> </th>
      <td> <?php echo $val['first_name'] ?> </td>
      <td><?php echo $val['last_name'] ?></td>
      <td><?php echo $val['email'] ?></td>
      <td><?php echo $val['phone'] ?></td>
      <th><a href="">Edit</a> | <a href="">Delete</a></th>
    </tr>
    <?php } ?>
    
   
  </tbody>
</table>
   
     
    </div>
    
    
   


     </body>
</html>
