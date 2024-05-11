
<?php
	class Database
	{
		private static $dbName = 'if0_36521493_nodemcu_rfidrc522_mysql' ;
		private static $dbHost = 'sql112.infinityfree.com' ;
		private static $dbUsername = 'if0_36521493';
		private static $dbUserPassword = 'Ss2eN7ZyxvzFjDh';
		 
		private static $cont  = null;
		 
		public function __construct() {
			die('Init function is not allowed');
		}
		 
		public static function connect()
		{
		   // One connection through whole application
		   if ( null == self::$cont )
		   {     
			try
			{
			  self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
			}
			catch(PDOException $e)
			{
			  die($e->getMessage()); 
			}
		   }
		   return self::$cont;
		}
		 
		public static function disconnect()
		{
			self::$cont = null;
		}
	}
?>