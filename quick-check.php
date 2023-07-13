<?php
session_start();
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<style>
.custom-file-input1::-webkit-file-upload-button {
  visibility: hidden;
  height:10rem !important;
  padding:10px;
}
.custom-file-input1::before {
  content: 'Check';
  font-size:12px;
  text-align:center !important;
  background-color:transparent !important;
  visibility: hidden;
}
.navbar2{
  background-color:#1F8A70 !important;
  color:white !important;
}

</style>
<nav class="navbar navbar2 navbar-default p-1">
  <div class="container-fluid">
    <div class="navbar-header pt-2">
    <div type="button"  onclick="location.href='login.php';" class="h-100 d-flex align-items-center justify-content-center">
        <h5 class="letter-circle3">A</h5>
        <h5 class="letter-circle3 ml-1">U</h5>
        <h5 class="letter-circle3 ml-1">T</h5>
        <h5 class="letter-circle3 ml-1">O</h5>
        <h5 class="letter-circle3 ml-1">-</h5>
        <h5 class="letter-circle3 ml-1">C</h5>
        <h5 class="letter-circle3 ml-1">H</h5>
        <h5 class="letter-circle3 ml-1">E</h5>
        <h5 class="letter-circle3 ml-1">C</h5>
        <h5 class="letter-circle3 ml-1">K</h5>
       
      </div>

  </div>
</nav>  
    <div class="container mt-3 fader w-50">
    <div class="row">
	<?php 
	if($_SESSION['item_no']){
   
	?>
    <div class="col-md-6 mt-3">
            <div class="card bg p-3 navbar2 mx-auto" title="Quick check answer sheets" style="max-width:12rem; height:8rem;">
            <div class="m-auto text-center">
            <h6 class="text-center" style="font-size:12px; positiion:absolute; margin-top:3px;">Check</h6>
            <input type="file" name="file" id="file"  class="custom-file-input1 edit-btn bg-transparent  border-0 text-white font-weight-normal" capture="environment" accept="image/*" style="margin-top:-15px;  position:absolute;" />                      
            <i class="fas fa-check-square text-center h1"></i>
                </div>
                </div>
            </div>
         <?php
    	}
    	?>
       
            <div class="col-md-6 mt-3">
            <div class="card bg p-3 navbar2 mx-auto" title="Print Answer Sheet and Questionnaire" style="max-width:12rem; height:8rem;">
            <a type="button"  href="answer-sheet-generate.php" class="m-auto text-decoration-none edit-btn bg-transparent border-0 text-white">
            <div class="m-auto text-center">
                    <h6 class="text-center" style="font-size:14px;">Answer Sheet</h6>
                    <i class="fas fa-file-alt text-center h1"></i>
                </div></a>
            </div>

            </div>
            <div class="container m-auto text-center" id="uploaded_image1"></div> 

            </div>
</body>
</html>

<script>
     $(#file_form).submit();
</script>

<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 20000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"upload2.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image1').html("<div class='container m-auto text-center mt-3 pt-4'><label class='text-success'>Processing OMR...</label></div>");
    },   
    success:function(data)
    {
  $('#uploaded_image1').html(data);

    }
   });
  }
 });
});
</script>
