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

require_once(dirname(__FILE__) . '/lirc.php');

/**
begin remote

  name  Philips_22PFT4000_12_ALT2
  bits           13
  flags RC6|CONST_LENGTH
  eps            30
  aeps          100

  header       2691   868
  one           467   413
  zero          467   413
  pre_data_bits   8
  pre_data       0x77
  gap          106894
  min_repeat      2
#  suppress_repeat 2
#  uncomment to suppress unwanted repeats
  toggle_bit_mask 0x10000
  rc6_mask    0x10000

      begin codes
          KEY_REWIND               0x0FFFB2   # long key press (if tv: move to prev channel)
          KEY_REWIND_ALT           0x0FFFD4   # short key press (if tv: check if usb disk is connected, otherwise prints a message to tv)
          KEY_FASTFORWARD          0x0EFFB3   # long key press (if tv: move to next channel)
          KEY_FASTFORWARD_ALT      0x0EFFD7   # short key press (if tv: check if usb disk is connected, otherwise prints a message to tv)
          KEY_STOP                 0x0FFFCE
          KEY_PAUSE                0x0EFFCF
          KEY_RECORD               0x0FFFC8
          KEY_PLAY                 0x0FFFD3
          KEY_TVGUIDE              0x0FFF33
          KEY_SETUP                0x0FFF40
          KEY_FORMAT               0x0EFF0A
          KEY_SOURCES              0x0FFFC7
          KEY_HOME                 0x0FFFAB
          KEY_EXIT                 0x0FFF60
          KEY_RED                  0x0EFF92
          KEY_GREEN                0x0FFF91
          KEY_YELLOW               0x0EFF90
          KEY_BLUE                 0x0FFF8F
          KEY_INFO                 0x0EFFF0
          KEY_UP                   0x0EFFA7
          KEY_OPTION               0x0EFFBF
          KEY_LEFT                 0x0FFFA5
          KEY_OK                   0x0EFFA3
          KEY_RIGHT                0x0FFFA4
          KEY_BACK                 0x0EFFF5
          KEY_DOWN                 0x0FFFA6
          KEY_LIST                 0x0EFF2D
          KEY_VOLUMEUP             0x0EFFEF
          KEY_VOLUMEDOWN           0x0EFFEE
          KEY_MUTE                 0x0FFFF2
          KEY_CHANNELUP            0x0FFFDF
          KEY_CHANNELDOWN          0x0FFFDE
          KEY_1                    0x0EFFFE
          KEY_2                    0x0EFFFD
          KEY_3                    0x0EFFFC
          KEY_4                    0x0FFFFB
          KEY_5                    0x0EFFFA
          KEY_6                    0x0FFFF9
          KEY_7                    0x0FFFF8 0x0EFFF8
          KEY_8                    0x0EFFF7
          KEY_9                    0x0EFFF6
          KEY_SUBTITLE             0x0EFFB4
          KEY_0                    0x0EFFFF
          KEY_TEXT                 0x0FFFC3
          KEY_POWER                0x0EFFF3
      end codes

end remote
 */
class philips_22PFT4000_12_ALT2 extends lirc { // can be any name
	public function __construct() {
		parent::__construct('philips_22PFT4000_12_ALT2'); // required as argument for irsend command in lirc class 
	}

