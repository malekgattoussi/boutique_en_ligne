<?php
include('config.php');?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <title>liste items</title>
    <link rel="icon" href="css/bootstrap.min.css">
</head>
<body style="margin-top: 100px;">
<div class="container" >
    <table class="table">
        <thead>
        <tr>
            <th>liste items</th>
            </tr></thead><tbody>
        <?php
        $fetchquery = mysql_query("select * from items") or die("not selected !" .mysql_error());
        $sr=1;
        while($row = mysql_fetch_array($fetchquery)) {?>
           <tr>
            <td><?php echo $sr;?></td>
            <td><?php echo $row['description'];?></td>

            <td>
                <form action="" method="post">
        <input type="checkbox" name="records[]" value="<?php echo $row['id'];?>">
                </td></tr>
<?php $sr++;
        }
     ?> 
     
     <?php 
     if (isset($_POST['deleteBtn'])) {
        $numberOfCheckbox = count($_POST['records']);
        $i =0;
        while($i<$numberOfCheckbox){
            $keyToDelete = $_POST['records'][$i];
        mysql_query("DELETE from items where id = '$keyToDelete'");
        $i++;}
        
        header('location:checkbox.php');
        }
        ?>
     <!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type = "text/javascript">
$(document).ready(function () {
    $('#submitBtn').click (function() {
        var selected = new Array();
   $("input:checkbox[name=programming]:checked").each(function() {
    selected.push($(this).val());
   });
  var selectedString = selected.join(",");
        $.post("ajaxcheckboxvalue.php", {selected: selected },
        function(data){
            $('.result').html(data);
        });  
    });
});
</script>
</head>
<body>
<div class="container">
 <div class="row">
     <div class="col-md-6 offset-md-3">
 <div class="form centrer">
    <form method="post" enctype="multipart/form-data">
  <input type="submit" name="ajouterBtn" id="ajouterBtn" class="btn btn-success" onclick="return validateForm();" value="ajouter " style="float: right"/>
  <input type="submit" name="modifierBtn" id="modifierBtn" class="btn btn-success" onclick="return validateForm();" value="modifier" style="float: right"/>
   <input type="submit" name="deleteBtn" id="deleteBtn" class="btn btn-success" onclick="return validateForm();" value="Delete " style="float: right"/><br>
   
   <input type="text" name="text" value="hidden input text " style="margin:50px 0">
</form>
  <div class="card" style="margin:50px 0">
                <div class="card-header">liste items</div>
    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        les pc asus
                                <label class="checkbox">
                                        <input type="checkbox" name="programming" value="  les pc asus"/>
                                        <span class="default"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        les télévision samsung
                                    <label class="checkbox">
                                        <input type="checkbox" name="programming" value="les télévision samsung"/>
                                        <span class="primary"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        les matériels éléctroménager
                                    <label class="checkbox">
                                        <input type="checkbox" name="programming" value="Bootstrap Checkbox Success"/>
                                        <span class="success"></span>
                                    </label>
                    </li>
                    <li class="list-group-item">
                        les climatisseur LG
                                    <label class="checkbox">
                                        <input type="checkbox" name="programming" value="Bootstrap Checkbox Info"/>
                                        <span class="info"></span>
                                    </label>
                    </li>
                    
                </ul>
     
  </div>
 </div>
</div>
<style>
  @keyframes check {0% {height: 0;width: 0;}
    25% {height: 0;width: 10px;}
    50% {height: 20px;width: 10px;}
  }
  .checkbox{background-color:#fff;display:inline-block;height:28px;margin:0 .25em;width:28px;border-radius:4px;border:1px solid #ccc;float:right}
  .checkbox span{display:block;height:28px;position:relative;width:28px;padding:0}
  .checkbox span:after{-moz-transform:scaleX(-1) rotate(135deg);-ms-transform:scaleX(-1) rotate(135deg);-webkit-transform:scaleX(-1) rotate(135deg);transform:scaleX(-1) rotate(135deg);-moz-transform-origin:left top;-ms-transform-origin:left top;-webkit-transform-origin:left top;transform-origin:left top;border-right:4px solid #fff;border-top:4px solid #fff;content:'';display:block;height:20px;left:3px;position:absolute;top:15px;width:10px}
  .checkbox span:hover:after{border-color:#999}
  .checkbox input{display:none}
  .checkbox input:checked + span:after{-webkit-animation:check .8s;-moz-animation:check .8s;-o-animation:check .8s;animation:check .8s;border-color:#555}
.checkbox input:checked + .default:after{border-color:#444}
.checkbox input:checked + .primary:after{border-color:#2196F3}
.checkbox input:checked + .success:after{border-color:#8bc34a}
.checkbox input:checked + .info:after{border-color:#3de0f5}
.form {
    display: block;
    background: #fff;
    padding: 30px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    float: right;

    
}
.form.centrer {
    max-width: 460px;
    margin: 50px auto;
}

</style>
</body>
</html>
