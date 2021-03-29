<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <div>
            <form method="post" action="">
                Toán : <input type="text" name="toan" value=""/> <br/>
                Lý : <input type="text" name="ly" value=""/> <br/>
                Hóa : <input type="text" name="hoa" value=""/> <br/>
            </form>
        </div>
        <br>
        <?php
        if (isset($_POST['cal']))
        {
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            if ($toan < 0 || $toan > 10){
                echo 'Điểm môn Toán phải từ 0 -> 10';
            }
            else if ($ly < 0 || $ly > 10){
                echo 'Điểm môn Lý phải từ 0 -> 10';
            }
            else if ($hoa < 0 || $hoa > 10){
                echo 'Điểm môn Hóa phải từ 0 -> 10';
            }
            else if ($toan <= 4 || $ly <= 4 || $hoa <= 4){
                echo 'Xếp loại yếu';
            }
            else {
                $diemTrungBinh = ($toan + $ly + $hoa) / 3;
                if ($diemTrungBinh < 5){
                    echo "Xếp loại yếu";
                }
                else if ($diemTrungBinh >= 5 && $diemTrungBinh < 6.5){
                    echo "Xếp loại trung bình";
                }
                else if ($diemTrungBinh >= 6.5 && $diemTrungBinh < 7){
                    echo "Xếp loại khá";
                }
                else {
                    echo "Xếp loại giỏi";
                }
            }
        }
        ?>
    </body>
</html>