	public function power() { $this->sendKey('KEY_POWER'); return $this; }
	// taphold keys
	public function keyRewind() { $this->sendKey('KEY_REWIND'); return $this; }                  // long key press (if tv: move to prev channel)
	public function keyForward() { $this->sendKey('KEY_FASTFORWARD'); return $this; }            // long key press (if tv: move to next channel)
	public function keyRewindAlt() { $this->sendKey('KEY_REWIND_ALT'); return $this; }           // short key press (if tv: check if usb disk is connected, otherwise prints a message to tv)
	public function keyForwardAlt() { $this->sendKey('KEY_FASTFORWARD_ALT'); return $this; }     // short key press (if tv: check if usb disk is connected, otherwise prints a message to tv)
	//
	public function keyStop() { $this->sendKey('KEY_STOP'); return $this; }             
	public function keyPause() { $this->sendKey('KEY_PAUSE'); return $this; }
	public function keyRecord() { $this->sendKey('KEY_RECORD'); return $this; }
	public function keyPlay() { $this->sendKey('KEY_PLAY'); return $this; }
	public function keyTvGuide() { $this->sendKey('KEY_TVGUIDE'); return $this; }
	public function keySetup() { $this->sendKey('KEY_SETUP'); return $this; }
	public function keyFormat() { $this->sendKey('KEY_FORMAT'); return $this; }
	public function keySources() { $this->sendKey('KEY_SOURCES'); return $this; }
	public function keyHome() { $this->sendKey('KEY_HOME'); return $this; }
	public function keyExit() { $this->sendKey('KEY_EXIT'); return $this; }
	public function keyRed() { $this->sendKey('KEY_RED'); return $this; }
	public function keyGreen() { $this->sendKey('KEY_GREEN'); return $this; }
	public function keyYellow() { $this->sendKey('KEY_YELLOW'); return $this; }
	public function keyBlue() { $this->sendKey('KEY_BLUE'); return $this; }
	public function keyInfo() { $this->sendKey('KEY_INFO'); return $this; }
	public function keyUp() { $this->sendKey('KEY_UP'); return $this; }
	public function keyOptions() { $this->sendKey('KEY_OPTION'); return $this; }
	public function keyLeft() { $this->sendKey('KEY_LEFT'); return $this; }
	public function keyOk() { $this->sendKey('KEY_OK'); return $this; }
	public function keyRight() { $this->sendKey('KEY_RIGHT'); return $this; }
	public function keyBack() { $this->sendKey('KEY_BACK'); return $this; }
	public function keyDown() { $this->sendKey('KEY_DOWN'); return $this; }
	public function keyList() { $this->sendKey('KEY_LIST'); return $this; }
	public function keyVolumeUp() { $this->sendKey('KEY_VOLUMEUP'); return $this; }
	public function keyVolumeDown() { $this->sendKey('KEY_VOLUMEDOWN'); return $this; }
	public function keyVolumeMute() { $this->sendKey('KEY_MUTE'); return $this; }
	public function keyChannelUp() { $this->sendKey('KEY_CHANNELUP'); return $this; }
	public function keyChannelDown() { $this->sendKey('KEY_CHANNELDOWN'); return $this; }
	public function key1() { $this->sendKey('KEY_1'); return $this; }
	public function key2() { $this->sendKey('KEY_2'); return $this; } 
	public function key3() { $this->sendKey('KEY_3'); return $this; } 
	public function key4() { $this->sendKey('KEY_4'); return $this; } 
	public function key5() { $this->sendKey('KEY_5'); return $this; } 
	public function key6() { $this->sendKey('KEY_6'); return $this; } 
	public function key7() { $this->sendKey('KEY_7'); return $this; }
	public function key8() { $this->sendKey('KEY_8'); return $this; }
	public function key9() { $this->sendKey('KEY_9'); return $this; }
	public function keySubtitle() { $this->sendKey('KEY_SUBTITLE'); return $this; }
	public function key0() { $this->sendKey('KEY_0'); return $this; }
	public function keyText() { $this->sendKey('KEY_TEXT'); return $this; }
	public function keyPower() { $this->sendKey('KEY_POWER'); return $this; }
	// never used, can be useful...
	public function sleep($time) { sleep($time); return $this; }
	// example by passing an argument value
	public function keySetValue($val) {
		// check if number
		if(is_numeric($val)){
		  $val = intval($val);
		  // check if > 9 
		  if($val>9){
		    $cmdSeq = str_split($val); // max 999 channels
		    foreach( $cmdSeq as $cmd )  { 
		      $this->sendKey('KEY_'.trim($cmd));
		    }
		  } else {
		    $this->sendKey('KEY_'.trim($val));
		  }
		} else {
		  // support for multiple commands separated by commas
		  $cmdSeq = explode(",", $val);
		  foreach( $cmdSeq as $cmd )  { 
		    // check if the string starts with 'key'
		    $start = mb_substr( $cmd, 0, 3 );
		    if($start === "key"){
		      $this->sendKey('KEY_'.substr(trim($cmd), 3)); // also it works in lower case... (see irsend man)
		    }
		  }
		}
		
		//$this->sendKey(trim($keys));
		return $this;
	}
}

?>
