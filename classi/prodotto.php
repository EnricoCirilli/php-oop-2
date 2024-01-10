<?php 

    include_once __DIR__ . '/category.php';
    include_once __DIR__ . '/trait-iva.php';
    class Prodotto{
    use Iva;
 public $nome;
    public $prezzo;

    public function __construct($nome, $prezzo)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }

    public function calcolaIva()
    {
        return $this->prezzo * 0.22;
    }
}
    // ...
}
    class Prodotto{
        public $immagine;
        public $nome;
        public $prezzo;
        public $category;
        

        public function __construct(
            String $immagine,
            String $nome,
            Float $prezzo,
            Categorie $category

            ) {
            $this->immagine = $immagine;
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->category = $category;      
  }

}


?>