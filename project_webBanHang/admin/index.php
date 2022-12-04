<?php
require_once 'config/db.php';

session_start();
if (!isset($_SESSION['login'])) {
    header("Location:../admin/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/css/style.css">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- morris -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <!-- JS -->
    <script src="../../project_webBanHang/JS/main.js"></script>
    <title>Admin</title>
</head>

<body>


    <?php
    include("../admin/menu.php");
    include('../admin/main.php')
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('decription');
        CKEDITOR.replace('synopsis');
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            thongke();
            var char = new Morris.Area({
                element: 'myfirstchart',
                // data: [{
                //     year: '2008',
                //     order: 5,
                //     sales: 300000,
                //     quatity: 20
                // }, 
                //  ],
                xkey: 'date',
                ykeys: ['order', 'sales', 'quatity'],
                labels: ['Đơn hàng', 'Doanh thu', 'Số lượng'],
            });
            $('.select-date').change(function() {
                var thoigian = $(this).val();
                if (thoigian == '7days') {
                    var text = '7 ngày qua';
                } else if (thoigian == '28days') {
                    var text = '28 ngày qua';
                } else if (thoigian == '90days') {
                    var text = '90 ngày qua';
                } else if (thoigian == '365days') {
                    var text = '365 ngày qua';
                }
                $('#text-date').text(text);
                $.ajax({
                    url: "thongke.php",
                    method: 'POST',
                    dataType: 'JSON',
                    data: {
                        thoigian: thoigian
                    },
                    success: function(data) {
                        char.setData(data);
                        $('#text-date').text(text);
                    }
                })
            })

            function thongke() {
                var text = '365 ngày qua';
                $('#text-date').text(text);
                $.ajax({
                    url: "thongke.php",
                    method: 'POST',
                    dataType: 'JSON',

                    success: function(data) {
                        char.setData(data);
                        $('#text-date').text(text);
                    }
                })
            }
        })
    </script>
</body>

</html>