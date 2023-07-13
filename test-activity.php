<?php
session_start();
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body>
    <style>
    .form-1 {
        color: #555;
        display: flex;
        padding: 1 px;
        border: 1px solid gray;
        border-radius: 25px;
        margin: 0 0 30px;
        max-width: 950px;
    }

    input[type="search"] {
        border: none;
        background: transparent;
        margin: 0;
        width: 900px;
        padding: 7px 8px;
        font-size: 14px;
        color: inherit;
        border: 1px solid transparent;
        border-radius: inherit;
    }

    input[type="search"]::placeholder {
        color: #bbb;
    }

    .card3 {
        margin-left: 10px;
        border: 2px solid #041662;
        width: 100px;
        text-align: center;
    }

    .footer-left {
        position: fixed;
        bottom: 0%;
        left: 0%;
        color: #041662;
        font-weight: bold;
    }

    .footer-right {
        position: fixed;
        right: 0px;
        bottom: 0px;
        width: 130px;
        color: #041662;
        font-weight: bold;
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

    .card-btn {
        color: gray !important;
    }

    .card-btn:hover {
        background-color: #a7a7a8;
        color: white !important;
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

    .setting-btn {
        float: right;
    }

    .fa-ellipsis-v:nth-child(odd) {
        color: blue !important;
    }

    .card:hover {
        background-color: gray !important;
        border: 3px solid #041662;
    }

    .custom-file-input1::-webkit-file-upload-button {
        visibility: hidden;
    }

    .custom-file-input1::before {
        content: 'Check';
        font-size: 12px;
        text-align: center !important;
        background-color: transparent !important;
        visibility: hidden;

    }

    h6:hover {
        color: #f2f0f0 !important;
    }

    @media only screen and (min-width: 768px) {

        .footer-right,
        .footer-left {
            display: none !important;
        }

        .card {
            margin-left: 100px !important;
        }

    }

    @media (max-width: 767px) {
        .card2 {
            display: none !important;
        }

        .form-to {
            margin-left: -1px !important;
        }
    }

    .form-1 {
        margin-left: -1px !important;
    }

    .card {
        max-width: 10rem !important;
        width: 10rem !important;
    }
    }

    @media only screen and (max-width: 400px) {}
    </style>

    <?php
    include 'navbar.php';
    include 'config.php';
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test WHERE id=".$_GET['i']." ");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    foreach($result as $row) {
        $item_no =  $row['item_no'];
      }
    ?>
    <div class="container mt-3 fader">
        <div class="row">


            <div class="card ml-3 mt-2 bg p-3 p-2" title="Update Questionnaire" style="max-width:10rem;">
                <?php 
                  if($item_no == 10)
                  {
                    echo '<a href="edit-test10.php?i='.$_GET['i'].'" type="button" class="text-decoration-none edit-btn bg-transparent border-0 text-white">
                    ';
                  }
                  if($item_no == 20)
                  {
                    echo '<a href="edit-test20.php?i='.$_GET['i'].'" type="button" class="text-decoration-none edit-btn bg-transparent border-0 text-white">
                    ';
                  }
                  if($item_no == 40)
                  {
                    echo '<a href="edit-test40.php?i='.$_GET['i'].'" type="button" class="text-decoration-none edit-btn bg-transparent border-0 text-white">
                    ';
                  }

                  if($item_no == 50)
                  {
                    echo '<a href="edit-test50.php?i='.$_GET['i'].'" type="button" class="text-decoration-none edit-btn bg-transparent border-0 text-white">
                    ';
                  }

                ?>

                <div class="m-auto text-center">
                    <h6 class="text-center" style="font-size:12px;">Edit</h6>
                    <i class="fas fa-edit text-center h2"></i>
                </div>
                </a>
            </div>



            <div class="card bg p-3 ml-2 mt-2" title="Check Answer Sheet" style="max-width:10rem;">
                <h6 class="text-center" style="font-size:12px; positiion:absolute; margin-top:3px;">Check</h6>
                <input type="file" name="file" id="file"
                    class="custom-file-input1 edit-btn bg-transparent  border-0 text-white font-weight-normal"
                    capture="environment" accept="image/*"
                    style="margin-top:-9px; height:8rem !important; margin-left:-10px !important;  position:absolute;" />
                <i class="fas fa-check-square h2 text-center"></i>
            </div>
            </button>



            <div class="card bg p-3 ml-3 mt-2" title="Print Answer Sheet and Questionnaire" style="max-width:10rem;">
                <a type="button" target="_blank" href="answer-sheet.php?i=<?php echo $_GET['i'];?>"
                    class="text-decoration-none edit-btn bg-transparent border-0 text-white">
                    <div class="m-auto text-center">
                        <h6 class="text-center" style="font-size:12px;">Answer Sheet</h6>
                        <i class="fas fa-file-alt text-center h2"></i>
                    </div>
                </a>
            </div>

            <div class="card bg p-3 ml-2 mt-2" title="View Item Analysis, Mean, MPS and SD" style="max-width:10rem;">
                <button onclick="location.href='records.php?i=<?php echo $_GET['i'];?>';"
                    class="edit-btn bg-transparent border-0 text-white">
                    <h6 class="text-center" style="font-size:12px;">Record</h6>
                    <i class="far fa-folder-open h2 text-center"></i>

            </div>
            </button>


        </div>
    </div>

    <span id="uploaded_image"></span>
</body>

</html>


<script>
$(#file_form).submit();
</script>

<script>
$(document).ready(function() {
    $(document).on('change', '#file', function() {
        var name = document.getElementById("file").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
        }
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
        var f = document.getElementById("file").files[0];
        var fsize = f.size || f.fileSize;
        if (fsize > 20000000) {
            alert("Image File Size is very big");
        } else {
            form_data.append("file", document.getElementById('file').files[0]);
            $.ajax({
                url: "send.php?i=<?php echo $_GET['i'];?>&t=<?php echo $_GET['t'];?>",
                method: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#uploaded_image').html(
                        "<div class='container m-auto text-center mt-3 pt-4'><label class='text-success'>Processing OMR...</label></div>"
                        );
                },
                success: function(data) {
                  console.log(data);
                    $('#uploaded_image').html(data);

                }
            });
        }
    });
});
</script>