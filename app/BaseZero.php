<?php
namespace App;

use Illuminate\Support\Facades\DB;

use App\SituacaoDemanda;
use Modules\Atendimento\Entities\Assunto;
use Modules\Atendimento\Entities\Atendimento_Assunto;
use \Modules\Atendimento\Entities\Tipo as TipoAtendimento;

class BaseZero
{

    public function inserirRegistros()
    {
        // Atendimento
        $this->inserirTiposAtendimento();
        $this->inserirAssuntosAtendimento();

        // Auth
        $this->inserirPermissoes();

        // Demandas
        $this->inserirSituacoesDemanda();
        $this->inserirTiposDocumento();
        
    }

    public function removerRegistros()
    {
        DB::table(TipoDocumento::TABLE_NAME)->delete();
        DB::table(SituacaoDemanda::TABLE_NAME)->delete();

        DB::table(Permissao::TABLE_NAME)->delete();

        DB::table(Assunto::TABLE_NAME)->delete();
        DB::table(TipoAtendimento::TABLE_NAME)->delete();
    }

    private function inserirSituacoesDemanda() {
        /**
         * Inserindo registros em situacaodemanda
         */
        DB::transaction(function () {
            $registrosAInserir = [
                [
                    'id' => SituacaoDemanda::NOVA, 
                    'situacao' => SituacaoDemanda::NOVA_DESC
                ],
                [
                    'id' => SituacaoDemanda::EM_ANALISE, 
                    'situacao' => SituacaoDemanda::EM_ANALISE_DESC
                ],
                [
                    'id' => SituacaoDemanda::RESOLVIDA, 
                    'situacao' => SituacaoDemanda::RESOLVIDA_DESC
                ],
                [
                    'id' => SituacaoDemanda::CANCELADA, 
                    'situacao' => SituacaoDemanda::CANCELADA_DESC
                ],
                [
                    'id' => SituacaoDemanda::PRONTA, 
                    'situacao' => SituacaoDemanda::PRONTA_DESC
                ],
                [
                    'id' => SituacaoDemanda::AGUARDANDO_ASSINATURA, 
                    'situacao' => SituacaoDemanda::AGUARDANDO_ASSINATURA_DESC
                ],
                [
                    'id' => SituacaoDemanda::AGUARDANDO_AR, 
                    'situacao' => SituacaoDemanda::AGUARDANDO_AR_DESC
                ],
            ];
            DB::table(SituacaoDemanda::TABLE_NAME)->insertOrIgnore($registrosAInserir);
        });
    }

    private function inserirTiposAtendimento() {
        /**
         * Inserindo registros em situacaodemanda
         */
        DB::transaction(function () {
            $registrosAInserir = [
                [ 'tipo' => "Presencial" ],
                [ 'tipo' => "Telefônico" ],
                [ 'tipo' => "E-mail" ],
            ];
            DB::table(TipoAtendimento::TABLE_NAME)->insertOrIgnore($registrosAInserir);
        });
    }

    private function inserirAssuntosAtendimento() {
        $atend_assunto = [
            ['assunto' => 'Outros (detalhar nos comentários)'],
            ['assunto' => 'Demarcação - obter cartas e informações sobre demarcação'],
            ['assunto' => 'Averbação de Transferência'],
            ['assunto' => 'Revisão de área ou valor'],
            ['assunto' => 'Aforamento'],
            ['assunto' => 'TAUS - Termo de Autorização de Uso Sustentável'],
            ['assunto' => 'Isenção de Pagamento das Taxas de Ocupação ou Foro'],
            ['assunto' => 'Unificação/ Desmembramento/ Fracionamento'],
            ['assunto' => 'Inscrição de Ocupação e regularização de área'],
            ['assunto' => 'Permissão de Uso'],
            ['assunto' => 'Reclamação sobre atendimento'],
            ['assunto' => 'DARF - Como emitir'],
            ['assunto' => 'Certidão de Provimento'],
            ['assunto' => 'Certidão Negativa de Débito'],
            ['assunto' => 'Cessão de Espaço Aquático'],
            ['assunto' => 'Cópia de processo'],
            ['assunto' => 'Cessão de Espaço Terrestre'],
            ['assunto' => 'DARF - Consulta sobre DARF recebido sem conhecimento'],
            ['assunto' => 'Consulta sobre legislação SPU'],
            ['assunto' => 'Declaração de Domínio - Como saber se uma área é da União'],
            ['assunto' => 'Ligação de Cartórios'],
            ['assunto' => 'Ligação de Outros Órgão Públicos'],
            ['assunto' => 'Reclamação sobre demora de conclusão de processo'],
            ['assunto' => 'Reclamação sobre e-mail não respondido'],
            ['assunto' => 'Reclamação sobre manifestação técnica equivocada'],
            ['assunto' => 'Transferência de titularidade - CAT automática, laudêmio etc'],
            ['assunto' => 'Transferência de titularidade - CAT Especial'],
            ['assunto' => 'Usucapião Extrajudicial, Anuências, Confrontações'],
            ['assunto' => 'Usucapião Judicial​'],
            ['assunto' => 'Arquivos de LPM'],
            ['assunto' => 'Ligações para Gabinente'],
            ['assunto' => 'Ligações para Servidores']
          ];
        DB::table(Assunto::TABLE_NAME)->insertOrIgnore($atend_assunto);
    }

