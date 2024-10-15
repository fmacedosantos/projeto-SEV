class TabelaPlacas {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listarPlacas() {
        $sql = "
            SELECT 
                c.nome AS nome_cliente,
                p.tipo,
                p.numeroPlaca,
                CASE
                    WHEN p.tipo = 'carro' THEN 'Carro'
                    WHEN p.tipo = 'moto' THEN 'Moto'
                    ELSE 'Outro'
                END AS tipo_veiculo,
                p.tipo AS tipo_placa
            FROM placas p
            JOIN cliente c ON p.idCliente = c.cpf
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultados)) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Nome do Cliente</th>
                    <th>Tipo de Veículo</th>
                    <th>Número da Placa</th>
                    <th>Tipo de Placa</th>
                  </tr>";

            foreach ($resultados as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['nome_cliente']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tipo_veiculo']) . "</td>";
                echo "<td>" . htmlspecialchars($row['numeroPlaca']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tipo_placa']) . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Nenhuma placa encontrada.";
        }
    }
}
