<?PHP
class Catalogue{
	private $id_article;
	private $type;
	private $image;
	private $nom;
	private $prix;
	private $description;

	function __construct($id_article,$type,$image,$nom,$prix,$description){
		$this->id_article=$id_article;
		$this->type=$type;
		$this->image=$image;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->description=$description;

	}
	
	function getId_article(){
		return $this->id_article;
	}
	function getType(){
		return $this->type;
	}
	function getImage(){
		return $this->image;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrix(){
		return $this->prix;
	}
	function getDescription(){
		return $this->description;
	}

	function setId_article($id_article){
		$this->id_article=$id_article;
	}
	function setType($type){
		$this->type=$type;
	}
	function setImage($image){
		$this->image=$image;
	}
	function setId_Nom($nom){
		$this->nom=$nom;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
		function setDescription($description){
		$this->description=$description;
	}
	
}
?>