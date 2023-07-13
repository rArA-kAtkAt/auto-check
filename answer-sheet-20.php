<?php
include 'header.php';
?>
<body>
<style>
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
<br>
    <div class="container fader m-auto mt-5" style="max-width:30rem !important;" >
    <form action="function.php?as20" method="POST">
        <div class="card shadow p-2 pt-4">
<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">1</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q1" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q1" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q1" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q1" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">2</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q2" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q2" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q2" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q2" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">3</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q3" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q3" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q3" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q3" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>


<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">4</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q4" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q4" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q4" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q4" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">5</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q5" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q5" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q5" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q5" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">6</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q6" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q6" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q6" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q6" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">7</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q7" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q7" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q7" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q7" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>



<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">8</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q8" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q8" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q8" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q8" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">9</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q9" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input"value="B"  type="radio" name="q9" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q9" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q9" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>


<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">10</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q10" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q10" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q10" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="D" type="radio" name="q10" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">11</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q11" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q11" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q11" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input"value="D"  type="radio" name="q11" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">12</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q12" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q12" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q12" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q12" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>


<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">13</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q13" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B"  type="radio" name="q13" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"   type="radio" name="q13" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q13" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>


<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">14</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q14" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q14" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q14" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q14" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">15</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q15" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q15" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q15" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q15" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">16</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q16" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q16" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q16" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q16" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>


<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">17</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q17" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q17" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q17" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q17" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>


<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">18</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q18" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q18" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q18" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q18" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">19</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q19" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q19" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q19" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q19" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>

<div class="h-100 d-flex m-auto pb-2 ">
<span class="mr-2">20</span>
<div class="form-check ml-3">
<input class="form-check-input" value="A"  type="radio" name="q20" id="a1">
<label class="form-check-label" for="a1">A</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="B" type="radio" name="q20" id="a2" >
<label class="form-check-label" for="a2">B</label>
</div>

<div class="form-check ml-3">
<input class="form-check-input" value="C"  type="radio" name="q20" id="a3" >
<label class="form-check-label" for="a3">C</label>
</div>

<div class="form-check ml-3">.
<input class="form-check-input" value="D" type="radio" name="q20" id="a4" >
<label class="form-check-label" for="a4">D</label>
</div>
</div>


<div class="h-100 d-flex m-auto pt-3 pb-3">
    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>
<div class="h-100 d-flex m-auto pb-3">
<a href="print-answer-sheet.php?t=20" target="_blank" type="button" class="btn btn-warning btn-sm text-white"><i class="fas fa-print"></i> Print</a>
</div>

    </div>
    </div>
     
</body>
</html>

  
