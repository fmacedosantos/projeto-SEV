class Fechamento {
    private $idFechamento;
    private $idPlaca;
    private $idCliente;
    private $data;
    private $valor;

    public function __construct($idFechamento, $idPlaca, $idCliente, $data, $valor) {
        $this->idFechamento = $idFechamento;
        $this->idPlaca = $idPlaca;
        $this->idCliente = $idCliente;
        $this->data = $data;
        $this->valor = $valor;
    }

    // Getters e Setters
    public function getIdFechamento() {
        return $this->idFechamento;
    }

    public function setIdFechamento($idFechamento) {
        $this->idFechamento = $idFechamento;
    }

    public function getIdPlaca() {
        return $this->idPlaca;
    }

    public function setIdPlaca($idPlaca) {
        $this->idPlaca = $idPlaca;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
}
