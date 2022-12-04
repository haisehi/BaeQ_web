<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;

require('../carbon/autoload.php');
// printf("Now: %s", Carbon::now('Asia/Ho_Chi_Minh'));
// printf("1 day: %s", CarbonInterval::day()->forHumans());

include('config/db.php');
if (isset($_POST['thoigian'])) {
    $thoigian = $_POST['thoigian'];
} else {
    $thoigian = '';
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
}

if ($thoigian == '7days') {
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
} elseif ($thoigian == '28days') {
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(28)->toDateString();
} elseif ($thoigian == '90days') {
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(90)->toDateString();
} elseif ($thoigian == '365days') {
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
}

// $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

$sql = "SELECT *FROM tbl_thongke WHERE ngaydat BETWEEN '$subdays' AND '$now' ORDER BY ngaydat ASC";
$sql_query = mysqli_query($connect, $sql);
while ($val = mysqli_fetch_array($sql_query)) {
    $chart_data[] = array(
        'date' => $val['ngaydat'],
        'order' => $val['donhang'],
        'sales' => $val['doanhthu'],
        'quatity' => $val['soluongban'],
    );
}

echo $data = json_encode($chart_data);
