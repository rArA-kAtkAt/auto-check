<?php
include 'header.php';
?>
<body>
<style>
    .form-1 {
  color: #555;
  display: flex;
  padding: 2px;
  border: 1px solid gray;
  border-radius: 25px;
  margin: 0 0 30px;
  max-width:950px;
  margin-left:100px;    
}

input[type="search"] {
  border: none;
  background: transparent;
  margin: 0;
  width:900px;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

input[type="search"]::placeholder {
  color: #bbb;
}

button[type="submit"] {
  text-indent: -999px;
  overflow: hidden;
  width: 40px;
  padding: 0;
  margin: 0;
  border: 1px solid transparent;
  border-radius: inherit;
  background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat center;
  cursor: pointer;
  opacity: 0.7;
}

button[type="submit"]:hover {
  opacity: 1;
}

button[type="submit"]:focus,
input[type="search"]:focus {
  box-shadow: 0 0 3px 0 #1183d6;
  border-color: #1183d6;
  outline: none;
}

.setting-btn{
  float:right;
}
.card1:nth-child(odd) {
    background: #041662 !important;
    color:white !important;
}
.fa-ellipsis-v:nth-child(odd) {
    color:blue !important;
}


    @media only screen and (min-width: 768px) {
 
    }
    @media only screen and (max-width: 600px) {
        .add-btn{
            float:left !important;
            margin-left:40px;
            margin-top:-1px !important;
        }
        .form-1{
            max-width:250px;
            height:30px;
            margin-top:30px !important;

        }
        input[type="search"] {
            border: none;
            background: transparent;
            margin: 0;
            width:500px;
            padding: 7px 8px;
            font-size: 14px;
            color: inherit;
            border: 1px solid transparent;
            border-radius: inherit;
}
    .card-design1{
      max-width:140px !important;
    }
    .setting-btn{
      margin-left:90px !important;

    }
    .setting-btn>h6{
        font-size:12px !important;
    }
    .container1{
      margin-left:5px !important;
    }
      
    }
</style>
</style>
    <?php
    include 'navbar.php';
    ?>
    <div class="container mt-3">
        
         
            <form class="form-1 mt-1" style="border:1px solid silver;">
            <input type="search" style=" font-size:10px !important;" placeholder="Search subject...">
            <button type="submit">Search</button>
            </form>
        </div>
    
    <div class="container">
        <div class="ml-5 container1 pl-5 pr-5">
        <div class="btn-group row" role="group" aria-label="Basic example">

        <div class="card card1 p-3 mr-2 mt-2 card-design1">
        <div class="setting-btn" style="margin-left:100px;">
        
        <button type="button" data-toggle="dropdown" class="bg-transparent text-white border-0" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v" style="color:#041662;"></i>
    </button>
    <div class="dropdown-menu" style="font-size:12px;">
      <a class="dropdown-item" href="#">Edit</a>
      <a class="dropdown-item" href="#">Archive</a>
      <a class="dropdown-item" href="#">Delete</a>
      </div></div>
      <div type="button" class="text-center" onclick="location.href='tests.php';" >
        <h6 class="text-center">ENGLISH</h6>
        <h6 class="text-center" style="font-size:12px; margin-top:-5px;">Grade 7-Honesty</h6>
        <h6 class="text-center" style="font-size:12px; margin-top:-5px;">Juan Dela Cruz</h6>
        <i class="fas fa-book-open h1 text-center"></i>                        
        </div>
        </div>



        <div class="card card1 p-3 mr-2 mt-2 card-design1">
        <div class="setting-btn" style="margin-left:100px;">
        
        <button type="button" data-toggle="dropdown" class="bg-transparent text-white border-0" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v" style="color:#041662;"></i>
    </button>
    <div class="dropdown-menu" style="font-size:12px;">
      <a class="dropdown-item" href="#">Edit</a>
      <a class="dropdown-item" href="#">Archive</a>
      <a class="dropdown-item" href="#">Delete</a>
      </div></div>
      <div type="button" class="text-center" onclick="location.href='tests.php';" >
        <h6 class="text-center">ENGLISH</h6>
        <h6 class="text-center" style="font-size:12px; margin-top:-5px;">Grade 7-Honesty</h6>
        <h6 class="text-center" style="font-size:12px; margin-top:-5px;">Juan Dela Cruz</h6>
        <i class="fas fa-book-open h1 text-center"></i>                        
        </div>
        </div>

    
      
                </div>

        
    </div>
    </div>
</body>
</html>