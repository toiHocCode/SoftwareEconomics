<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác định chi phí phần mềm</title>
    <style>
/* form */
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
 * {box-sizing: border-box}

 h2, label{
   color: DodgerBlue;
 }
 h2{
    margin-left: 30%;
 }


input[type=number]:focus, input[type=password]:focus {
   outline: none;
 }
hr {
   border: 1px solid #f1f1f1;
   margin-bottom: 25px;
 }
button {
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 50%;
   opacity: 0.9;
 }
button:hover {
   opacity:1;
   background-color: #006400;
   font-weight: bold;
 }
.cancelbtn {
   padding: 14px 20px;
   background-color: #f44336;
 }
.signupbtn {
   float: left;
   width: 100%;
   border-radius:15px;
   border:0;
   box-shadow:4px 4px 10px rgba(0,0,0,0.2);
 }
.container {
   padding: 16px;

 }
.clearfix::after {
   content: "";
   clear: both;
   display: table;
 }


 .run{
    margin-left: 190px;
    margin-right: 190px;
    margin-top: 15px;
     box-sizing: border-box;
     box-shadow: 0 15px 25px rgba(0,0,0,.5);
     border-radius: 10px;
     padding: 12px 12px 12px 12px;
     border: 1px outset #FF6347;
     background: #FFF8DC;
}


    </style>
</head>

<body>



