<?php
include 'header.php';
?>
<body style="background-color:#f0f0f0">

    <?php
    include 'navbar.php';
    ?>
    <div class="container mt-5" >
    <div class="row m-auto">

    <div class="card shadow w-100 p-2" style="background-color:#fafafa;">
        
        <div class="row p-2 ml-5 mt-3">
            <div style="font-size:12px;"  class="col-sm-2">Subject:</div>
            <div style="font-size:12px;"  class="col-sm-2">Grading:</div>
            <div style="font-size:12px;"  class="col-sm-2">Grade Level:</div>
            <div style="font-size:12px;"  class="col-sm-2">Items:</div>
            <div style="font-size:12px;" class="col-sm-2">Type:</div>
        </div>
        <bR>



        <div class="h-100 d-flex  m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 1.</label>
            <textarea name="q1" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q1a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q1c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q1b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q1d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q1ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 2.</label>
            <textarea name="q2" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q2a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q2c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q2b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q2d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q2ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 3.</label>
            <textarea name="q3" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q3a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q3c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q3b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q3d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q3ans" id="" style="font-size:12px;" class="form-control">
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 4.</label>
            <textarea name="q4" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q4a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q4c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q4b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q4d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q4ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>



        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 5.</label>
            <textarea name="q5" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q5a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q5c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q5b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q5d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q5ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>




        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 6.</label>
            <textarea name="q6" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q6a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q6c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q6b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q6d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q5ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 7.</label>
            <textarea name="q7" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q7a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q7c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q7b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q7d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q7ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 8.</label>
            <textarea name="q8" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q8a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q8c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q8b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q8d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q8ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        
    <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 9.</label>
            <textarea name="q9" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q9a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q9c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q9b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q9d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q9ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        
    <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 10.</label>
            <textarea name="q10" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q10a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q10c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q10b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q10d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q10ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 11.</label>
            <textarea name="q11" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q11a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q11c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q11b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q11d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q11ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 12.</label>
            <textarea name="q12" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q12a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q12c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q12b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q12d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q12ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 13.</label>
            <textarea name="q13" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q13a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q13c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q13b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q13d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q13ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 14.</label>
            <textarea name="q14" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q14a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q14c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q14b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q14d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q14ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        
        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 15.</label>
            <textarea name="q15" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q15a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q15c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q15b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q15d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q15ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 16.</label>
            <textarea name="q16" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q16a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q16c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q16b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q16d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q16ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 17.</label>
            <textarea name="q17" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q17a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q17c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q17b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q17d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q17ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 18.</label>
            <textarea name="q18" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q18a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q18c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q18b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q18d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q18ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 19.</label>
            <textarea name="q19" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q19a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q19c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control"required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q19b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q19d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q19ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        



        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 20.</label>
            <textarea name="q20" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q20a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q20c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q20b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q20d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q20ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
        

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 21.</label>
            <textarea name="q21" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q21a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q21c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q21b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q21d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q21ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 22.</label>
            <textarea name="q22" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q22a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q22c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q22b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q22d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q22ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 23.</label>
            <textarea name="q23" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q23a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q23c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q23b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q23d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q23ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 24.</label>
            <textarea name="q24" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q24a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q24c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q24b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q24d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q24ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>



        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 25.</label>
            <textarea name="q25" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q25a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q25c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q25b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q25d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q25ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>
    
        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 26.</label>
            <textarea name="q26" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q26a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q26c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q26b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q26d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q26ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 27.</label>
            <textarea name="q27" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q27a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q27c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q27b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q27d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q27ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 28.</label>
            <textarea name="q28" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q28a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q28c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q28b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q28d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q28ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 29.</label>
            <textarea name="q29" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q29a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q29c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q29b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q29d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q29ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 30.</label>
            <textarea name="q30" style="font-size:12px;" cols="60" rows="2" class="form-control" required></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q30a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q30c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q30b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q30d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q30ans" id="" style="font-size:12px;" class="form-control" required>
                <option value="A">Option A</option>
                <option value="B">Option B</option>
                <option value="C">Option C</option>
                <option value="D">Option D</option>
            </select>            
        </div>

        <div class="row mt-3">
                <div class="col-md-9 p-3 m-auto text-center">
                    <button type="submit" class="login-btn">Save</button>
                </div>
            </div>
            
    
    </div>

        
    
   </div>

</body>
</html>