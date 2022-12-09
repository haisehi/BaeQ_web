<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="../project_webBanHang/CSS/main.css" />
    <link rel="stylesheet" href="../project_webBanHang/CSS/style.css" />
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../project_webBanHang/JS/main.js"></script>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap 4 -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>trang chủ</title>
</head>

<body>
    <div class="app">
        <?php
        session_start();
        include("../project_webBanHang/pages/header.php");
        include("../project_webBanHang/pages/main.php");
        include("../project_webBanHang/pages/footer.php");
        ?>
    </div>
</body>
<script type="text/javascript">
    tabs();
</script>
<script type="text/javascript">
    // $(document).ready(function() {

    //     var back = $(".prev");
    //     var next = $(".next");
    //     var steps = $(".step");

    //     next.bind("click", function() {
    //         $.each(steps, function(i) {
    //             if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) {
    //                 $(steps[i]).addClass('current');
    //                 $(steps[i - 1]).removeClass('current').addClass('done');
    //                 return false;
    //             }
    //         })
    //     });
    //     back.bind("click", function() {
    //         $.each(steps, function(i) {
    //             if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) {
    //                 $(steps[i + 1]).removeClass('current');
    //                 $(steps[i]).removeClass('done').addClass('current');
    //                 return false;
    //             }
    //         })
    //     });

    // })
</script>

</html>