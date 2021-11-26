<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="icon" href="logo.jpg" type="image/png" sizes="16*16">
    <title>Bank</title>
    <style>
        *::selection{
            background-color:#2ECC71;
            color:white;
            font-weight:bold;
        }
        *{
           
            font-weight:bold;
            font-family:'oswald';
            text-transform:capitalize;
            font-variant:small-caps;
            font-family:'segoe ui';
            
        }
      /*  .btn{
             background-color:#2ECC71;
             color:black;
        }*/
        nav{
            background-color:black;
            padding:0.5%;
            color:white;
        }
        nav h3 a{
            font-family:'sofia';
            color:#2ECC71;
            text-decoration:underline;
        }
        nav h3{
            display:inline;
        }
        a:hover{
            color:blue;
        }
        button{
            padding:0.9%;
            background-color:#2ECC71;
            border:1px solid black;
            border-radius:3%;
            float:right;
            margin-right:3%;
            color:black;
        }
        button a{
            color:black;
        }
        .memu{
            padding:0.6%;
            border:1px solid black;
            border-radius:1%;
            float:right;
            margin-right:3%;
            color:black;
        }
        .animate{
            color:#2ECC71;
            font-weight:bolder;
            font-size:24px;
        }
        .info{
            padding:30px 10px;
        }
        .info h3,.info h5{
            text-align:center;
            color:black;
        }
        .info h5{
            text-align:center;
            font-style:italic;
        }
        .banner{
            background:url('banner.jpg');
            margin-top:-20px;
            width:100%;
            height:100%;
            background-repeat:no-repeat;
            background-size:cover;
            padding:200px 20px;
            background-position:fixed;
        }
        .quote{
            color:#2ECC71;
            font-style:italic;
            font-weight:bold;
            text-align:center;
        }
        .about h1, .transfer h1,.imgs h1{
          color:#2ECC71;
          font-weight:bolder;
          padding:3%;
        }
        .about
        {
            width:45%;
            margin:3%;
            box-shadow:-3px -3px 3px #2ECC71;
            background-color:white;
            border-radius:3%;
        }
        .about h1, .imgs h1{
            border-bottom:1px solid #2ECC71; 
            padding:0.5% 3%;
        }
        .about h5{
            text-indent:3%;
            padding:3%;
            text-align:justify;
        }
        .imgs{
            width:40%;
            margin:3%;
            box-shadow:3px 3px 3px #82E0AA;
            background-color:white;
            padding:10px;
            border-radius:3%;
        }
        .imgs:hover,.about:hover{
            transform:scale(1.01);
        }
       .transfer{
           margin:1%;
           width:31%;
           text-align:justify;
           text-transform:none;
           font-variant:none;
           padding:10px;
           text-indent:3%;
       }
    .imgs h5{
    text-indent:3%;
            padding:3%;
            text-align:justify;
    }
    .imgs form{
        padding:15px;
    }
    .imgs input{
        border:none;
        border-bottom:1px solid #82E0AA;
    }
    .imgs textarea{
        border:none;
        border:1px solid #82E0AA;
    }
    .transfer:hover{
        transform:scale(1.01);
    }
    .footer{
        background-color:black;
        margin:0;
        padding:3%;
    }
   .footer h6{
       color:#82E0AA;
       font-family:'sofia';
       border-bottom:1px solid #82E0AA;
       font-size:20px;
       font-weight:bold;
   }
   .footer a{
       color:white;
       font-size:15px;
   }
   .goup{
    width:40px;
    padding:1%;
    font-size:24px;
    color:#82E0AA;
   }
   .footer i{
       font-size:15px;
       color:white;
       padding:5%;
   }
   .foot{
       color:#82E0AA;
       text-align:center;
       background-color:black;
       margin:0;
       font-family:'arial';
       padding:1%;
       font-weight:bold;
   }
    @media only screen and (max-width:600px)
    {
        .imgs{
            width:90%;
        }
        .about{
            width:90%;
        }
        .transfer{
            width:90%;
            padding-left:10px;
        }
       .navbar img{
           width:10%;
           height:10%;
       }
       .navbar a{
           font-size:15px;
       }
       .navbar a .animate{
           font-size:20px;
       }
       .menu
       {
           padding:0.5%;
       }
       .footer a{
          font-size:10px;
       }
       .footer h6{
           font-size:12px;
       }
       .quote{
           font-size:15px;
       }
       h1{
           font-size:25px;
       }
    }
    .loader{
    position:fixed;
    top:0;
    left:0;
    z-index:10000;
    background: #fff;
    display:flex;
    align-items:center;
    justify-content: center;
    height:100%;
    width:100%;
    }
    .loader .fade-out{
        top:-120%;
    }
    .signup_button{
    padding:3px;
    margin-right:3%;
    float:right;
    
}
.signup_button .dropdown{
    padding-bottom:20px;
}
.drop{
        background-color:#2ECC71;
        color:black;
      }
        </style>
</head>
 <header>
    <nav class="navbar">
        <img src="logo1.jpg" width="3%" height="3%">
        <h3><a href="bank.php">Sparks Bank</a></h3>
        <div class="signup_button">
        <div class="dropdown">
          <button class="btn btn-success dropdown-toggle drop" type="button" data-toggle="dropdown">
            <h6 class="glyphicon glyphicon-align-justify logobtn ">&nbsp;Menu</h6></button>
          <ul class="dropdown-menu">
            <li><a href="create.php"><h6>Create User</h6></a></li>
            <li class="divider"></li>
            <li><a href="customer.php"><h6>View Customers</h6></a></li>
            <li class="divider"></li>
            <li><a href="transfer.php"><h6>Transfer Money</h6></a></li>
            <li class="divider"></li>
            <li><a href="history.php"><h6>View History</h6></a></li>
          </ul>
        </div>
        
    </nav>
</header>
<body>
