<?php
session_start();
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
    <style>
    th,
    td,
    tr,
    table {
        border: 1px solid gray;
        padding: 2px;
    }

    th {
        background: #041662 !important;
        color: white !important;
    }

    tr:hover {
        background-color: #041662 !important;
        color: white !important;
    }

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


    h6:hover {
        color: #f2f0f0 !important;
    }

    @media only screen and (min-width: 768px) {
        table {
            width: 40rem;
        }

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

    td a {
        display: block;
    }

    .alink:hover,
    a:hover {
        color: white !important;
    }

    .input-container {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        width: 100%;
    }

    .icon {
        padding: 10px;
        background: #041662;
        color: white;
        min-width: 50px;
        text-align: center;
    }

    .input-field {
        width: 100%;
        /* padding: 10px; */
        outline: none;
        text-align: center;
    }

    .input-field:focus {
        border: 2px solid dodgerblue;
    }
    </style>

    <?php
    include 'config.php';
    ?>
    <br>
    <div class="container m-auto text-center">
        <h6 class="text-center text-dark">Score:<?php echo $_SESSION['str']; ?></h6>
    </div>
    <div class="container m-auto text-center">
        <img class="m-auto text-center" src="<?php echo $_GET['img']?>" style="width:250px;">
    </div>
    <div class="container">
        <table class="m-auto" id="studentTable">
            <thead>
                ` <tr>
                    <th class="text-center theme-bg text-white"
                        style="padding-top:5px; padding-bottom:5px; font-size:20px">Student Name</th>

                </tr>
                <tr id="search">
                    <td>
                        <div class="input-container">
                            <i class="fa fa-search icon"></i><input type="text" id="myInput" onkeyup="myFunction()"
                                placeholder="Search for names.." title="Type in a name" class="input-field">
                        </div>

                    </td>
                </tr>
                <?php	

    $pdo_statement = $pdo->prepare("SELECT *, s.id as id FROM tbl_student_class as sc LEFT JOIN tbl_student as s ON sc.student_id = s.id WHERE sc.class_id = '".$_GET['t']."'");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    if(!empty($result)) { 
    foreach($result as $row) {
   echo '    <tr>';
    ?>
            <tbody>

                <td class="text-center"><a class="alink text-decoration-none"
                        href="function.php?save-score&s=<?php echo $row['id']?>&i=<?php echo $_GET['i']?>&t=<?php echo $_GET['t'];?>"><?php echo $row['lastname'].', '.$row['firstname'].' '.$row['middlename'].'.'?></a>
                </td>


            </tbody>
            <?php 
      echo '</tr>';
      }
    }
   
      ?>
        </table>
    </div>
    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("studentTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (tr[i].id != "search") {
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
    </script>
</body>

</html>