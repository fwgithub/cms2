<?php
// prevent the server from timing out
set_time_limit(0);


// $bin = pack("a3", "中");
// echo "output: " . $bin . "\n";
// echo "output: 0x" . bin2hex($bin) . "\n";		16进制
// echo "output: " . chr(0xe4) . chr(0xb8) . chr(0xad) . "\n";
// echo "output: " . $bin{0} . $bin{1} . $bin{2} . "\n";


const MSG_INVALID = 0;
const MSG_CONNECT = 1;
const MSG_CONNECTED = 2;
const MSG_AUTH = 3;
const MSG_AUTHED = 4;
const MSG_INFO = 5;
const MSG_INFO_RET = 6;
const MSG_USER = 7;

const HEAD_SIZE = 28;



$host = "192.168.1.214";
$port = "21003";

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)
  or die("Unable to create socket\n");

socket_connect($socket, $host, $port) or die("Connect error.\n");

if ($err = socket_last_error($socket))
{

  socket_close($socket);
  die(socket_strerror($err) . "\n");
}
//组包头
function packhead($message,$id,$content = "") {
	//$content = "";
	$Stx = pack("c", 0x27);
	$LineServerId = pack("c", 1);
	$DestServerType = pack("c", 2);
	$Ckx = pack("c", 0x72);
	$Message = pack("V", $message);
	$SrcZoneId = pack("V", 3);
	$DestZoneId = pack("V", 0);
	$Id = pack("l", $id);

	$packetsize = strlen($content);
	$RSV = pack("l",$packetsize);
	$PacketSizee = pack("V", $packetsize);
	$binarydata = $Stx.$LineServerId.$DestServerType.$Ckx.$Message.$SrcZoneId.$DestZoneId.$Id.$RSV.$PacketSizee.$content;	
	return $binarydata;
}
//解包头
function unpackhead($bytes) {
	$Head = unpack("c1Stx/c1LineServerId/c1DestServerType/c1Ckx/V1Message/V1SrcZoneId/V1DestZoneId/l1Id/l1RSV/V1PacketSizee", $bytes);
	return $Head;
}
//解包体
function unpackcontent($bytes) {
	$mcontent= substr($bytes,28,4); 
	$socketid = unpack("l",$mcontent);
	return $socketid;
}

// function send($bytes) {
	// $len = socket_write ($socket , $binarydata, strlen($binarydata));
	// if($len) {
		// $bytes = socket_read($socket,4096);
		// $Head = unpackhead($bytes);
		// $socketid = unpackcontent($bytes);
		// return $socketid;
	// }
		
	// return $Head;
// }

//获取服务器返回状态
function status($mesg){
	switch($mesg){
	case MSG_CONNECTED:
		
		//print_r($socketid);
		return true;
		break;
	case MSG_AUTH:
		//$socketid = unpack("l",$mcontent);
		return true;
		break;
	case MSG_AUTHED:
		return true;
		break;
	case MSG_INFO:
		return true;
		break;
	case MSG_INFO_RET:
		return true;
		break;
	case MSG_USER:
		return true;
		break;
	default:
		//echo "No Connect...";
		return false;
 }
	
}

function connected($mcontent){
	$socketid = unpack("l",$mcontent);
		if($socketid){
			$content = $socketid.'2';
			$binarydata = packhead(MSG_CONNECTED,1509171435,$content);
			socket_write($socket , $binarydata, strlen($binarydata));
			$bytess = socket_read($socket,4096);
			
			$Headd = unpackhead($bytess);
			$mcontentt= substr($bytess,28,4);
			if(status($Headd['Message'])) {
				auth($Headd,$mcontentt);
			}
		}
	
}
function auth($mcontent){
	$socketid = unpack("l",$mcontent);
		if($socketid){
			$content = $socketid.'3';
			$binarydata = packhead(MSG_AUTH,1509171435,$content);
			socket_write($socket , $binarydata, strlen($binarydata));
			$bytess = socket_read($socket,4096);
			$Headd = unpackhead($bytess);
			$mcontentt= substr($bytess,28,4);
			if(status($Headd['Message'])) {
				authed($Headd,$mcontentt);
			}
		}
	
}
function authed($mcontent){
	$socketid = unpack("l",$mcontent);
		if($socketid){
			$content = $socketid.'4';
			$binarydata = packhead(MSG_AUTHED,1509171435,$content);
			socket_write($socket , $binarydata, strlen($binarydata));
			$bytess = socket_read($socket,4096);
			$Headd = unpackhead($bytess);
			$mcontentt= substr($bytess,28,4);
			if(status($Headd['Message'])) {
				info($Headd,$mcontentt);
			}
		}
	
}
function info($mcontent){
	$socketid = unpack("l",$mcontent);
		if($socketid){
			$content = $socketid.'5';
			$binarydata = packhead(MSG_INFO,1509171435,$content);
			socket_write($socket , $binarydata, strlen($binarydata));
			$bytess = socket_read($socket,4096);
			$Headd = unpackhead($bytess);
			$mcontentt= substr($bytess,28,4);
			if(status($Headd['Message'])) {
				inforet($Headd,$mcontentt);
			}
		}
}
function inforet($mcontent){
	$socketid = unpack("l",$mcontent);
		if($socketid){
			$content = $socketid.'6';
			$binarydata = packhead(MSG_INFO_RET,1509171435,$content);
			socket_write($socket , $binarydata, strlen($binarydata));
			$bytess = socket_read($socket,4096);
			$Headd = unpackhead($bytess);
			$mcontentt= substr($bytess,28,4);
			if(status($Headd['Message'])) {
				user($Headd,$mcontentt);
			}
		}
}
function user($mcontent){
	$socketid = unpack("l",$mcontent);
		if($socketid){
			$content = $socketid.'7';
			$binarydata = packhead(MSG_USER,1509171435,$content);
			socket_write($socket , $binarydata, strlen($binarydata));
			$bytess = socket_read($socket,4096);
			$Headd = unpackhead($bytess);
			$mcontentt= substr($bytess,28,4);
			if(status($Headd['Message'])) {
				return true ;
			}
		}
}
//首次连接
$binarydata = packhead(MSG_CONNECT,1509171435);
$len = socket_write ($socket , $binarydata, strlen($binarydata));
$bytes = socket_read($socket,4096);
$Head = unpackhead($bytes);
$mcontent = substr($bytes,28,4); 
print_r($Head['Message']);

if(status($Head['Message'])) {
	connected($mcontent);
}
//socket_close($socket);socket_recv($socket,$buffer,2048,0);

?>