<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <style>
        .main {
            padding: 20px;
            background-image:url('/images/bg.png');
        } 
        table, th, td {
            border: 1px solid white; 
            border-collapse: collapse;
        } 
        th, .cntr{
            text-align: center;
        }     
        .myBtn{
            padding: 20px 18px;
        } 
        .edit{
            padding: 3px 8px; 
            color: white;
        } 
        .trash{
            padding: 3px 8px; 
            color: red;
        }          
        .edit:hover{
            color: grey;
        } 
        .trash:hover{
            color: maroon;
        }       
        option {
            font-weight: normal;
            display: block;
            white-space: pre;
            min-height: 1.2em;
            padding: 0px 2px 1px;
        }  
        .dropdown-content{    
            display: none;
            position: absolute;            
            border: 1px solid #990000;
            z-index: 1;
            padding: 0px;
            margin-left:230px;
        }
        .dropdown {
            position: relative;    
        }
        .dropdown-content option:hover{
            background-color: black;
            color:white
        }        
        .show{
            display: block;
        }     
        .mybg{
            background-image:url('/images/bg.png');
        }   
        .bgnav{
            background: black;
        }
    </style>
    <title><?php echo $__env->yieldContent('judul'); ?></title>
  </head>
  <body class="bg-dark">      
    <h2 class="text-center mybg text-white mx-auto m-0 p-5">--CRUD IN LARAVEL--</h2>                            
    <div class="row mx-auto bgnav justify-content-between p-3">
        <div class="col-3 mx-auto">          
          <a class="btn btn-block btn-light" href="/">HOME</a> 
        </div>               
    </div>      
    <div class="main text-white">       
        <?php echo $__env->yieldContent('konten'); ?>                      
    </div>   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="/main.js"></script>    
    
  </body>
</html><?php /**PATH C:\xampp\htdocs\workhard\finalLab\projek_crud\resources\views/master.blade.php ENDPATH**/ ?>