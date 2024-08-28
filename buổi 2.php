<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI TẬP VỀ NHÀ BUỔI 2</title>
</head>
<body>
<?php
$phim= "  bầu trời rực rỡ  ";
$name="Nguyen Thu Thuy";
echo"Ta có chuỗi 1: " , $name, '<br>';
echo"1. Số kí tự trong chuỗi là: " ,strlen($name),'<br>';
echo"2. Số từ trong chuỗi là: ",str_word_count($name),'<br>';
echo"3. Đảo ngược chuỗi: ", strrev($name),'<br>';
echo"4. Tìm kiếm 1 chuỗi con / tìm kiếm chữ Thuy: ", strpos($name,"Thuy"),'<br>';
echo"5. Thay thế chuỗi con trong chuỗi bằng 1 chuỗi khác / thay thế chữ Thu Thuy bằng Đinh Đat : ", str_replace("Thu Thuy","Đinh Đat",$name),'<br>';
echo"6. Kiểm tra 1 chuỗi có bắt đầu bằng 1 chuỗi con khác không: So sánh Thu Thuy và Thu Ngan, kết quả là: ", strncmp("Thu Thuy","Thu Ngan",3),'<br>';
echo"7. Chuyển đổi 1 chuỗi thành chữ hoa: ", strtoupper($name),'<br>';
echo"8. Chuyển đổi 1 chuỗi thành chữ thường: ", strtolower($name),'<br>';
echo"Ta có chuỗi 2: " ,$phim, '<br>';
echo"9. Chuyển đổi 1 chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ: ", ucwords($phim),'<br>';
echo"10. Loại bỏ khoảng trắng ở đầu và cuối chuỗi: ",trim($phim),'<br>';
echo"11. Loại bỏ kí tự đầu tiên của 1 chuỗi: " , ltrim($phim," b"),'<br>';
echo"12. Loại bỏ kí tự cuối cùng của 1 chuỗi: ", rtrim($phim," ỡ"),'<br>';
echo"13. Tách 1 chuỗi thành 1 mảng các phần tử: ",'<br>';
print_r(explode(' ',$name)); echo '<br>';
$array= array( 'cam','quýt','mít','dừa');
echo "Ta có mảng: "; print_r($array) ; echo '<br>';
echo"14. Nối các phần tử của 1 mảng thành 1 chuỗi: ", implode(' , ',$array),'<br>';
$themdau= str_pad($name,strlen($name) + strlen($phim),$phim,STR_PAD_LEFT);
echo"15.1. Thêm 1 chuỗi vào đầu của 1 chuỗi khác: ", $themdau, '<br>';
$themcuoi= str_pad($name,strlen($name) + strlen($phim),$phim,STR_PAD_RIGHT);
echo"15.2. Thêm 1 chuỗi vào cuối của 1 chuỗi khác: ", $themcuoi, '<br>';
echo"16. Kiểm tra 1 chuỗi có kết thúc bằng 1 chuỗi con khác không: ";
$name2= "Thuy";
$cuoi= strrchr($name,$name2[0]);//tìm phần chuỗi bắt đầu từ ký tự đầu tiên của $name2
echo($cuoi===$name2)?
"Chuỗi '$name' kết thúc bằng '$name2'" : "Chuỗi '$name' không kết thúc bằng '$name2'";
echo'<br>';
echo"17. Kiểm tra xem 1 chuỗi có chứa 1 chuỗi con khác không: ";
$name3= "Thu";
$t17= strstr($name,$name3);//trả về phần chuỗi từ vị trí bắt đầu tìm thấy $name3 cho đến hết chuỗi. Nếu không tìm thấy, nó sẽ trả về false.
echo($t17)?
"Chuỗi '$name' có chứa chuỗi '$name3'" : "Chuỗi '$name' không chứa chuỗi '$name3'";
echo'<br>';
echo"18. Thay thế tất cả kí tự trong 1 chuỗi không phải là chữ cái hoặc số bằng 1 ký tự khác: ",'<br>';
$goc= " Xin chào! Ngày 2/9 bạn có được đi chơi cùng tớ không?";
$kitu= "_";
echo "Ta có chuỗi '$goc' được chuyển thành: ", preg_replace("/[^a-zA-Z0-9]/", $kitu, $goc),'<br>';
echo" 19. Kiểm tra 1 chuỗi có phải là một số nguyên hay không: ",'<br>';
$input1 = 'tôi là 123';
if (is_int($input1)) {
    echo "'$input1' thuộc kiểu số nguyên";
}else{
    echo "'$input1' không thuộc kiểu số nguyên";
}
echo'<br>';
echo" 20. Kiểm tra 1 chuỗi có phải là 1 email hợp lệ hay không: ",'<br>';
$email = "anhzai@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "'$email' là một email hợp lệ.";
} else {
    echo "'$email' không phải là một email hợp lệ.";
}
?>
</body>
</html>