<?php
        $a7 =0;
        $a8 =0;
        $a9 =0;
        $a10 =0;
        $a11 =0;
        $a12 =0;
        $a13 =0;
        $h =0;
        $z1=0;
        $z2=0;
        $z3=0;
        $z4=0;
        $z5=0;
        $z6=0;
        $z7=0;
        $z8=0;
        $g=0;
        $e=0;
        $aucp=0;
        $uucp=0;
        $taw1=0;
        $taw2=0;
        $efw=0;
        $p=0;

    // Các Actor tương tác (TAW)
    if (isset($_POST['taw1'])&&isset($_POST['taw2'])&&isset($_POST['taw3'])) {
        $taw1 = $_POST['taw1'];
        $taw2 = $_POST['taw2'];
        $taw3 = $_POST['taw3'];

        $taw = $taw1 = $_POST['taw1']*1 + $taw2*2 +$taw3*3;
    }

    //Bảng tính toán điểm các trường hợp sử dụng			
    if (isset($_POST['b1'])&&isset($_POST['b2'])&&isset($_POST['b3'])&&isset($_POST['m1'])&&isset($_POST['m2'])&&isset($_POST['m3'])&&isset($_POST['t1'])&&isset($_POST['t2'])&&isset($_POST['t3'])) {
        $b1 = $_POST['b1'];
        $b2 = $_POST['b2'];
        $b3 = $_POST['b3'];

        $m1 = $_POST['m1'];
        $m2 = $_POST['m2'];
        $m3 = $_POST['m3'];

        $t1 = $_POST['t1'];
        $t2 = $_POST['t2'];
        $t3 = $_POST['t3'];

        $tbf = $b1*5 + $b2*10 + $b3*15 + $m1*6 +$m2*12 + $m3*18 + $t1*7.5 + $t2*15 + $t3*22.5;
        
    }

    //Bảng tính toán hệ số phức tạp kỹ thuật-công nghệ
    if (isset($_POST['a1'])&&isset($_POST['a2'])&&isset($_POST['a3'])&&isset($_POST['a4'])&&isset($_POST['a5'])&&isset($_POST['a6'])&&isset($_POST['a7'])&&isset($_POST['a8'])&&isset($_POST['a9'])&&isset($_POST['a10'])&&isset($_POST['a11'])&&isset($_POST['a12'])&&isset($_POST['a13'])) {
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $a3 = $_POST['a3'];
        $a4 = $_POST['a4'];
        $a5 = $_POST['a5'];
        $a6 = $_POST['a6'];
        $a7 = $_POST['a7'];
        $a8 = $_POST['a8'];
        $a9 = $_POST['a9'];
        $a10 = $_POST['a10'];
        $a11 = $_POST['a11'];
        $a12 = $_POST['a12'];
        $a13 = $_POST['a13'];

        $tfw1 = 2*$a1;
        $tfw2 = $a2;
        $tfw3 = $a3;
        $tfw4 = $a4;
        $tfw5 = $a5;
        $tfw6 = 0.5*$a6;
        $tfw7 = 0.5*$a7;
        $tfw8 = 2*$a8;
        $tfw9 = $a9;
        $tfw10 = $a10;
        $tfw11 = $a11;
        $tfw12 = $a12;
        $tfw13 = $a13;

        $tfw = $tfw1 + $tfw2+ $tfw3 + $tfw4 + $tfw5 + $tfw6 + $tfw7 + $tfw8 + $tfw9 + $tfw10 + $tfw11 + $tfw12 + $tfw13;

        $tcf = 0.6 + (0.01*$tfw);
       
    }			
    
    // Nội suy thời gian lao động (P)
    if (isset($_POST['z1'])&&isset($_POST['z2'])&&isset($_POST['z3'])&&isset($_POST['z4'])&&isset($_POST['z5'])&&isset($_POST['z6'])&&isset($_POST['z7'])&&isset($_POST['z8'])&&isset($_POST['h'])) {
        $z1 = $_POST['z1'];
        $z2 = $_POST['z2'];
        $z3 = $_POST['z3'];
        $z4 = $_POST['z4'];
        $z5 = $_POST['z5'];
        $z6 = $_POST['z6'];
        $z7 = $_POST['z7'];
        $z8 = $_POST['z8'];
      $h = $_POST['h'];

        $ef1 = 1.5*$z1;
        $ef2 = 0.5*$z2;
        $ef3 = $z3;
        $ef4 = 0.5*$z4;
        $ef5 = $z5;
        $ef6 = 2*$z6;
        $ef7 = -1*$z7;
        $ef8 = -1*$z8;
       
        if ($ef1 <=0) {
            $es1=0;
        }elseif($ef1 >0 && $ef1 <=1 ){
            $es1=0.05;
        }elseif($ef1 >1 && $ef1 <=2 ){
            $es1=0.1;
        }elseif($ef1 >2 && $ef1 <=3 ){
            $es1=0.6;
        }else{
            $es1=1;
        }
////////////////
        if ($ef2 <=0) {
            $es2=0;
        }elseif($ef2 >0 && $ef2 <=1 ){
            $es2=0.05;
        }elseif($ef2 >1 && $ef2 <=2 ){
            $es2=0.1;
        }elseif($ef2 >2 && $ef2 <=3 ){
            $es2=0.6;
        }else{
            $es2=1;
        }
//////////////.
            if ($ef3 <=0) {
            $es3=0;
        }elseif($ef3 >0 && $ef3 <=1 ){
            $es3=0.05;
        }elseif($ef3 >1 && $ef3 <=2 ){
            $es3=0.1;
        }elseif($ef3 >2 && $ef3 <=3 ){
            $es3=0.6;
        }else{
            $es3=1;
        }
        ///////
        if ($ef4 <=0) {
            $es4=0;
        }elseif($ef4 >0 && $ef4 <=1 ){
            $es4=0.05;
        }elseif($ef4 >1 && $ef4 <=2 ){
            $es4=0.1;
        }elseif($ef4 >2 && $ef4 <=3 ){
            $es4=0.6;
        }else{
            $es4=1;
        }
        //////////////////////
        if ($ef5 <=0) {
            $es5=0;
        }elseif($ef5 >0 && $ef5 <=1 ){
            $es5=0.05;
        }elseif($ef5 >1 && $ef5 <=2 ){
            $es5=0.1;
        }elseif($ef5 >2 && $ef5 <=3 ){
            $es5=0.6;
        }else{
            $es5=1;
        }
        /////////////
        if ($ef6 <=0) {
            $es6=0;
        }elseif($ef6 >0 && $ef6 <=1 ){
            $es6=0.05;
        }elseif($ef6 >1 && $ef6 <=2 ){
            $es6=0.1;
        }elseif($ef6 >2 && $ef6 <=3 ){
            $es6=0.6;
        }else{
            $es6=1;
        }
        //////////
        if ($ef7 <=0) {
            $es7=0;
        }elseif($ef7 >0 && $ef7 <=1 ){
            $es7=0.05;
        }elseif($ef7 >1 && $ef7 <=2 ){
            $es7=0.1;
        }elseif($ef7 >2 && $ef7 <=3 ){
            $es7=0.6;
        }else{
            $es7=1;
        }
        ///////////////////////
        if ($ef8 <=0) {
            $es8=0;
        }elseif($ef8 >0 && $ef8 <=1 ){
            $es8=0.05;
        }elseif($ef8 >1 && $ef8 <=2 ){
            $es8=0.1;
        }elseif($ef8 >2 && $ef8 <=3 ){
            $es8=0.6;
        }else{
            $es8=1;
        }
        /////
      $p=0;
        $efw =  $ef1 + $ef2 + $ef3 + $ef4 + $ef5 + $ef6 + $ef7 + $ef8;
        $es = $es1 + $es2 + $es3 + $es4 + $es5 + $es6 + $es7 + $es8;
        if ($es<1) {
            $p=48;
        }elseif ($es>=1 && $es<3) {
            $p=32;
        }else{
            $p=20;
        }
        $ef = 1.4 + (-0.03 * $efw);
        $uucp = $taw + $tbf;
        $aucp = $uucp*$ef*$tcf;
      
        $e= 10/6 *$aucp;
        
        $g = 1.4*$e*$p*$h;
       
    }			
  


    ?>

