<?php
function createNum($num){
    $today = date("YmdHis");
    $pid = str_replace($today, '', $num);//理论上会出错，如果流水号超出2010072220100722
    $pid = $today . str_pad($pid, 4, "0", STR_PAD_LEFT);//低于4位，在前面补0，并和时间串连起来
    return $pid;
}

function timeTo($time){
    return date('Y-m-d H:i:s',strtotime($time)+ 3600 * 24);
}

function nowTime(){
    return date('Y-m-d',strtotime(\Carbon\Carbon::now()) + 3600*24);
}

function aWeekAgo(){
    return date('Y-m-d',strtotime(\Carbon\Carbon::now()) - 3600*24*6);
}

/**
 * [createNO 商家编号]
 * @param  [type] $prefix [前缀]
 * @return [type]         [description]
 */
function createNO($prefix = '')
{
    $billno = date('YmdHis') . random(6, true);
    return $prefix . $billno;
}

/**
 * [random 随机数]
 * @param  [type]  $length  [description]
 * @param  boolean $numeric [description]
 * @return [type]           [description]
 */
function random($length, $numeric = false)
{
    $seed = base_convert(md5(microtime() . $_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35);
    $seed = $numeric ? (str_replace('0', '', $seed) . '012340567890') : ($seed . 'zZ' . strtoupper($seed));
    if ($numeric) {
        $hash = '';
    }
    else {
        $hash = chr(rand(1, 26) + rand(0, 1) * 32 + 64);
        $length--;
    }
    $max = strlen($seed) - 1;
    for ($i = 0; $i < $length; $i++) {
        $hash .= $seed{mt_rand(0, $max)};
    }
    $hash = strtoupper($hash);
    return $hash;
}

if (!function_exists('l')) {
    /**
     * 辅助调试函数
     * @param  dynamic  mixed
     * @return void
     */
    function
    l()
    {
        // 被调用记录
        $backtrace = debug_backtrace();
        $content = $_SERVER['REQUEST_URI']??'' . PHP_EOL;
        $content .= '  断点位置 => ' . $backtrace[0]['file'] . ':' . $backtrace[0]['line'] . PHP_EOL;
        $content .= '  调试内容 => ' . var_export($backtrace[0]['args'], true) . PHP_EOL;
        // 写入日志
        Log::debug($content);
    }
}

function imageDomain($url){
    $url = 'https://res.haofanglife.cn/' . $url;
    return $url;
}

function transformData($start_time = null, $end_time = null)
{
    $end_time = $end_time ? date('Y-m-d', strtotime($end_time) - 24 * 3600) : date('Y-m-d', time() - 48 * 3600);
    $start_time = $start_time ? $start_time : date('Y-m-d', strtotime($end_time) - 24 * 3600 * 7);
    $start = strtotime($start_time);
    $end = strtotime($end_time);
    $data = [];
    for ($i = $start; $i <= $end; $i += 3600 * 24) {
        array_push($data, date('Y-m-d', $i));
    }
    $data1 = [];
    foreach (array_flip($data) as $k => $v) {
        $data1[$k] = 0;
    }
    return $data1;
}

function transformString($content){
    return str_replace('"','“',$content);

}
