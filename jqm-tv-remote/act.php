<?php
/*
MIT License

Copyright (c) 2016 Gianluca Cassarino

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
	require_once(dirname(__FILE__) . '/philips.php');
	$remote = new philips_22PFT4000_12_ALT2();

	// String Switch Hack. Map actions names to numbers
	$actions = array('fail' => 0,
	                 'keyPower' => 1,
	                 'keyStop' => 2,
	                 'keyPause' => 3,
	                 'keyRecord' => 4,
	                 'keyRewind' => 5,
	                 'keyPlay' => 6,
	                 'keyForward' => 7,
	                 'keyTvGuide' => 8,
	                 'keySetup' => 9,
	                 'keyFormat' => 10,
	                 'keySources' => 11,
	                 'keyHome' => 12,
	                 'keyExit' => 13,
	                 'keyRed' => 14,
	                 'keyGreen' => 15,
	                 'keyYellow' => 16,
	                 'keyBlue' => 17,
	                 'keyInfo' => 18,
	                 'keyUp' => 19,
	                 'keyOptions' => 20,
	                 'keyLeft' => 21,
	                 'keyOk' => 22,
	                 'keyRight' => 23,
	                 'keyBack' => 24,
	                 'keyDown' => 25,
	                 'keyList' => 26,
	                 'keyVolumeUp' => 27,
	                 'keyVolumeDown' => 28,
	                 'keyVolumeMute' => 29,
	                 'keyChannelUp' => 30,
	                 'keyChannelDown' => 31,
	                 'key1' => 32,
	                 'key2' => 33,
	                 'key3' => 34,
	                 'key4' => 35,
	                 'key5' => 36,
	                 'key6' => 37,
	                 'key7' => 38,
	                 'key8' => 39,
	                 'key9' => 40,
	                 'key0' => 41,
	                 'keySubtitle' => 42,
	                 'keyText' => 43,
	                 // MACROS
	                 'keySetValue' => 44
	                );

	$act = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'fail';
	//$action = isset($actions[$act]) ? $actions[$act] : $actions['fail'];
	
	$cmdSeq = explode(",", $act);

	foreach( $cmdSeq as $cmd )  { 
	  $action = isset($actions[$cmd]) ? $actions[$cmd] : $actions['fail'];
	  // extras (value)
	  $val = isset($_REQUEST['value']) ? $_REQUEST['value'] : 'false';

	  switch ($action) {
		  case $actions['keyPower']:
			  $remote->keyPower();
			  break;
		  case $actions['keyStop']:
			  $remote->keyStop();
			  break;
		  case $actions['keyPause']:
			  $remote->keyPause();
			  break;	
		  case $actions['keyRecord']:
			  $remote->keyRecord();
			  break;	
		  case $actions['keyRewind']:
			  $remote->keyRewind();
			  break;
		  case $actions['keyRewindAlt']:
			  $remote->keyRewindAlt();
			  break;
		  case $actions['keyPlay']:
			  $remote->keyPlay();
			  break;
		  case $actions['keyForward']:
			  $remote->keyForward();
			  break;
		  case $actions['keyForwardAlt']:
			  $remote->keyForwardAlt();
			  break;
		  case $actions['keyTvGuide']:
			  $remote->keyTvGuide();
			  break;
		  case $actions['keySetup']:
			  $remote->keySetup();
			  break;
		  case $actions['keyFormat']:
			  $remote->keyFormat();
			  break;
		  case $actions['keySources']:
			  $remote->keySources();
			  break;
		  case $actions['keyHome']:
			  $remote->keyHome();
			  break;
		  case $actions['keyExit']:
			  $remote->keyExit();
			  break;
		  case $actions['keyRed']:
			  $remote->keyRed();
			  break;
		  case $actions['keyGreen']:
			  $remote->keyGreen();
			  break;
		  case $actions['keyYellow']:
			  $remote->keyYellow();
			  break;
		  case $actions['keyBlue']:
			  $remote->keyBlue();
			  break;
		  case $actions['keyInfo']:
			  $remote->keyInfo();
			  break;
		  case $actions['keyUp']:
			  $remote->keyUp();
			  break;
		  case $actions['keyOptions']:
			  $remote->keyOptions();
			  break;
		  case $actions['keyLeft']:
			  $remote->keyLeft();
			  break;
		  case $actions['keyOk']:
			  $remote->keyOk();
			  break;
		  case $actions['keyRight']:
			  $remote->keyRight();
			  break;
		  case $actions['keyBack']:
			  $remote->keyBack();
			  break;
		  case $actions['keyDown']:
			  $remote->keyDown();
			  break;
		  case $actions['keyList']:
			  $remote->keyList();
			  break;
		  case $actions['keyVolumeUp']:
			  $remote->keyVolumeUp();
			  break;
		  case $actions['keyVolumeDown']:
			  $remote->keyVolumeDown();
			  break;
		  case $actions['keyVolumeMute']:
			  $remote->keyVolumeMute();
			  break;
		  case $actions['keyChannelUp']:
			  $remote->keyChannelUp();
			  break;
		  case $actions['keyChannelDown']:
			  $remote->keyChannelDown();
			  break;
		  case $actions['key1']:
			  $remote->key1();
			  break;
		  case $actions['key2']:
			  $remote->key2();
			  break;
		  case $actions['key3']:
			  $remote->key3();
			  break;	
		  case $actions['key4']:
			  $remote->key4();
			  break;
		  case $actions['key5']:
			  $remote->key5();
			  break;
		  case $actions['key6']:
			  $remote->key6();
			  break;
		  case $actions['key7']:
			  $remote->key7();
			  break;
		  case $actions['key8']:
			  $remote->key8();
			  break;
		  case $actions['key9']:
			  $remote->key9();
			  break;
		  case $actions['key0']:
			  $remote->key0();
			  break;
		  case $actions['keySubtitle']:
			  $remote->keySubtitle();
			  break;
		  case $actions['keyText']:
			  $remote->keyText();
			  break;
		  case $actions['keySetValue']:
			  $remote->keySetValue($val);
			  break;
		  default:
			  echo json_encode(array('error' => 'Unknown Action'));
			  die();
			  
	  }
	
	}
	
	echo json_encode(array('success' => 'Action "' . $act . '" has been sent.'));
?>