    private function inserirTiposDocumento() {
        DB::transaction(function () {
            $registrosAInserir = [
                [
                    'tipodocumento' => 'Ofício'
                ],
                [
                    'tipodocumento' => 'Despacho'
                ],
                [
                    'tipodocumento' => 'Memorando'
                ],
                [
                    'tipodocumento' => 'E-mail'
                ],
                [
                    'tipodocumento' => 'Carta'
                ]
            ];
            DB::table(TipoDocumento::TABLE_NAME)->insertOrIgnore($registrosAInserir);
        });
    }

    private function inserirPermissoes() {
        DB::transaction(function () {
            $registrosAInserir = [
                /**
                 * Atendimento
                 */
                [
                    'permissao' => Permissao::ATENDIMENTO_ATENDIMENTO_CRIAR_PRESENCIAL,
                    'descricao' => 'Permite iniciar/salvar/concluir um atendimento presencial'
                ],
                [
                    'permissao' => Permissao::ATENDIMENTO_ATENDIMENTO_CRIAR_TELEFONICO,
                    'descricao' => 'Permite iniciar/salvar/concluir um atendimento telefônico'
                ],
                [
                    'permissao' => Permissao::ATENDIMENTO_ATENDIMENTO_CRIAR_EMAIL,
                    'descricao' => 'Permite iniciar/salvar/concluir um atendimento por e-mail'
                ],
                [
                    'permissao' => Permissao::ATENDIMENTO_COMENTARIO_CRIAR,
                    'descricao' => 'Permite criar um comentário em um atendimento'
                ],
                /**
                 * Auth
                 */
                [
                    'permissao' => Permissao::AUTH_PERMISSAO_CADASTRAR,
                    'descricao' => 'Permite ao usuário gerir permissões do sistema'
                ],
                [
                    'permissao' => Permissao::AUTH_USUARIO_CADASTRAR,
                    'descricao' => 'Permite ao usuário gerir usuários'
                ],
                [
                    'permissao' => Permissao::AUTH_ORGANOGRAMA_CADASTRAR,
                    'descricao' => 'Permite ao usuário gerir divisões do organograma'
                ],
                /**
                 * Correspondência
                 */
                [
                    'permissao' => Permissao::CORRESPONDENCIA_CORRESPONDENCIA_POSTAR,
                    'descricao' => 'Permite ao usuário da área de apoio gerir postagens'
                ],
                /**
                 * Demandas (Judicial)
                 */
                [
                    'permissao' => Permissao::DEMANDA_DEMANDA_CADASTRAR,
                    'descricao' => 'Permite cadastrar/editar demandas'
                ],
                [
                    'permissao' => Permissao::DEMANDA_DEMANDA_ALTERAR_RESUMO_GERENCIAL,
                    'descricao' => 'Permite ao usuário alterar o campo resumo gerencial'
                ],
                [
                    'permissao' => Permissao::DEMANDA_DEMANDA_ATENDER_DISTRIBUICAO,
                    'descricao' => 'Permite a um usuário atender distruição feita a si próprio ou ao seu núcleo'
                ],
                /**
                 * Demarcação
                 */
                [
                    'permissao' => Permissao::DEMARCACAO_DEMARCACAO_CADASTRAR,
                    'descricao' => 'Permite ao usuário gerenciar demarcações no módulo Demarcação'
                ],
                /**
                 * Patrimônio
                 */
                [
                    'permissao' => Permissao::PATRIMONIO_PATRIMONIO_CADASTRAR,
                    'descricao' => 'Permite ao usuário da área de apoio gerir bens patrimoniais'
                ],
    
            ];
            DB::table(Permissao::TABLE_NAME)->insertOrIgnore($registrosAInserir);
        });
    }

}