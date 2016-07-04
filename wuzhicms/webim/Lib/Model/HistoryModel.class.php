<?php

class HistoryModel extends Model {

	protected $tableName = 'histories';

	public function get($uid, $with, $type='chat', $limit=30) {
		if( $type == "chat" ) {
			$where = "`type` = 'chat' AND ((`to`='$with' AND `from`='$uid' AND `fromdel` != 1)
					 OR (`send` = 1 AND `from`='$with' AND `to`='$uid' AND `todel` != 1))";
		} else {
			$where = "`to`='$with' AND `type`='grpchat' AND send = 1";
		}
		$rows = $this->where($where)->order('timestamp DESC')->limit(0, $limit)->select();
		return array_reverse( array_map( array($this, '_toObj'), $rows ) );
	}

	public function getOffline($uid, $limit = 50) {
		$rows = $this->where("`to`='$uid' and send != 1")->order('timestamp DESC ')->limit(0, $limit)->select();
		return array_reverse( array_map( array($this, '_toObj'), $rows ) );
	}

	public function insert($message) {
		$this->create($message);
		$this->created = date( 'Y-m-d H:i:s' );
		$this->add();
	}

	public function clear($uid, $with) {
		$this->where("`from`='$uid' and `to`='$with'")->save( array( "fromdel" => 1, "type" => "chat" ) );
		$this->where("`to`='$uid' and `from`='$with'")->save( array( "todel" => 1, "type" => "chat" ) );
		$this->where("todel=1 AND fromdel=1")->delete();
	}

	public function offlineReaded($uid) {
		$this->where("`to`='$uid' and send=0")->save(array("send" => 1));
	}

    private function _toObj($v) { return (object)$v; }

}

?>
