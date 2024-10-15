class Estoque {
    private $idEstoque;
    private $fornecedor;
    private $placaRefletiva;
    private $caixaCarro;
    private $caixaMoto;

    public function __construct($idEstoque, $fornecedor, $placaRefletiva, $caixaCarro, $caixaMoto) {
        $this->idEstoque = $idEstoque;
        $this->fornecedor = $fornecedor;
        $this->placaRefletiva = $placaRefletiva;
        $this->caixaCarro = $caixaCarro;
        $this->caixaMoto = $caixaMoto;
    }

    public function getIdEstoque() {
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque) {
        $this->idEstoque = $idEstoque;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    }

    public function getPlacaRefletiva() {
        return $this->placaRefletiva;
    }

    public function setPlacaRefletiva($placaRefletiva) {
        $this->placaRefletiva = $placaRefletiva;
    }

    public function getCaixaCarro() {
        return $this->caixaCarro;
    }

    public function setCaixaCarro($caixaCarro) {
        $this->caixaCarro = $caixaCarro;
    }

    public function getCaixaMoto() {
        return $this->caixaMoto;
    }

    public function setCaixaMoto($caixaMoto) {
        $this->caixaMoto = $caixaMoto;
    }
}
