<?php

/* @var $this yii\web\View */

$this->title = 'เว็บบอร์ด';
//$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- FORUM 1 -->
<table class="table table-vertical-middle margin-bottom-60">
    <thead>
    <tr class="size-15">
        <th class="weight-400">หมวดหมู่</th>
        <th class="text-center hidden-xs width-100 weight-300">หัวข้อ</th>
        <th class="text-center hidden-xs width-100 weight-300">โพสต์</th>
        <th class="text-center hidden-xs width-200 weight-300">ล่าสุด</th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td>
            <h4 class="nomargin size-16">
                <a href="page-forum-topic.html">
                    กฎการใช้งานเว็บบอร์ด
                </a>

            </h4>
        </td>
        <td class="text-center hidden-xs">
            <a href="#">12</a>
        </td>
        <td class="text-center hidden-xs">
            <a href="#">144</a>
        </td>
        <td class="hidden-xs text-center">
            <small class="block size-11 text-muted">3 เดือนที่แล้ว</small>
            <a class="size-13" href="#">โดย คมเคียว ตั้งประเสริฐ</a>
        </td>
    </tr>

    <tr>
        <td>
            <h4 class="nomargin size-16">
                <a href="page-forum-topic.html">
                    ทั่วไป
                </a>


            </h4>
        </td>
        <td class="text-center hidden-xs">
            <a href="#">18</a>
        </td>
        <td class="text-center hidden-xs">
            <a href="#">55</a>
        </td>
        <td class="hidden-xs text-center">
            <small class="block size-11 text-muted">2 วันที่แล้ว</small>
            <a class="size-13" href="#">โดย คมเคียว ตั้งประเสริฐ</a>
        </td>
    </tr>

    <tr>
        <td>
            <h4 class="nomargin size-16">
                <a href="page-forum-topic.html">
                    ประชาสัมพันธ์
                </a>


            </h4>
        </td>
        <td class="text-center hidden-xs">
            <a href="#">3</a>
        </td>
        <td class="text-center hidden-xs">
            <a href="#">67</a>
        </td>
        <td class="hidden-xs text-center">
            <small class="block size-11 text-muted">1 ชั่วโมงที่แล้ว</small>
            <a class="size-13" href="#">โดย คมเคียว ตั้งประเสริฐ</a>
        </td>
    </tr>

    <tr>
        <td>
            <h4 class="nomargin size-16">
                <a href="page-forum-topic.html">
                    การศึกษา
                </a>

            </h4>
        </td>
        <td class="text-center hidden-xs">
            <a href="#">1</a>
        </td>
        <td class="text-center hidden-xs">
            <a href="#">27</a>
        </td>
        <td class="hidden-xs text-center">
            <small class="block size-11 text-muted">2 เดือน, 4 สัปดาห์ ที่แล้ว</small>
            <a class="size-13" href="#">โดย คมเคียว ตั้งประเสริฐ</a>
        </td>
    </tr>

    </tbody>
</table>
<!-- /FORUM 1 -->



