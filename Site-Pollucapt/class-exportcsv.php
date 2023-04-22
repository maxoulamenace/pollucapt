<?php 
class UploadCSV 
{
	protected $PdoDBConnection ;
	protected $outputfileName ;
	protected $pathCSV ;
	protected $sqlSelect ;
	protected $quoteColon ;
	protected $separator ;

	public function __construct(array $init){
		
		$default_init = array(
			'PdoDBConnection' => NULL,
			'outputfileName' => "export_" . date("Y-m-d-H-i-s") . ".csv",
			'pathCSV' => "./export-".uniqid() , 
			'sqlSelect' => NULL,
			'quoteColon' => NULL,
			'separator' => ",",
			);

		$init = array_merge($default_init, $init);

		$this->setDBConnection($init['PdoDBConnection']);
		$this->setoutputfileName($init['outputfileName']);
		$this->setpathCSV($init['pathCSV']);
		$this->setsqlSelect($init['sqlSelect']);
		$this->setquoteColon($init['quoteColon']);
		$this->setseparator($init['separator']);
	}

	private function mySqlSelect(){
		$result = array();

		$sql_all_client = $this->sqlSelect;

		$r = mysql_query($sql_all_client);

		while($row = mysql_fetch_object($r)){
			$result[] = $row;
		}
		return $result;
	}

	public function PdoSelect(){
		$result = array();

		$bdd = $this->PdoDBConnection ;
		
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		$sql_all_client = $this->sqlSelect;
		
		$stmt = $bdd->prepare($sql_all_client);

		$stmt->execute();

		$r = $stmt->fetchAll();
		
		$stmt->closeCursor();
		$stmt=NULL;

		foreach ($r as $row) {
			$result[] = $row;
		}
		return $result;
	}

	private function csv_headers($outputfileName,$pathCSV) {
	    // disable caching
	    $now = gmdate("D, d M Y H:i:s");
	    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
	    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
	    header("Last-Modified: {$now} GMT");

	    // force download  
	    header("Content-Type: application/force-download");
	    header("Content-Type: application/octet-stream");
	    header("Content-Type: application/download");

	    // file weight
	    header("Content-Length: " . filesize($pathCSV));

	    // encrypt output in utf-8
	    header('Content-Type: text/html; charset=utf-8');

	    // disposition / encoding on response body
	    header("Content-Disposition: attachment;filename={$outputfileName}");
	    header("Content-Transfer-Encoding: binary");
	}

	private function createcsv($pathCSV,$data){

		$myfile = fopen($pathCSV, 'w');

		/*générer la ligne de titre*/
		$title = $data[0];
		$txt = "";
		$j=0;
		foreach ($title as $key => $value) {
			if($this->quoteColon == "*"){
				$txt .= "'".$key.$this->separator;

			}elseif (is_array ($this->quoteColon)){
				
				if(in_array($j,$this->quoteColon)){

					$txt .= "'".$key.$this->separator;
				
				}else{
					$txt .= $key.$this->separator;
				}

			}else{
				$txt .= $key.$this->separator;
			}
			$j++;
		}
		$this->cleanBrWrite($myfile, $txt);
		/*fin générer la ligne de titre*/

		/*générer les lignes de corps*/
		foreach ($data as $d) {
				$txt = "";
				$j=0;
				foreach ($d as $i) {
					if($this->quoteColon == "*"){
						$txt .= "'".$i.$this->separator;

					}elseif (is_array ($this->quoteColon)){

						if(in_array($j,$this->quoteColon)){
							$txt .= "'".$i.$this->separator;
						}else{
							$txt .= $i.$this->separator;
						}
					}else{
						$txt .= $i.$this->separator;
					}
					$j++;
				}

				$this->cleanBrWrite($myfile, $txt);
		}
		/*fin générer les lignes de corps*/

		fclose($myfile);
	}

	private function cleanBrWrite($file, $txt){
		/*supprimer la dernière virgule de la ligne*/
		$txt = rtrim($txt, ",");
		/*remplacer les retours chariots pr un espace*/
		$txt = str_replace(array("\r", "\n"), ' ', $txt);

		/*remplacer les ; par un rien (Excel interprète ; comme des tabulation)*/
		$txt = str_replace(array(";"), '', $txt);
		/*Passer à la ligne*/
		$txt = $txt."\n";
		fwrite($file, $txt);
	}

	public function generate(){
		/*récupérer les données */
		if($this->PdoDBConnection){
			$data = $this->PdoSelect();
		}else{
			$data = $this->mySqlSelect();
		}

		/*création du fichier csv dans le serveur */
		$this->createcsv($this->pathCSV , $data);

		/*changer le header HTTP */
		$this->csv_headers($this->outputfileName , $this->pathCSV);

		/*lire le fichier csv */
		readfile($this->pathCSV);
		
		
		die();
	}

	private function setDBConnection($info){
		if($info){
			$this->PdoDBConnection = $info;
		}
	}

	private function setoutputfileName($info){
		if($info){
			$this->outputfileName = $info;
		}else{
			die('outputfileName - la valeur ne peut pas etre null');
		}
	}

	private function setpathCSV($info){
		if($info){
			$this->pathCSV = $info;
		}else{
			throw new Exception('pathCSV - la valeur ne peut pas etre null');
		}
	}

	private function setsqlSelect($info){
		if($info){
			$this->sqlSelect = $info;
		}else{
			throw new Exception('sqlSelect - la valeur ne peut pas etre null');
		}
	}

	private function setquoteColon($info){
		if($info){
			$this->quoteColon = $info;
		}else{
			$this->quoteColon = NULL;
		}
	}

	private function setseparator($info){
		if($info){
			$this->separator = $info;
		}else{
			throw new Exception('separator - la valeur ne peut pas etre null');
		}
	}
}