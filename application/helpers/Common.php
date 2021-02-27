<?php

if (!function_exists('validation')) {
    function validation($data) {
        $validData = trim($data);
        $validData = stripcslashes($validData);
        $validData = htmlspecialchars($validData);

        return $validData;
    }
}

if ( ! function_exists('thumb'))
{
    function thumb($image,$size='450x280',$type=1){	
	    return base_url('thumb/'.$size.'/'.$type.'/'.$image);
	}
}

if ( ! function_exists('getExtFile'))
{
    function getExtFile($string) {
        $temp = explode(".",$string);
        $ext = $temp[count($temp)-1];
        if($ext == "")
            $ext = "file";
        return $ext;
    }
}

if ( ! function_exists('max_len'))
{
    function max_len($string = "", $num = 20){	
	    if(strlen($string) > $num)
	    {
	    	$result = substr($string,0,$num); //cut string with limited number
	    	$position = strrpos($result," "); //find position of last space
	    	if($position)
	    		$result = substr($result,0,$position); //cut string again at last space if there are space in the result above    	
	    	$result .= '...';
	    }
	    else {
	    	$result = $string;    	
	    }    
	    return $result;
	}
}

if ( ! function_exists('get_id'))
{
    function get_id($string) {
        if($string == "")
            return 0;
        if($string == "0")
            return 0;
        $temp = explode("-",$string);
        $temp2 = explode(".",$temp[count($temp)-1]);

        $string = (int)$temp2[0];
        if($string == 0)
            $string = 0;
        return $string;
    }
}
if ( ! function_exists('fileSizeFormat'))
{
    function fileSizeFormat($size)
    {
        $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $power = $size > 0 ? floor(log($size, 1024)) : 0;
        return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
    }
}
if ( ! function_exists('removeBreakLine'))
{
    function removeBreakLine($content) {
        $content = preg_replace("/[\n\r]/", "", $content);
        return $content;
    }
}
if ( ! function_exists('get_type_slug'))
{
    function get_type_slug($id) {
        if($id == "1")
            return "nha-dat-ban";
        if($id == "2")
            return "cho-thue";
        if($id == "3")
            return "can-mua";
        if($id == "4")
            return "can-thue";
    }
}

if ( ! function_exists('get_page'))
{
    function get_page($page) {
        if($page == "")
            return 1;
        if($page == "1")
            return 1;
        $temp = explode("-",$page);
        $temp2 = explode(".",$temp[1]);
        $page = (int)$temp2[0];
        if($page == 0)
            $page = 1;
        return $page;
    }
}

if ( ! function_exists('price_format'))
{
    function price_format($money) {

        if ($money <= 0) {
            return "Thỏa thuận";
        }

        $money = round($money * 10)/10;
        $retval = '';
        $sodu = 0;
        if ($money >= 1000000000) {
            $sodu = floor($money/1000000000);
            $retval .= $sodu.' tỷ ';
            $money = $money-($sodu*1000000000);
        }
        if ($money >= 1000000) {
            $sodu = floor($money/1000000);
            $retval .= $sodu.' triệu ';
            $money = $money-($sodu*1000000);
        }
        if ($money >= 1000) {
            $sodu = floor($money/1000);
            $retval .= $sodu.' nghìn ';
            $money = $money-($sodu*1000);
        }

        $money = floor($money);

        if ($money > 0) {
            $retval .= $money.' đồng';
        }
        return $retval;
    }
}

if ( ! function_exists('get_vip_type_name'))
{
    function get_vip_type_name($id) {


        if ($id == "2") {
            $loai = "VIP";
        }
        elseif ($id == "3") {
            $loai = "Premium";
        }
        else{
            $loai = "Thường";
        }

        return $loai;
    }
}

/**
  *
  * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
  *
  * @access    public
  * @param    string
  * @return    string
  */


if ( ! function_exists('createSlug'))
{
    function createSlug($string) {
        $search = array (
            '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
            '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
            '#(ì|í|ị|ỉ|ĩ)#',
            '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
            '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
            '#(ỳ|ý|ỵ|ỷ|ỹ)#',
            '#(đ)#',
            '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
            '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
            '#(Ì|Í|Ị|Ỉ|Ĩ)#',
            '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
            '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
            '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
            '#(Đ)#',
            "/[^a-zA-Z0-9\-\_]/",
            ) ;
        $replace = array (
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
            ) ;
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);
        return $string;
    }
}

if ( ! function_exists('get_status_order'))
{
    function get_status_order($id) {
        if($id == 0)
            $status = '<span class="badge status_text">Chưa duyệt</span>';
        elseif($id == 1)
            $status = '<span class="badge badge-primary status_text">Chờ thanh toán</span>';
        elseif($id == 2)
            $status = '<span class="badge badge-success status_text">Đã thanh toán</span>';
        elseif($id == 3)
            $status = '<span class="badge badge-danger status_text">Hủy đơn hàng</span>';
        else
            $status = '<span class="badge badge-warning status_text">Không xác định</span>';
        return $status;
    }
}

if ( ! function_exists('get_method'))
{
    function get_method($code) {
        if($code == 'cod')
            $text = "COD";
        if($code == 'direct')
            $text = "Trực tiếp";
        if($code == 'bank')
            $text = "Chuyển khoản";
        if($code == 'card')
            $text = "Thẻ Quốc tế";
        return $text;
    }
}

?>