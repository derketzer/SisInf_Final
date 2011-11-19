<?php

	class auth extends CMS{
		const saltchars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		private static $cost = 12;
		private static $info = array();
		
		public function __construct(){}
		
		private static function checkBlowfish(){
			if (!defined('CRYPT_BLOWFISH')){
				throw new Exception('BCrypt wird von diesem Server leider nicht unterstützt!');
			}
		}
		
		public static function checkHash($passwort, $hash){
			// Prüfen ob Blowfish vom Server unterstützt wird
			self::checkBlowfish();

			// Komplettes Salt mit Algorithmus und Wiederholungen aus dem Hash extrahieren
			$tmp_salt = substr($hash, 0, 29);

			// Vergleichshash erzeugen
			$tmp_hash = crypt($passwort, $tmp_salt . '$');

			// Stimmt das Passwort mit dem Hash überein ist der Rückgabewert TRUE, ansonsten FALSE
			return ($tmp_hash == $hash) ? TRUE : FALSE;
		}
		
		public static function hash($passwort, $cost = NULL){
			// Prüfen ob Blowfish vom Server unterstützt wird
			self::checkBlowfish();

			// Blowfish Algorithmus
			self::$info['algo'] = '$2a$';

			// 22-stelligen Salt erzeugen der für Blowfish erforderlich ist
			$tmp_salt = '';
			for ($i = 0; $i <= 21; $i++){
				$tmp_str   = str_shuffle(self::saltchars);
				$tmp_salt .= $tmp_str[0];
			}

			// Salt im Info-Array ablegen
			self::$info['salt_string'] = $tmp_salt;

			// Anzahl der Wiederholungen ermitteln
			if ($cost){
				// Führende Null voranstellen bei einstelliger Wiederholung
				self::$info['cost'] = sprintf('%02d', min(31, max(intval($cost), 4)));
			}else{
				// Standard verwenden
				self::$info['cost'] = self::$cost;
			}

			// Komplettes Salt mit Algorithmus und Wiederholungen
			self::$info['salt_komplett'] = self::$info['algo'] . self::$info['cost'] . '$' . self::$info['salt_string'] . '$';

			// Passwort Hash erzeugen
			self::$info['hash'] = crypt($passwort, self::$info['salt_komplett']);

			// Info-Array zurückgeben
			return self::$info;
		}
	}

?>