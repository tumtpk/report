<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="Profile.xls"');# ชื่อไฟล์
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
    <th><b>คำนำหน้า</b></th>
    <th><b>ชื่อ</b></th>
    <th><b>นามสกุล</b></th>
    <th><b>เลขที่ประจำตัวประชาชน</b></th>
    <th><b>อายุ</b></th>
    <th><b>วันเดือนปีเกิด</b></th>
    <th><b>น้ำหนัก</b></th>
    <th><b>ส่วนสูง</b></th>
    <th><b>บ้านเลขที่</b></th>
    <th><b>หมู่ที่</b></th>
    <th><b>ซอย</b></th>
    <th><b>ถนน</b></th>
    <th><b>ตำบล</b></th>
    <th><b>อำเภอ</b></th>
    <th><b>จังหวัด</b></th>
    <th><b>รหัสไปรษณีย์</b></th>
    <th><b>โทรศัพท์</b></th>
    <th><b>อาชีพ</b></th>
    <th><b>ประวัติการเจ็บป่วยในอดีต</b></th>
    <th><b>ประวัติการผ่าตัด</b></th>
    <th><b>โรคประจำตัว</b></th>
    <th><b>ยาที่รับประทานประจำ</b></th>
    <th><b>ประวัติการแพ้ยาหรืออาหาร</b></th>
    <th><b>การสูปบุหรี่/ยาเส้น</b></th>
    <th><b>ดื่มแอลกอฮอล์</b></th>
    <th><b>วันที่บันทึกครั้งแรก</b></th>
    <th><b>ชื่อ อสม.</b></th>
    <th><b>นามสกุล อสม.</b></th>
</tr>
<?php foreach ($model as $obj){ ?>
	<tr>
	    <td><?=(int)$obj->id ?></td>
	    <td><?=$obj->a1 ?></td>
	    <td><?=$obj->a2 ?></td>
	    <td><?=$obj->a3 ?></td>
	    <td><?=$obj->a4 ?></td>
	    <td><?=(int)$obj->a5 ?></td>
	    <td><?=$obj->a6 ?></td>
	    <td><?=$obj->a7 ?></td>
	    <td><?=$obj->a8 ?></td>
	    <td><?=$obj->a9 ?></td>
	    <td><?=$obj->a10 ?></td>
	    <td><?=$obj->a11 ?></td>
	    <td><?=$obj->a12 ?></td>
	    <td><?=$obj->a13 ?></td>
	    <td><?=$obj->a14 ?></td>
	    <td><?=$obj->a15 ?></td>
	    <td><?=$obj->a16 ?></td>
	    <td><?=$obj->a17 ?></td>
	    <td><?=$obj->a18 ?></td>
	    <td><?=$obj->a19 ?></td>
	    <td><?=$obj->a20 ?></td>
	    <td><?=$obj->a21 ?></td>
	    <td><?=$obj->a22 ?></td>
	    <td><?=$obj->a23 ?></td>
	    <td><?=$obj->a24 ?></td>
	    <td><?=$obj->a25 ?></td>
	    <td><?=$obj->a26 ?></td>
	    <td><?=$obj->a27 ?></td>
	    <td><?=$obj->a28 ?></td>
	</tr>
<?php } ?>
</TABLE>
</BODY>
</HTML>
