<?php

/* @var $this yii\web\View */

$this->title = 'ปฏิทิน';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h3 align="center">ปฏิทินกำหนดการโครงงาน <br>
    ภาควิชาวิทยาศาสตร์คอมพิวเตอร์
    คณะวิทยาศาสตร์ <br>มหาวิทยาลัยขอนแก่น
   ปีการศึกษา 2560
</h3>
<form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data"
      data-success="Sent! Thank you!" data-toastr-position="top-right">

    <!-- required [php action request] -->
    <input type="hidden" name="action" value="contact_send"/>

    <br>
    <div class="">
        <table class="table table-bordered nomargin">
            <thead>
            <tr>
                <th style="width: 10%">ลำดับ</th>
                <th style="width: 40%">กิจกรรม </th>
                <th style="width: 20%">ช่วงวันที่ </th>
                <th style="width: 30%">แบบฟอรม์ที่ใช้</th>




            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>นัดประชุมนักศึกษาชี้แจงการเรียนวชิาโครงงาน
                    คอมพิวเตอร์
                </td>
                <td>4-พ.ค</td>
                <td> - ปฏทิินการด าเนินงาน , เกณฑ์การ
                    ประเมินผล
                </td>




            </tr>
            <tr>
                <td>2</td>
                <td>นักศึกษาพบอาจารย์ที่ปรึกษาโครงงานเพื่อเสนอ
                    แนวคิดการทำโครงงาน
                </td>
                <td>5-29 พ.ค.</td>
                <td>- แบบเสนอหัวข้อโครงงาน</td>



            </tr>
            <tr>
                <td>3</td>
                <td>นักศึกษาบันทึกหัวข้อโครงงานลงระบบ e-project
                    และส่งหัวข้อโครงงานที่อาจารย์ผู้ประสานงาน
                </td>
                <td>5-29 พ.ค</td>
                <td> - แบบเสนอหวัข้อโครงงานที่พมิพจ์ ากระบบ
                    e-project พร้อมลายเซ็น อ.ที่ปรึกษาโครงงาน
                    เอกสำรที่ตอ้งส่งเพมิ่ กรณไีมผ่ ่ำนเกณฑ์
                    - แบบฟอร์มขอลงทะเบียนเป็นกรณีพิเศษ
                    - ใบตรวจสอบจบ และผลการเรียน
                </td>



            </tr>

            <tr>
                <td>4</td>
                <td>ส่งรายงานเค้าโครงโครงงานคอมพิวเตอร์(ถ้าไม่ส่ง
                    จะถูกตัดสิทธกิ์ ารลง Project 1 )
                </td>
                <td>25-ส.ค.</td>
                <td>-เค้าโครงโครงงานคอมพิวเตอร์พร้อม
                    ลายเซ็น อ.ที่ปรึกษาโครงงาน
                </td>



            </tr>



            </tbody>
        </table>
        <br>
        <button type="button" class="btn btn-default pull-right"  >ดาวน์โหลด</button>
        <button type="button" class="btn btn-default pull-right"  >สั่งพิมพ์</button>


    </div>


</form>
