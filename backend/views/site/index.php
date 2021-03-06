<?php

use backend\models\Banhuakoo;
use backend\models\Bansongprag;
use backend\models\Bandonkri;
use backend\models\Bansanguan;
use backend\models\Walailak;
use backend\models\Bandumai;
use backend\models\Huatapan;
/* @var $this yii\web\View */

$this->title = 'Report System';
?>
<div class="site-index">

    <div class="body-content">

      <h2>ระบบเก็บข้อมูลจากแบบสอบถาม รพ.สต.</h2>
	  <ul class="list-group">
	    <li class="list-group-item">
	    	<a href="banhuakoo">รพ.สต.บ้านหัวคู ต.สระแก้ว </a>
	    	<span class="badge"><?= Banhuakoo::find()->count() ?></span>
	    </li>
	    <li class="list-group-item">
	    	<a href="bansongprag">รพ.สต.บ้านสองแพรก ต.โพธิ์ทอง</a>
	    	<span class="badge"><?= Bansongprag::find()->count() ?></span>
	    </li>
	    <li class="list-group-item">
	    	<a href="bandonkri">รพ.สต.บ้านดอนใคร ต.กลาย </a>
	    	<span class="badge"><?= Bandonkri::find()->count() ?></span>
	    </li>
	    <li class="list-group-item">
	    	<a href="walailak">รพ.สต.วลัยลักษณ์ </a>
	    	<span class="badge"><?= Walailak::find()->count() ?></span>
	    </li>
	    <li class="list-group-item">
	    	<a href="bansanguan">รพ.สต.บ้านสงวน </a>
	    	<span class="badge"><?= Bansanguan::find()->count() ?></span>
	    </li>
	    <li class="list-group-item">
	    	<a href="bandumai">รพ.สต.บ้านดุใหม่</a>
	    	<span class="badge"><?= Bandumai::find()->count() ?></span>
	    </li>
	    <li class="list-group-item">
	    	<a href="huatapan">รพ.สต.หัวตะพาน</a>
	    	<span class="badge"><?= Huatapan::find()->count() ?></span>
	    </li>
	  </ul>

    </div>
</div>
