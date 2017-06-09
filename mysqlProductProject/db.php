<?php
//manipulacija so office tabeli, citnje informacii od tabela, dodavanje informacii i promena na offices tabela  
	//PDO e klasa definirana vo globalen namespace
	namespace SEDC\DB;
	//klasa odogvorna za konekcija so baza, za citanje i zapisuvanje od baza
	//za property table sekoj extend od ovaa klasa treba da ima razlicna vrednost za property tabel i za da ne moze da se instanciraat objeki od nea ja stavamen apstraaktna, nameneta e za kreiranje na podkali od nea i ke gi koristat funkcionalnostite na nea i ke se bidat tabeli(izgledaat kako)
	abstract class DB {

		//gi stavame kako konstanti bidejki ne se menuvaat a ne kako property
		const DB_HOST = 'localhost';
		const DB_USERNAME = 'root';
		const DB_PASSWORD = '';
		const DB_DB = 'onlineshop';
		//private ne se nasleduvaat, ostanuvaat vo ramkite na parent klasata
		protected $db;
		// vaka obelezani promenlivi ne s epublic $_
		//vo ramkite na sekoja klasa ke ni treba tabela
		protected $table; 

		function  __construct(){
			//ovde postavuvame konekcija so baza
			try {
				//prvo vo DB_HOST argument kazuvame so kakov server sakame da se konektirame - mysql server, potoa host = hostname i db soodvetno na bazata so sakame da ja korisitime
				//ne gi stavame direktno iminjata za ako ni treba druga frima/shop da mozeme da gi reiskoristime
				$this->db = new \PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_DB, self::DB_USERNAME, self::DB_PASSWORD);
				//echo "Connection fully established.<br />";
				//PDO e klasa definirana vo globalen namespace zatoa mora da kazeme deka e od drug namespace
				//imame dva catch za greski oti reagiriame razlicno na PDO Exception t.e. greska a drugoto catch e za druga default greska
			}catch(\PDOException $ex){
				echo $ex->getMessage();
			}catch(\Exception $ex){
				echo $ex->getMessage();
			}
		}


		public function save(){
			//get_object_vars(object) gi dava site property so soodvetni vrednosti bez razlika preku koja podklasa, extend od DB toa ke bide, gi zema properties;
			//vo columns gi zemame samo klucevite vo posebna niza kako vrednosti, a vo values vrednosti vo druga posebna indeksna niz gi zemame vrednostite
			$properties = get_object_vars($this);
			//go trgame property table i db od niza bidejki ni trebaat samo property kako so ima vo baza
			unset($properties['table']);
			unset($properties['db']);
			$columns = array_keys($properties);
			$values = array_values($properties);
			//var_dump($properties, $columns, $values);

			//vnesi vrednosti vo koloni na tabela kade columns bi bile vo nekakva niza i so toa bi go zemale columns i bi napravile implode za da go dobieme kako string bidejki insert into prima argumenti, vrednosti kako tip i ime kako stringovi
			//so implode se dobivaat kako eden string
			$query = "INSERT INTO {$this->table}" . "(" . implode(',' , $columns) . ")"
							//ovde konkatenirame navodnici bidejki ni falat na pocetok i kraj 
						 . " VALUES (" . '"' . implode('","', $values) . '"' . " ) ";
			//od objektot PDO povikaj ja funkcijata exec(metod na PDO) i isprati go queryto da se izvrsi u baza 
			//echo $query;
			return $this->db->exec($query);
		}

		//za site modeli koi ke nasleduvaat od DB da mozat na ist nacin da gi setiraat atributite
		public function setAttributes($attributes){
			//var_dump($attributes);
			foreach ($attributes as $key => $value) {
				//ova go pravime za nameot od button da ne go setira so vika deka samo ako takov kluc postoi ako ne ne go setiraj, ovde ne go setira bidejki button ne postoi kako property
				if(property_exists($this, $key)){
					$this->{$key} = $value;
				}				
			}
			//var_dump($this);
		}

		public function __destruct(){
			$this->db = NULL;
		}



	};

	// $db = new DB();

?>