
<?php

session_start();
if (isset($_SESSION['report'])) {
    $report = $_SESSION['report'];

    if (count($report) > 1) {

        $establishmentName = $report['establishment'];
        $currentDate = $report['date'];
        $student_Name = $report['student_Name'];
        $student_class = $report['student_class'];
        $quart = $report['quart'];
        $headTeacherName = $report['teacher'];
        $subjects = $report['subjects'];
        $logo = $report['logo'];
        
    ?>
    
<html class="" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta content="Stock management template" name="description">

    <title><?php echo $establishmentName; ?></title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        table, th {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        td {
            border-right: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        .align-start {
            text-align: start;
        }

        .flex {
            display: flex;
            justify-content: center;
        }

        .text-center {
            text-align: center;
        }

        .m-2 {
            margin: 20px;
        }

        .ml-4 {
            margin: 0px 0px 0px 40px;
        }

        .ml-8 {
            margin: 0px 0px 0px 80px;
        }

        .my-8 {
            margin: 60px 0px;
        }

        .mt-1 {
            margin-top: 10px;
        }

        .end{
            text-align: end;
        }

        #report {
            width: 70%;
        }


    </style>

<body>
    <div id="report">
        <!-- Header  -->
        <div class="flex">
            <img src="<?php echo $logo; ?>" style="height:75px;" />
            <div style="padding: 20px 40px;" class="text-center">
                <h3>COIMBATORE INSTITUTE OF TECHNOLOGY </h3>
                <p style="font-size: 13px;">(Autonomous Institution Affailiated to Anna University, Chennai)</p>
            </div>
        </div>

        <!-- Grade Sheet -->
        <h2 class="text-center m-2">GRADE SHEET</h4>

        <!-- Personal Details -->
        <div style="font-size: 12px;" class="flex">
            <div>
                <p class="mt-1">COURSE</p>
                <p class="mt-1">BRANCH</p>
                <p class="mt-1">REGISTER NUMBER</p>
            </div>
            <div class="ml-4">
                <p class="mt-1">:</p>
                <p class="mt-1">:</p>
                <p class="mt-1">:</p>
            </div>
            <div class="ml-4">
                <p class="mt-1"> B.E.</p>
                <p class="mt-1"> COMPUTER SCIENCE AND ENGINEERING</p>
                <p class="mt-1"> 2005032</p>
            </div>
            <div>
                <img src="img/musk.jpg" style="height: 90px;" class="ml-8"/> 
            </div>
        </div>

        <!-- Marks -->
        <div class="my-8">
            <table style="margin: auto;">
                <tr class="">
                    <th>COURSE CODE</th>
                    <th>COURSE TITLE</th>
                    <th>CREDIT</th>
                    <th>GRADE</th>
                </tr>
                <tr>
                    <td>19CI31</td>
                    <td class="align-start">DATA STRUCTURES AND ALGORITHMS - 1 </td>
                    <td>1.0</td>
                    <td>O</td>
                </tr>
                <tr>
                    <td>19MEL11</td>
                    <td class="align-start">ENGINEERING GRAPHICS</td>
                    <td>2.0</td>
                    <td>O</td>
                </tr>
                <tr>
                    <td>19CS21</td>
                    <td class="align-start">C PROGRAMMING</td>
                    <td>3.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>19CS47</td>
                    <td class="align-start">OPERATING SYSTEMS</td>
                    <td>4.0</td>
                    <td>O</td>
                </tr>
                <tr>
                    <td>19CS98</td>
                    <td class="align-start">COMPUTER ARCHITECTURE</td>
                    <td>4.0</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>19CS11</td>
                    <td class="align-start">SOFTWARE ENGINEERING</td>
                    <td>3.0</td>
                    <td>A</td>
                </tr>
            </table>
        </div>

        <!-- Signature -->
        <div class="flex">
            <div style="width: 60%;"></div>
            <div style="width: 40%; text-align: center;" >
                <img src="img/sign.png" height="50px" />
                <p style="font-size: 15px; text-align: end;">CONTROLLER OF EXAMINATION</p>
            </div>
        </div>    
    </div>
</body>
<div id="putain">
    <div class="form-group row">
        <br/>
        <div class="col-md-7">
            <button class="btn btn-primary" onclick="printF()" id="imprimt">
                <i class="fa fa-btn fa-sign-in"></i>Imprimer
            </button>
            <a href="/agence_A" id="back-link">
                <button class="btn btn-danger">
                    <i class="fa fa-btn fa-sign"></i>BACK
                </button>
            </a>
        </div>
    </div>
    <script>
        function prins() {
            window.print();
            document.getElementById("imprimt").style.display = "block"; // Réaffiche le bouton d'impression après l'impression
            document.getElementById("back-link").style.display = "inline-block"; // Réaffiche le bouton BACK après l'impression
        }
        
        function printF() {
            if (confirm('Are you sure ? Vous ne pourrez rien modifier') == true) {
                document.getElementById("imprimt").style.display = "none"; // Cache le bouton d'impression avant l'impression
                document.getElementById("back-link").style.display = "none"; // Cache le bouton BACK avant l'impression
                setTimeout(prins, 50);
            }
        }
    </script>
</div>

</html>

    <?php  
    } else {
        echo 'go back';
    }
}else{
    echo 'go back';
}
?>