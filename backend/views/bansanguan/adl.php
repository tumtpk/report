<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="Adl.xls"');# ชื่อไฟล์
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<HTML>
<HEAD>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</HEAD>

<BODY>
<TABLE  x:str BORDER="1">
<tr>
    <th><b>ลำดับ</b></th>
    <th><b>ข้อที่ 1</b></th>
    <th><b>ข้อที่ 2</b></th>
    <th><b>ข้อที่ 3</b></th>
    <th><b>ข้อที่ 4</b></th>
    <th><b>ข้อที่ 5</b></th>
    <th><b>ข้อที่ 6</b></th>
    <th><b>ข้อที่ 7</b></th>
    <th><b>ข้อที่ 8</b></th>
    <th><b>ข้อที่ 9</b></th>
    <th><b>ข้อที่ 10</b></th>
    <th><b>ข้อที่ 11</b></th>
    <th><b>ข้อที่ 12</b></th>
</tr>
<?php foreach ($model as $obj){ ?>
	<tr>
	    <td><?=(int)$obj->id ?></td>
	    <td><?=$obj->o1 ?></td>
	    <td><?=$obj->o2 ?></td>
	    <td><?=$obj->o3 ?></td>
	    <td><?=$obj->o4 ?></td>
	    <td><?=$obj->o5 ?></td>
	    <td><?=$obj->o6 ?></td>
	    <td><?=$obj->o7 ?></td>
	    <td><?=$obj->o8 ?></td>
	    <td><?=$obj->o9 ?></td>
	    <td><?=$obj->o10 ?></td>
	    <td><?=$obj->o11 ?></td>
	    <td><?=$obj->o12 ?></td>
	</tr>
<?php } ?>
</TABLE>
</BODY>
</HTML>
