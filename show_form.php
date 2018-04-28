
<?php
/**
 * Developed by AVA - A.Avetisov.
 * Date: 20.09.2015
 * Time: 20:46
 */


include 'conn.php';

$rs = mysql_query('select * from person_photos where person_id ='.$_REQUEST['id']);
$row = mysql_fetch_array($rs);

$rs2 = mysql_query('select * from persons where id ='.$_REQUEST['id']);
$row2 = mysql_fetch_array($rs2);

if($row['rec_image']!=null)
 $image1 = '<img style="height:150px; padding:2px; border:1px solid #ccc" src="data:image/jpeg;base64,'. base64_encode( $row['rec_image'] ).'"/>';
else
 $image1= '<img style="height:150px; padding:2px; border:1px solid #ccc" src="images/no_image.jpg"/>';

if($row['don_image']!=null)
    $image2 = '<img style="height:150px; padding:2px; border:1px solid #ccc" src="data:image/jpeg;base64,'. base64_encode( $row['don_image'] ).'"/>';
else
    $image2= '<img style="height:150px; padding:2px; border:1px solid #ccc" src="images/no_image.jpg"/>';

//echo '<img style="height:150px; padding:2px; border:1px solid #ccc" src="data:image/jpeg;base64,'.base64_encode( $row['rec_image'] ).'"/>';

?>
<div style="float: left">
    <form method="post" action="upload_image.php?imagefile=1" enctype="multipart/form-data">
        <table  style="width:100%;background:#fafafa;padding:5px;margin-top:5px;">
            <tr>
                <td>
                    <table >
                        <tr>
                            <td colspan="2">
                                <div ><?php echo $image1;?></div>
                            </td>
                            <td rowspan="2" width="500" style="padding: 6px; vertical-align: top"><?php echo $row2["rec_details"]; ?></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="id"  /><input type="file" name="imgfile"/></td>
                            <td><input type="submit" name="submit" value="Save"/></td>
                        </tr>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

    </form>
</div>

<div style="float: right">
    <form method="post" action="upload_image.php?imagefile=2" enctype="multipart/form-data">
        <table  style="width:100%;background:#fafafa;padding:5px;margin-top:5px;">
            <tr>
                <td>
                    <table >
                        <tr>
                            <td colspan="2">
                                <div ><?php echo $image2;?></div>
                            </td>
                            <td rowspan="2" width="500" style="padding: 6px; vertical-align: top"><?php echo $row2["don_details"]; ?></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="id"  /><input type="file" name="imgfile2"/></td>
                            <td><input type="submit" name="submit" value="Save"/></td>
                        </tr>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

    </form>
</div>