<section class="run">
    <form action="" method="post">
        <div class="container">
            <h2>XÁC ĐỊNH CHI PHÍ PHẦN MỀM</h2><br>
            <h3>Nhập giá trị các hạng mục để thực hiện</h3>
            <hr>

            <h4>I. Các Actor tương tác (TAW)</h4>

            <label for="email">Loại Actor: đơn giản </label>
            <input type="number" placeholder="<?php if(isset($_POST['taw1'])){echo $taw1;}else{echo 0;}  ?>" name="taw1" required>

            <label for="email"> trung bình</label>
            <input type="number" placeholder="<?php if(isset($_POST['taw2'])){echo $taw2;}else{echo 0;} ?>" name="taw2" required>

            <label for="email">phức tạp </label>
            <input type="number" placeholder="<?php if(isset($_POST['taw3'])){echo $taw3;}else{echo 0;} ?>" name="taw3" required>

            <!-- Điểm các trường hợp sử dụng (TBF) --> 
            <h4>II. Các trường hợp sử dụng (TBF)</h4>
            <label for="email"><b>1. Loại B: </b> đơn giản </label>
            <input type="number" placeholder="<?php if(isset($_POST['b1'])){echo $b1;}else{echo 0;} ?>" name="b1" required>
            <label for="email">   trung bình</label>
            <input type="number" placeholder="<?php if(isset($_POST['b2'])){echo $b2;}else{echo 0;} ?>" name="b2" required>
            <label for="email">phức tạp </label>
            <input type="number" placeholder="<?php if(isset($_POST['b3'])){echo $b3;}else{echo 0;} ?>" name="b3" required><br><br>

            <label for="email"> <b>2. Loại M: </b> đơn giản</label>
            <input type="number" placeholder="<?php if(isset($_POST['m1'])){echo $m1;}else{echo 0;} ?>" name="m1" required>
            <label for="email"> trung bình</label>
            <input type="number" placeholder="<?php if(isset($_POST['m2'])){echo $m2;}else{echo 0;} ?>" name="m2" required>
            <label for="email">phức tạp </label>
            <input type="number" placeholder="<?php if(isset($_POST['m3'])){echo $m3;}else{echo 0;} ?>" name="m3" required><br><br>

            <label for="email"> <b>3. Loại T: </b>đơn giản </label>
            <input type="number" placeholder="<?php if(isset($_POST['t1'])){echo $t1;}else{echo 0;} ?>" name="t1" required>
            <label for="email"> trung bình</label>
            <input type="number" placeholder="<?php if(isset($_POST['t2'])){echo $t2;}else{echo 0;} ?>" name="t2" required>
            <label for="email">phức tạp </label>
            <input type="number" placeholder="<?php if(isset($_POST['t3'])){echo $t3;}else{echo 0;} ?>" name="t3" required>


            <!-- Hệ số phức tạp về KT-CN (TCF)</ -->
            <h4>III. Hệ số phức tạp về KT-CN (TCF)</h4>
            <label for="email">1. Hệ thống phân tán </label>
            <input type="number" placeholder="<?php if(isset($_POST['a1'])){echo $a1;}else{echo 0;} ?>" name="a1" required><br><br>

            <label for="email">2. Tính chất đáp ứng tức thời hoặc yêu cầu đảm bảo thông lượng </label>
            <input type="number" placeholder="<?php if(isset($_POST['a2'])){echo $a2;}else{echo 0;} ?>" name="a2" required><br><br>

            <label for="email">3. Hiệu quả sử dụng trực tuyến </label>
            <input type="number" placeholder="<?php if(isset($_POST['a3'])){echo $b2;}else{echo 0;} ?>" name="a3" required><br><br>

            <label for="email">4. Độ phức tạp của xử lý bên trong </label>
            <input type="number" placeholder="<?php if(isset($_POST['a4'])){echo $a4;}else{echo 0;} ?>" name="a4" required><br><br>

            <label for="email">5. Mã nguồn phải tái sử dụng được </label>
            <input type="number" placeholder="<?php if(isset($_POST['a5'])){echo $a5;}else{echo 0;} ?>" name="a5" required><br><br>

            <label for="email">6. Dễ cài đặt </label>
            <input type="number" placeholder="<?php if(isset($_POST['a6'])){echo $a6;}else{echo 0;} ?>" name="a6" required><br><br>
      
            <label for="email">7. Dễ sử dụng </label>
            <input type="number" placeholder="<?php echo $a7; ?>" name="a7" required><br><br>

            <label for="email">8. Khả năng chuyển đổi </label>
            <input type="number" placeholder="<?php echo $a8; ?>" name="a8" required><br><br>

            <label for="email">9. Khả năng dễ thay đổi </label>
            <input type="number" placeholder="<?php echo $a9; ?>" name="a9" required><br><br>

            <label for="email">10. Sử dụng đồng thời </label>
            <input type="number" placeholder="<?php echo $a10; ?>" name="a10" required><br><br>

            <label for="email">11. Có các tính năng bảo mật đặc biệt </label>
            <input type="number" placeholder="<?php echo $a11; ?>" name="a11" required><br><br>

            <label for="email">12. Cung cấp truy nhập trực tiếp tới các phần mềm của các hãng thứ ba </label>
            <input type="number" placeholder="<?php echo $a12; ?>" name="a12" required><br><br>

            <label for="email">13. Yêu cầu phương tiện đào tạo đặc biệt cho người sử dụng </label>
            <input type="number" placeholder="<?php echo $a13; ?>" name="a13" required><br><br>

            <!--hệ số tác động môi trường và nhóm làm việc, hệ số phức tạp về môi trường, xác định độ ổn định kinh nghiệm và nội suy thời gian lao động (P)	-->
            <h4>IV. Hệ số PTMT - KN - Nội Suy</h4>
            <label for="email">1. Có áp dụng qui trình phát triển phần mềm theo mẫu RUP và có hiểu biết về RUP <br><br>
                hoặc quy trình phát triển phần mềm tương đương </label>
            <input type="number" placeholder="<?php echo $z1; ?>" name="z1" step=".001" required><br><br>

            <label for="email">2. Có kinh nghiệm về ứng dụng tương tự  </label>
            <input type="number" placeholder="<?php echo $z2; ?>" name="z2" step=".001" required><br><br>

            <label for="email">3. Có kinh nghiệm về hướng đối tượng  </label>
            <input type="number" placeholder="<?php echo $z3; ?>" name="z3" step=".001" required><br><br>

            <label for="email">4. Có khả năng lãnh đạo Nhóm </label>
            <input type="number" placeholder="<?php echo $z4; ?>" name="z4" step=".001" required><br><br>

            <label for="email">5. Tính chất năng động </label>
            <input type="number" placeholder="<?php echo $z5; ?>" name="z5" step=".001" required><br><br>

            <label for="email">6. Độ ổn định của các yêu cầu </label>
            <input type="number" placeholder="<?php echo $z6; ?>" name="z6" step=".001" required><br><br>

            <label for="email">7. Sử dụng các nhân viên làm bán thời gian </label>
            <input type="number" placeholder="<?php echo $z7; ?>" name="z7" step=".001" required><br><br>

            <label for="email">8. Dùng ngôn ngữ lập trình loại khó </label>
            <input type="number" placeholder="<?php echo $z8; ?>" name="z8" step=".001" required><br><br>

            <!-- LƯƠNG BÌNH QUÂN / NGƯỜI/ GIỜ -->
            <h4>V. LƯƠNG BÌNH QUÂN / NGƯỜI/ GIỜ</h4>
            <input type="number" placeholder="<?php echo $h; ?>" name="h" step=".001" required><br><br>



            <div class="clearfix">
                <button type="submit" class="signupbtn">Xác nhận</button><br>
            </div>
        </div>
    </form>

    </section>



