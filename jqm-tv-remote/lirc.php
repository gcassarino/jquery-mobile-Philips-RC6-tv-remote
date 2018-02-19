<?php

class lirc {
	private $remote;

	public function __construct($remote) {
		$this->remote = $remote;
	}

	protected function sendKey($key, $times = 'SEND_ONCE') {
		$k = array();
		foreach (explode(' ', $key) as $bit) { $k[] = escapeshellarg($bit); }
		$cmd = '/usr/bin/irsend -d /run/lirc/lircd-lirc0 ' . escapeshellarg($times) . ' ' . escapeshellarg($this->remote) . ' ' . implode(' ', $k);
		exec($cmd);
	}
}

?>
