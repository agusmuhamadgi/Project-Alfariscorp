<?php 
include "menu.php" ;
include "config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
<!--Script CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<!--Script Javascript-->
<script language="javascript" src="js/jquery-1.9.1.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alfaris</title>

        <link type="text/css" rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />
    
        <script src="development-bundle/jquery-1.8.0.min.js"></script>
        <script src="development-bundle/ui/ui.core.js"></script>
        <script src="development-bundle/ui/ui.datepicker.js"></script>
        <script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#tanggal").datepicker({
                dateFormat : "yy-mm-dd",
                changeMonth : true,
                changeYear : true
            });
        });
        </script>
</head>
<body>
<div id="home">
    <div id="isi">
    <center>
        <?php 
        $id = $_GET['id'];

        $query = mysql_query("select * from mst_keluar where no_id='$id'") or die(mysql_error());

        $data = mysql_fetch_array($query);
        ?>

        <form name="edit" action="edit_action_ex.php" method="post">
        <input type="hidden" name="no_id" value="<?php echo $id; ?>" />
        <table border="0" cellpadding="5" cellspacing="0">
            <tbody>
                
                <tr>
                    <td>Perihal</td>
                    <td>:</td>
                    <td><input type="text" name="perihal" maxlength="20" required="required" value="<?php echo $data['perihal']; ?>"/></td>
                </tr>
                <tr>
                    <td>Pengirim</td>
                    <td>:</td>
                    <td><input type="text" name="pengirim" maxlength="100" required="required" value="<?php echo $data['pengirim']; ?>" /></td>
                </tr>
                <tr>
                    <td>Nominal</td>
                    <td>:</td>
                    <td><input type="text" name="nominal" required="required" value="<?php echo $data['nominal']; ?>"/></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="text" name="tanggal" id="tanggal" required="required" value="<?php echo $data['tanggal']; ?>"/></td>
                </tr>
                <tr>
                    <td align="right" colspan="3" ><button class="btn btn-primary">Save</button></td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
    <div id="isi1">
            
            <div style="padding:3px;overflow:auto;width:auto;height:300px;border:0px solid blue" >
            <div class="table table-striped">
            <table border="1" cellpadding="5" cellspacing="0" class="table">
                <thead>
                
                    <tr>
                        <td><center>No.</center></td>
                        <td><center>Perihal</center></td>
                        <td><center>Pengirim</center></td>
                        <td><center>Nominal</center></td>
                        <td><center>Tanggal</center></td>
                        <td><center>Action</center></td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $query = mysql_query("select * from mst_keluar ");
                $no = 1;
                if ($query === FALSE){
                    die(mysql_error());
                }               
                while ($data = mysql_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td width="250px"><?php echo $data['perihal']; ?></td>
                        <td><?php echo $data['pengirim']; ?></td>
                        <td><?php echo $data['nominal']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td>
                            <a href="edit_ex.php?id=<?php echo $data['user_id']; ?>"><button class="btn btn-primary">Edit</button></a> || 
                            <a href="delete.php?id=<?php echo $data['user_id']; ?>"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                <?php 
                    $no++;
                } 
                ?>
                </tbody>
            </table>
            </div>
            </div>
            </div>

    </center>
</div>
</body>
</html>