<div>


 <!-- table -->
 
 <div class="row" style="margin-left: 250px; margin-top: 130px;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <h2>KẾT QUẢ</h2><br>
                <h4>BẢNG XÁC ĐỊNH GIÁ PHẦN MỀM</h4>
                    <table style="width: 70%; border-style:double; margin-top:20px; margin-left:10px; border-collapse:collapse;">
                        <!-- danh mục -->
                        <tr style="background-color:skyblue; ">
                            <th style="border-style:double; border-collapse:collapse; padding-left:10px; width: 60px;">Thứ tự</th>
                            <th style="border-style:double; border-collapse:collapse; padding-left:40px; width: 250px;">Hạng mục</th>
                            <th style="border-style:double; border-collapse:collapse; padding-left:10px;">Diễn giải</th>
                            <th style="border-style:double; border-collapse:collapse; padding-left:20px; width: 250px;">Giá trị</th>
                        </tr>
                        <!-- thông tin -->
                        
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;">I.</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><b>Tính điểm trường hợp sử dụng (Use-case)</b></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"></th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">1</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Điểm Actor (TAW)</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"><?php echo $taw; ?></th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">2</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Điểm Use-case (TBF)</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"><?php echo $tbf; ?></th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">3</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Tính điểm UUCP</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo 'UUCP = TAW +TBF'; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $uucp; ?></th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">4</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Hệ số phức tạp về KT-CN (TCF)</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo 'TCF = 0,6 + (0,01 x TFW)'; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"><?php echo $tcf; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">5</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Hệ số phức tạp về môi trường (EF)</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo 'EF = 1,4 + (-0,03 x EFW)'; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"><?php echo $ef; ?></th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">6</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Tính điểm AUCP</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo 'AUCP = UUCP x TCF x EF'; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"><?php echo $aucp; ?></th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;">II.</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><b>Nội suy thời gian lao động (P)</b></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> <?php echo 'P : người/giờ/AUCP'; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><?php echo $p; ?></th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;">III.</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><b>Giá trị nỗ lực thực tế (E)</b></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> <?php echo 'E = 10/6 x AUCP'; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><?php echo $e; ?></th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> IV.</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><b>Mức lương lao động bình quân (H)</b></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> <?php echo 'H: người/giờ '; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><?php echo $h; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;">V.</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><b>Giá trị phần mềm nội bộ (G)</b></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> <?php echo 'G = 1,4 x E x P x H'; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"><b><?php echo $g; ?> đồng</b></th>
                            </tr>

                            
                    <table style="width: 70%; border-style:double; margin-left:10px; border-collapse:collapse;">
                        <!-- danh mục -->
                        <br><h4>Tính toán hệ số tác động môi trường và nhóm làm việc, hệ số phức tạp về môi trường, xác định độ ổn định kinh nghiệm và nội suy thời gian lao động (P)					</h4>
                    
                        <tr style="background-color:skyblue; ">
                            <th style="border-style:double; border-collapse:collapse; padding-left:10px; width: 60px;">Thứ tự</th>
                            <th style="border-style:double; border-collapse:collapse; padding-left:10px; width: 250px;">Hệ số tác động môi trường</th>
                            <th style="border-style:double; border-collapse:collapse; padding-left:10px; width: 50px;">Trọng số</th>
                            <th style="border-style:double; border-collapse:collapse; padding-left:20px; width: 50px;">Giá trị xếp hạng</th>
                            <th style="border-style:double; border-collapse:collapse; padding-left:10px; width: 50px;">Kết quả</th>
                            <th style="border-style:double; border-collapse:collapse; padding-left:10px; width: 150px;">Độ ổn định kinh nghiệm</th>
                        </tr>
                        <!-- thông tin -->
                        
                        <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">I</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Hệ số tác động môi trường và nhóm làm việc (EFW)</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> <?php echo $efw; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Đánh giá cho từng thành viên</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                            </tr>

                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">1</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Có áp dụng qui trình phát triển phần mềm theo mẫu RUP và có hiểu biết về RUP hoặc quy trình phát triển phần mềm tương đương</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">1,5</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $z1; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $ef1; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $es1; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">2</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Có kinh nghiệm về ứng dụng tương tự </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">0,5</th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $z2; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $ef2; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $es2; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">3</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Có kinh nghiệm về hướng đối tượng </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">1</th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $z3; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $ef3; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $es3; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">4</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Có khả năng lãnh đạo Nhóm</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">0,5</th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $z4; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $ef4; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $es4; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">5</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Tính chất năng động</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">1</th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $z5; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $ef5; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $es5; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">6</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Độ ổn định của các yêu cầu</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">2</th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $z6; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $ef6; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $es6; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">7</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Sử dụng các nhân viên làm bán thời gian</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">-1</th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $z7; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $ef7; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $es7; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">8</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Dùng ngôn ngữ lập trình loại khó</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">-1</th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $z8; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $ef8; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> <?php echo $es8; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">II.</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Hệ số phức tạp về môi trường (EF)</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"></th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> <?php echo $ef; ?></th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">III.</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Độ ổn định kinh nghiệm (ES)</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"></th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> <?php echo $es; ?></th>
                            </tr>
                            <tr>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">IV.</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;">Nội suy thời gian lao động (P)</th>
                                <th style="border-style:double; border-collapse:collapse; padding-left:5px;"> </th>
                                 <th style="border-style:double; border-collapse:collapse; padding-left:5px; background: #FF6347;"> <?php echo $p; ?></th>
                            </tr>
                       
                    </table><br><br>
                   
                </div>


                </div>

            </div>
        </div>
    </div>

</body>

</html>