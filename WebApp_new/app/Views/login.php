



<?php echo view('includes/header');?>

  <div class="container"></div>

                 <div class="content">
                  <h1>Web Design & <br> <span>Development</span> <br> site</h1>
                  <p class="par">Independence day is a national holiday for everyone. It celebrates our country's freedom after 
                    <br> a long struggle and sacrifice. It reminds us of the struggle and bravery of our freedom fighters. 
                  <br>We celebrate Independence Day by hoisting the flag and singing the national anthem.</p>
                  <button  class="cn"> <a href="#">JOIN US</a></button>
                      
                  <div class="form">
                  <h2>Login Here</h2>

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
               Email and Password incorrect 
            </div>
        </div>
       <?php endif; ?>

                  <form action="/" method="post">
                  
                  <input type="email" name="email" placeholder="Enter Email Here">
                  <!--<div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" name="email" class="form-control" id=""  placeholder="Enter Email">
                    
                </div>-->
                
                  <input type="password" name="password" placeholder="Enter Password Here">
                 <!--<div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="password" class="form-control" id="" placeholder="Password">
                </div>-->
                 <button type="submit" class="btnn"> Login</button>
                 
                  <!-- <button type="submit" class="btn btn-primary">Login</button>-->

                 <p class="link"> Don't have an account<br><br>
                  <a href="<?php echo base_url('signup');?>">Sign Up here</a></p>
                  <p class="liw">Log in with</p>
                
                </form>
                </div>
                
                
               </div>
                 



               
<section>

<h1> This home page</h1>

<p>The page you are looking at is being generated dynamically .</p>









</section>


 <?php echo view('includes/footer');?>
                



     


