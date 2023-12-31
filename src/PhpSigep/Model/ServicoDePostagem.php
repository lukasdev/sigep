<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 * @modify Jonathan Célio da Silva <jonathan.clio@hotmail.com>
 */
class ServicoDePostagem extends AbstractModel
{   const SERVICE_PAC_MINI                       = '04227';
    const SERVICE_PAC_41106                      = '41106';
    const SERVICE_PAC_41068                      = '41068';
    const SERVICE_PAC_04510                      = '04510';
    const SERVICE_PAC_CONTRATO_41211             = '41211';
    const SERVICE_PAC_GRANDES_FORMATOS           = '04693';
    const SERVICE_PAC_REMESSA_AGRUPADA           = '41610';
    const SERVICE_PAC_CONTRATO_UO                = '04812';
    const SERVICE_E_SEDEX_STANDARD               = '81019';
    const SERVICE_SEDEX_40010                    = '40010';
    const SERVICE_SEDEX_40096                    = '40096';
    const SERVICE_SEDEX_40436                    = '40436';
    const SERVICE_SEDEX_40444                    = '40444';
    const SERVICE_SEDEX_12                       = '40169';
    const SERVICE_SEDEX_10                       = '40215';
    const SERVICE_SEDEX_10_PACOTE                = '40886';
    const SERVICE_SEDEX_HOJE_40290               = '40290';
    const SERVICE_SEDEX_HOJE_40878               = '40878';
    const SERVICE_SEDEX_A_VISTA                  = '04014';
    const SERVICE_SEDEX_VAREJO_A_COBRAR          = '40045';
    const SERVICE_SEDEX_AGRUPADO                 = '41009';
    const SERVICE_SEDEX_REVERSO                  = '40380';
    const SERVICE_SEDEX_PAGAMENTO_NA_ENTREGA     = '04189';
    const SERVICE_SEDEX_CONTRATO_UO              = '04316';
    const SERVICE_PAC_PAGAMENTO_NA_ENTREGA       = '04685';
    const SERVICE_CARTA_COMERCIAL_A_FATURAR      = '10065';
    const SERVICE_CARTA_REGISTRADA               = '10014';
    const SERVICE_SEDEX_CONTRATO_AGENCIA         = '04162';
    const SERVICE_PAC_CONTRATO_AGENCIA           = '04669';
    const SERVICE_SEDEX_REVERSO_CONTRATO_AGENCIA = '04170';
    const SERVICE_PAC_REVERSO_CONTRATO_AGENCIA   = '04677';
    const SERVICE_CARTA_COMERCIAL_REGISTRADA_CTR_EP_MAQ_FRAN = '10707';

    // CODIGOS REFERENTES A LIMINAR ABCOMM
    const SERVICE_SEDEX_CONTRATO_GRANDES_FORMATOS_LM    = '04146';
    const SERVICE_SEDEX_CONTRATO_AGENCIA_LM             = '04154';
    const SERVICE_SEDEX_REVERSO_LM                      = '04243';
    const SERVICE_SEDEX_CONTRATO_UO_LM                  = '04278';

    const SERVICE_PAC_CONTRATO_GRANDES_FORMATOS_LM      = '04883';
    const SERVICE_PAC_CONTRATO_AGENCIA_LM               = '04367';
    const SERVICE_PAC_REVERSO_LM                        = '04375';
    const SERVICE_PAC_CONTRATO_UO_LM                    = '04332';

    const SERVICE_SEDEX_CONTRATO_AGENCIA_PAGAMENTO_NA_ENTREGA_LM    = '04151';
    const SERVICE_PAC_CONTRATO_AGENCIA_PAGAMENTO_NA_ENTREGA_LM      = '04308';
    const SERVICE_SEDEX_NOVO = '03220';
    const SERVICE_PAC_NOVO = '03298';
    const SERVICE_SEDEX10_NOVO = '03158';
    const SERVICE_PACGF_NOVO = '03328';
    const SERVICE_SEDEX12_NOVO = '03140';
    const SERVICE_SEDEXHOJE_NOVO = '03204';

//    const SERVICE_CARTA_REGISTRADA           = '10138';

