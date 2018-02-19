# Philips RC6 tv remote control UI using jQuery Mobile and LIRC
<br />
<br />
an implementation of the Philips 22PFT4000/12 tv remote control interface using Jquery Mobile and PHP-Lirc backend.

This interface faithfully reproduces the layout and functions of the remote control [Philips 22PFT4000/12](https://github.com/gcassarino/jquery-mobile-Philips-RC6-tv-remote/blob/master/Philips_22PFT4000_12-remote.jpg) and has been designed to be used together with an infrared diode (from an old tv remote), a web server and a Lirc backend installed on a Raspberry. There are many examples of circuits around the web that show how to connect an IR LED to a Raspberry.
An Apache web server is used to provide the web page with the tv-remote interface through the browser. Jquery Mobile takes care of the creation of the UI, Jquery of the communication through JSON with the PHP page on the server that receives the commands sent from the html frontend. The server uses a PHP wrapper for the LIRC 'irsend' command to send commands to the TV just as the original remote would do. The remote control UI also reproduces the actions associated with the long press of some keys (see philips.php).
Also in the last row below are implemented custom macros that show examples of how you can define queues of commands to be executed in sequence.
This remote has been deeply tested with the following Philips TV models: Philips 22PFT4000/12, 32PFT4100/12. Should also work for 
22Pxx4000, 22Pxx4000/12, 32Pxx4100, 32Pxx4100/12, 32Pxx4200, 40PFx4100, 40PFx4200, 48PFx4100 (4000, 4100, 4200, 5210 series).

### Installing

This project was designed to be used on a Raspberry, requires Apache and PHP for the web server and LIRC + conf file related to the remote control (Backup-lirc-22PFT4000_12.conf) available in this repository. Also an appropriate circuit is needed to drive the IR led using the Raspberry. The LIRC conf file for the tv remote was made using a TSOP38238 IR receiver and was deeply tested and is fully working. First install the LIRC backend with the conf file then the IR led driver circuit and make sure everything works correctly. Do some test using [irsend](http://www.lirc.org/html/irsend.html) command. 

## Authors

* Gianluca Cassarino

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
