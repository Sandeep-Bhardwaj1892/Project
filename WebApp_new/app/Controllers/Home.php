<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\RegisterModel;

class Home extends BaseController
{    


    
  public function index()
  {  
        $data=[];
        helper(['form']);
        if($this->request->getMethod()=='post')
        {
          $rules = [
            'email'=> 'required|valid_email',
            'password'=> 'required|min_length[1]',
          ];
          $errors = [
            'password' => ['validateUser'=>'Email or Password do not match']
          ];

          if(!$this->validate($rules,$errors))
           {
            $data['validatoin']=$this->validator;
           }
           else
           {
            //echo 'i am here';
            $model = new AdminModel();
           
            $admin = $model->where('email',$this->request->getVar('email'))->first();
            //print_r($admin); exit;
            if($admin)
            {
             // $this->setUserSession($admin);
              return redirect()->to('dashboard');
            }
            

           
              /* if($this->verifyMypassword($this->request->gatVar('password'),$admin['password']))
               {
                $this->setUserSession($admin);
                return redirect()->to('dashborad');
               }*/
               else
               {
                $data['Flash_message']= TRUE;

               }
           }



        }
      
          return view('login',$data);
  }
  
       
  public function signup()
  {

     $data=[];
     helper('form');
     if($this->request->getMethod()=='post')
     {
       
        $rules=[
          'first_name'=>  'required',
         'last_name'=>  'required',
         'email'=> 'required|valid_email',
         'phone'=> 'required|min_length[1]',
         'password'=> 'required|min_length[1]',
         'confirm_password'=> 'matches[password]',
          
        ];


        if (!$this->validate($rules))
        {
          $data['validation']=$this->validator;
        }
        else
        {
         // echo 1111; exit;
         $model = new AdminModel();

         $newData=[
           
          'first_name' => $this->request->getVar('first_name'),
          'last_name' => $this->request->getVar('last_name'),
          'email'=>$this->request->getVar('email'),
          'phone'=>$this->request->getVar('phone'),
          'password'=>$this->request->getVar('password'),
           
         ]; 
         if($model->save($newData))
         {
          $data['Flash_message']= TRUE;
         }

        }
     }



      return view('signup',$data);
  }
     



   












   /* public function index()
    {  
          $data=[];
          helper(['form']);
          if($this->request->getMethod()=='post')
          {
            $rules = [
              'email'=> 'required|valid_email',
              'password'=> 'required|min_length[1]',
            ];
            $errors = [
              'password' => ['validateUser'=>'Email or Password do not match']
            ];

            if(!$this->validate($rules,$errors))
             {
              $data['validatoin']=$this->validator;
             }
             else
             {
              //echo 'i am here';
              $model = new RegisterModel();
              $admin = $model->where('email',$this->request->getVar('email'))->first();
              //print_r($admin); exit;
             
                 if($this->verifyMypassword($this->request->gatVar('password'),$admin['password']))
                 {
                  $this->setUserSession($admin);
                  return redirect()->to('dashborad');
                 }
                 else
                 {
                  $data['Flash_message']= TRUE;

                 }
             }



          }
        
            return view('login');
    }
    
    private function setUserSession($admin)
     {
       $data = [
            'id' => $admin ['id'],
            'first_name' => $admin('first_name'),
            'last_name' => $admin('last_name'),
            'email'=>$admin('email'),
            'isLoggedIn'=> true,
       ];
       session()->set($data);
       return true;
     }
       
    private function verifyMypassword($enterpassword,$databasePassword)
    {
      return password_verify($enterpassword,$databasePassword);

    }*/



    public function register()
    {  


      $data=[];
      helper('form');
      if($this->request->getMethod()=='post')
      {
         
         $rules=[
           'first_name'=>  'required',
           'last_name'=>  'required',
           'email'=> 'required|valid_email',
           'phone'=> 'required|min_length[1]',
           'password'=> 'required|min_length[1]',
           'confirm_password'=> 'matches[password]',
           
         ];


         if (!$this->validate($rules))
         {
           $data['validation']=$this->validator;
         }
         else
         {
          // echo 1111; exit;
          $model = new RegisterModel();
          

          $newData=[
            
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'email'=>$this->request->getVar('email'),
            'phone'=>$this->request->getVar('phone'),
            'password'=>$this->request->getVar('password'),
            //'confirm_password' => $this->request->getVar('confirm_password'),
            
            
          ]; 
          if($model->save($newData))
          {
           $data['Flash_message']= TRUE;
          }

         }
      }



       return view('register',$data);     




        
    }

    



     

   /* public function setUserSession($admin)
     {
       $data = [
            'id' => $admin ['id'],
            'first_name' => $admin('first_name'),
            'last_name' => $admin('last_name'),
            'email'=>$admin('email'),
            'isLoggedIn'=> true,
       ];
       session()->set($data);
       return true;
     }
      
    public function verifyMypassword($enterpassword,$databasePassword)
    {
      return password_verify($enterpassword,$databasePassword);

    }
     
     */








        /*
          public function index()
          {
            
            $data=[];
            helper('form');
            $userModel =new AdminModel();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $result = $userModel->where('email',$email)->first();
            if($result)
            { 
              
              $this->session->set("admin",$result);
              return redirect()->to('dashboard');



             /* if(password_verify($password, $result->password))
              {
                $this->session->set("admin",$result);
                return redirect()->to('dashboard');
              }
              else
              {
                echo 'Invalid email or password';
              }*/
           /*
            }
           else
           {
            echo 'Invalid email or Password';
           }

          return view('login',$data);
          }
    
           */
























    public function dashboard()
    {  
       $model =new AdminModel();
       $data['usersdata']= $model->findAll();
       ///print_r($data);
        return view('dashboard',$data);
    }
    
    public function logout()
    {
      session()->destroy();
      return redirect()->to('/');
    }
}
