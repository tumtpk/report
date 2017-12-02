<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bandonkri".
 *
 * @property integer $id
 * @property string $a1
 * @property string $a2
 * @property string $a3
 * @property string $a4
 * @property string $a5
 * @property string $a6
 * @property string $a7
 * @property string $a8
 * @property string $a9
 * @property string $a10
 * @property string $a11
 * @property string $a12
 * @property string $a13
 * @property string $a14
 * @property string $a15
 * @property string $a16
 * @property string $a17
 * @property string $a18
 * @property string $a19
 * @property string $a20
 * @property string $a21
 * @property string $a22
 * @property string $a23
 * @property string $a24
 * @property string $a25
 * @property string $a26
 * @property string $a27
 * @property string $a28
 * @property integer $o1
 * @property integer $o2
 * @property integer $o3
 * @property integer $o4
 * @property integer $o5
 * @property integer $o6
 * @property integer $o7
 * @property integer $o8
 * @property integer $o9
 * @property integer $o10
 * @property integer $o11
 * @property integer $o12
 * @property integer $d1
 * @property integer $d2
 * @property integer $d3
 * @property integer $d4
 * @property integer $d5
 * @property integer $d6
 * @property integer $d7
 * @property integer $d8
 * @property integer $d9
 * @property integer $d10
 * @property string $r
 */
class Walailak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'walailak';
    }

    /**
     * @inheritdoc
     */
public function rules()
    {
        return [
            [['o1', 'o2', 'o3', 'o4', 'o5', 'o6', 'o7', 'o8', 'o9', 'o10', 'o11', 'o12', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10'], 'integer'],
            [['a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'a11', 'a12', 'a13', 'a14', 'a15', 'a16', 'a17', 'a18', 'a19', 'a20', 'a21', 'a22', 'a23', 'a24', 'a25', 'a26', 'a27', 'a28', 'r'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ลำดับ',
            'a1' => 'คำนำหน้า',
            'a2' => 'ชื่อ',
            'a3' => 'นามสกุล',
            'a4' => 'เลขที่ประจำตัวประชาชน',
            'a5' => 'อายุ',
            'a6' => 'วันเดือนปีเกิด',
            'a7' => 'น้ำหนัก',
            'a8' => 'ส่วนสูง',
            'a9' => 'บ้านเลขที่',
            'a10' => 'หมู่ที่',
            'a11' => 'ซอย',
            'a12' => 'ถนน',
            'a13' => 'ตำบล',
            'a14' => 'อำเภอ',
            'a15' => 'จังหวัด',
            'a16' => 'รหัสไปรษณีย์',
            'a17' => 'โทรศัพท์',
            'a18' => 'อาชีพ',
            'a19' => 'ประวัติการเจ็บป่วยในอดีต',
            'a20' => 'ประวัติการผ่าตัด',
            'a21' => 'โรคประจำตัว',
            'a22' => 'ยาที่รับประทานประจำ',
            'a23' => 'ประวัติการแพ้ยาหรืออาหาร',
            'a24' => 'การสูปบุหรี่/ยาเส้น',
            'a25' => 'ดื่มแอลกอฮอล์',
            'a26' => 'วันที่บันทึกครั้งแรก',
            'a27' => 'ชื่อ อสม.',
        	'a28' => 'นามสกุล อสม.',
            'o1' => 'O1',
            'o2' => 'O2',
            'o3' => 'O3',
            'o4' => 'O4',
            'o5' => 'O5',
            'o6' => 'O6',
            'o7' => 'O7',
            'o8' => 'O8',
            'o9' => 'O9',
            'o10' => 'O10',
            'o11' => 'O11',
            'o12' => 'O12',
            'd1' => 'D1',
            'd2' => 'D2',
            'd3' => 'D3',
            'd4' => 'D4',
            'd5' => 'D5',
            'd6' => 'D6',
            'd7' => 'D7',
            'd8' => 'D8',
            'd9' => 'D9',
            'd10' => 'D10',
        	'r' => 'รักษาที่',
        ];
    }
}