    protected static $services = array(
        self::SERVICE_SEDEXHOJE_NOVO => array('SEDEX HOJE CONTRATO AG', 162020),
        self::SERVICE_SEDEX12_NOVO => array('SEDEX 12 CONTRATO AG', 162015),
        self::SERVICE_PACGF_NOVO => array('PAC CONTRATO GDES FORMATOS', 162029),
        self::SERVICE_SEDEX10_NOVO => array('SEDEX 10 CONTRATO AG', 162016),
        self::SERVICE_SEDEX_NOVO => array('SEDEX CONTRATO AG', 162022),
        self::SERVICE_PAC_NOVO => array('PAC CONTRATO AG', 162026),
        self::SERVICE_PAC_MINI                  => array('Pac Mini 4227', 159982), 
        self::SERVICE_PAC_41106                  => array('Pac 41106', 109819),
        self::SERVICE_PAC_41068                  => array('Pac 41068', 109819),
        self::SERVICE_PAC_04510                  => array('Pac 04510', 110353),
        self::SERVICE_PAC_CONTRATO_41211         => array('Pac 41211', 113546),
        self::SERVICE_PAC_GRANDES_FORMATOS       => array('Pac Grandes Formatos', 120366),
        self::SERVICE_PAC_REMESSA_AGRUPADA       => array('Pac Remessa Agrupada', 121889),
        self::SERVICE_PAC_CONTRATO_UO            => array('Pac Contrato - UO', 124899),
        self::SERVICE_E_SEDEX_STANDARD           => array('E-Sedex Standard', 104672),
        self::SERVICE_SEDEX_40010                => array('Sedex 40010', 104625),
        self::SERVICE_SEDEX_40096                => array('Sedex 40096', 104625),
        self::SERVICE_SEDEX_40436                => array('Sedex 40436', 109810),
        self::SERVICE_SEDEX_40444                => array('Sedex 40444', 109811),
        self::SERVICE_SEDEX_12                   => array('Sedex 12', 115218),
        self::SERVICE_SEDEX_10                   => array('Sedex 10', 104707),
        self::SERVICE_SEDEX_10_PACOTE            => array('Sedex 10 Pacote', null),
        self::SERVICE_SEDEX_HOJE_40290           => array('Sedex Hoje 40290', 108934),
        self::SERVICE_SEDEX_HOJE_40878           => array('Sedex Hoje 40878', null),
        self::SERVICE_SEDEX_A_VISTA              => array('Sedex a vista', 104295),
        self::SERVICE_SEDEX_VAREJO_A_COBRAR      => array('Sedex Varejo a Cobrar', null),
        self::SERVICE_SEDEX_AGRUPADO             => array('Sedex Agrupado', 119461),
        self::SERVICE_SEDEX_REVERSO              => array('Sedex Reverso', 109806),
        self::SERVICE_SEDEX_PAGAMENTO_NA_ENTREGA => array('Sedex Pagamento na Entrega', 114976),
        self::SERVICE_SEDEX_CONTRATO_UO          => array('Sedex Contrato - UO', 124900),
        self::SERVICE_PAC_PAGAMENTO_NA_ENTREGA   => array('PAC Pagamento na Entrega', 114976),
        self::SERVICE_CARTA_COMERCIAL_A_FATURAR  => array('Carta Comercial a Faturar', 109480),
        self::SERVICE_CARTA_REGISTRADA           => array('Carta Registrada', 116985),
        self::SERVICE_CARTA_COMERCIAL_REGISTRADA_CTR_EP_MAQ_FRAN           => array('Carta Comercial Registrada CTR EP MÁQ FRAN', 120072),
        self::SERVICE_SEDEX_CONTRATO_AGENCIA     => array('SEDEX Contrato Agência', 124849),
        self::SERVICE_PAC_CONTRATO_AGENCIA       => array('PAC Contrato Agência', 124884),
        self::SERVICE_SEDEX_REVERSO_CONTRATO_AGENCIA => array('SEDEX Reverso Contrato Agência', 124849),
        self::SERVICE_PAC_REVERSO_CONTRATO_AGENCIA   => array('PAC Reverso Contrato Agência', 124884),

        self::SERVICE_SEDEX_CONTRATO_GRANDES_FORMATOS_LM   => array('SEDEX Contrato Grandes Formatos (Liminar ABCOMM)', null),
        self::SERVICE_SEDEX_CONTRATO_AGENCIA_LM   => array('SEDEX Contrato Agência (Liminar ABCOMM)', 160126),
        self::SERVICE_SEDEX_REVERSO_LM   => array('SEDEX Reverso (Liminar ABCOMM)', null),
        self::SERVICE_SEDEX_CONTRATO_UO_LM   => array('SEDEX Contrato UO (Liminar ABCOMM)', null),

        self::SERVICE_PAC_CONTRATO_GRANDES_FORMATOS_LM   => array('PAC Contrato Grandes Formatos (Liminar ABCOMM)', null),
        self::SERVICE_PAC_CONTRATO_AGENCIA_LM   => array('PAC Contrato Agência (Liminar ABCOMM)', 160123),
        self::SERVICE_PAC_REVERSO_LM   => array('PAC Reverso (Liminar ABCOMM)', null),
        self::SERVICE_PAC_CONTRATO_UO_LM   => array('PAC Contrato UO (Liminar ABCOMM)', null),

        self::SERVICE_SEDEX_CONTRATO_AGENCIA_PAGAMENTO_NA_ENTREGA_LM   => array('SEDEX Contrato Agencia Pagamento na Entrega (Liminar ABCOMM)', null),
        self::SERVICE_PAC_CONTRATO_AGENCIA_PAGAMENTO_NA_ENTREGA_LM   => array('PAC Contrato Agencia Pagamento na Entrega (Liminar ABCOMM)', null),
    );

    /**
     * @var string
     */
    protected $codigo;
    /**
     * @var int
     */
    protected $idServico;
    /**
     * @var string
     */
    protected $nome;

    /**
     * @param int $serviceCode
     *        One of the constants {@link ServicoDePostagem}::SERVICE_*
     *
     * @throws Exception
     */
    public function __construct($serviceCode)
    {
        $normalizedServiceCode = sprintf("%'05s",  $serviceCode);

        /*if (!isset(self::$services[$normalizedServiceCode])) {
            throw new Exception('There is no service with the code "' . $serviceCode . '".');
        }*/

        $service = self::$services[$normalizedServiceCode];
        parent::__construct(
            array(
                'codigo'    => $normalizedServiceCode,
                'nome'      => $service[0],
                'idServico' => $service[1],
            )
        );
    }

    /**
     * @return ServicoDePostagem[]
     */
    public static function getAll()
    {
        $r = array();
        foreach (self::$services as $serviceCode => $serviceDetails) {
            $r[] = new self($serviceCode);
        }

        return $r;
    }

    /**
     * @param int $serviceCode
     *        One of the constants {@link ServicoDePostagem}::SERVICE_*
     *
     * @return bool
     */
    public function is($serviceCode)
    {
        return $this->getCodigo() == $serviceCode;
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param int $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return int
     */
    public function getIdServico()
    {
        return $this->idServico;
    }

    /**
     * @param int $idServico
     */
    public function setIdServico($idServico)
    {
        $this->idServico = $idServico;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


}
