<template>
    <crud v-if="urlBase" ref="crud"
        nomeEntidade="Procedimento Externo" nomeEntidadePlural="Procedimentos Externos"
        :headers="cabecalhos" 
        :resource-url="urlBase"
        itemKey="id"
        @clicou-item="selecionarParaEdicao" 
        @clicou-salvar="salvar"
        @clicou-cancelar="cancelar"
        @clicou-novo="novo">
        <template slot="detalhe">
            <v-card>
                <v-card-text>
                    <v-tabs v-model="tabAtiva" @change="mudouDeTab">
                        <v-tab>Cadastro</v-tab>
                        <v-tab>Demandas</v-tab>
                        <v-tab :disabled="entidadeAtual == null || entidadeAtual.id == null">Georreferenciamento</v-tab>

                        <v-tabs-slider color="primary"></v-tabs-slider>

                        <!-- TAB CADASTRO -->
                        <v-tab-item>
                            <v-container>
                                <div v-if="entidadeAtual">
                                    <v-layout row wrap>
                                        <v-flex xs12 lg4>
                                            <v-autocomplete label="Tipo"
                                            :items="tiposProcedimento" v-model="entidadeAtual.idTipoProcedimentoExterno" 
                                            :rules="[validacao.obrigatorio]" required
                                            item-text="tipoprocedimento" item-value="id"  />
                                        </v-flex>
                                        <v-flex xs12 lg4>
                                            <v-text-field label="Procedimento" v-model="entidadeAtual.procedimento" 
                                                :rules="[validacao.obrigatorio, validacao.tamanhoMinimo(entidadeAtual.procedimento, 8)]" required 
                                                counter="150"  maxlength="150"/>
                                        </v-flex>
                                        <v-flex xs12 lg4>
                                            <v-text-field label="Chave de Acesso" v-model="entidadeAtual.chave" 
                                                counter="50"  maxlength="50"/>
                                        </v-flex>
                                    </v-layout>
                                    <v-layout row wrap>
                                        <v-flex xs12 lg8>
                                            <v-text-field label="Resumo" v-model="entidadeAtual.resumo" 
                                                counter="150"  maxlength="150"/>
                                        </v-flex>
                                        <v-flex xs12 lg4>
                                            <v-autocomplete label="Polo"
                                                :items="polosProcedimento" v-model="entidadeAtual.idPoloProcedimentoExterno" 
                                                :rules="[validacao.obrigatorio]" required
                                                item-text="polo" item-value="id"  />
                                        </v-flex>
                                    </v-layout>
                                    <v-layout row wrap>
                                        <v-flex xs12 lg12>
                                            <v-textarea  
                                                label="Descrição"
                                                v-model="entidadeAtual.descricao">
                                            </v-textarea>
                                        </v-flex>
                                    </v-layout>
                                </div>
                            </v-container>
                        </v-tab-item>
                        <!-- Fim da TAB CADASTRO -->

                        <!-- TAB DEMANDAS -->
                        <v-tab-item>
                            <v-container>
                                <v-data-table
                                    :headers="cabecalhosDemandas"
                                    :items="demandas"
                                    item-key="id" 
                                    v-if="demandas"
                                    >
                                    <template v-slot:item="props">
                                        <tr @click='$router.push("/demanda/" + props.item.id )' style="cursor:pointer;">
                                            <td>{{ (new Date(props.item.created_at)).toLocaleDateString() }}</td>
                                            <td>
                                                {{ props.item.documentoExterno }}
                                                <div class="caption grey--text">
                                                    {{ props.item.autor.nome }}
                                                </div>
                                                <div class="caption grey--text">
                                                    {{ props.item.autor.cargo.cargo }} - {{ props.item.autor.orgao.sigla}}
                                                </div>
                                            </td>
                                            <td>{{ props.item.nupSEI }}</td>
                                            <td>{{ (new Date(props.item.dataPrazo)).toLocaleDateString() }}</td>
                                            <td>{{ props.item.situacao.situacao }}</td>
                                        </tr>
                                    </template>
                                </v-data-table>
                            </v-container>
                        </v-tab-item>
                        <!-- Fim de TAB DEMANDAS -->

                        <!-- TAB GEORREFERENCIAMENTO -->
                        <v-tab-item>
                            <v-container>
                                <geo-referenciamento v-if="entidadeAtual"
                                    :tabelaReferenciaCamada="tabelaReferenciaCamada" 
                                    :idReferenciado="entidadeAtual.id" 
                                    :atualizarMapa="atualizarMapa"></geo-referenciamento>
                            </v-container>
                        </v-tab-item>
                        <!-- Fim da TAB GEORREFERENCIAMENTO -->


                    </v-tabs>
                </v-card-text>
            </v-card>
        </template>
    </crud>
</template>

<script>
import rotas from './../../rotas-servico.js'
import CRUD from './../ApiCrud'
import Validador from './../../validacao';
import GeoReferenciamento from './../GeoReferenciamento'

const PROCEDIMENTO_TAB_CADASTRO = 0;
const PROCEDIMENTO_TAB_DEMANDAS = 1;
const PROCEDIMENTO_TAB_GEORREFERENCIAMENTO = 2;

export default {
    components: {
        'crud' : CRUD
    },
    data: () => {
        return {
            tabelaReferenciaCamada: 'procedimentoexterno',
            atualizarMapa: false,
            tabAtiva: 0,
            urlBase: rotas.rotas().procedimentoExterno.listar,
            cabecalhos: [
                /*
                { 
                    text: 'id',
                    value: 'idProcedimento'
                },
                */
                { 
                    text: 'Tipo',
                    value: 'tipoProcedimentoExterno'
                },
                { 
                    text: 'Procedimento',
                    value: 'procedimento'
                },
                { 
                    text: 'Resumo',
                    value: 'resumo'
                }
            ],
            entidadeAtual: null,

            validacao: Validador,

            tiposProcedimento: [],
            carregandoTiposProcedimento: false,

            polosProcedimento: [],
            carregandoPolosProcedimento: false,

            // demandas
            demandas: null,
            cabecalhosDemandas: [
                { 
                    text: 'Data',
                    value: 'created_at'
                },
                { 
                    text: 'Documento',
                    value: 'documentoExterno'
                },
                { 
                    text: 'SEI',
                    value: 'nupSEI'
                },
                { 
                    text: 'Prazo',
                    value: 'dataPrazo'
                },
                { 
                    text: 'Situação',
                    value: 'situacao'
                },
            ],
        }
    },
    methods: {

        selecionarParaEdicao(item) {
            // console.log('Item selecionado: ' + item.id)
            this.tabAtiva = PROCEDIMENTO_TAB_CADASTRO
            this.$http.get(rotas.rotas().procedimentoExterno.buscar + item.id)
                .then(
                    response => {
                        // console.log('consultando procedimento :' + item.id)
                        // console.log(response)
                        response.body.forEach(element => {
//                            element.tipoProcedimentoExterno = element.tipo_procedimento_externo.tipoprocedimento
                            this.entidadeAtual = element
                            this.atualizarMapa = true
                        })
                    },
                    error => {
                        console.log(error)
                    }
                )
            this.carregarTabelasApoio()
        },

        salvar() {
            let formData = new FormData()
            formData.append('procedimentoExterno[id]', this.entidadeAtual.id)
            formData.append('procedimentoExterno[idTipoProcedimentoExterno]', this.entidadeAtual.idTipoProcedimentoExterno)
            formData.append('procedimentoExterno[idPoloProcedimentoExterno]', this.entidadeAtual.idPoloProcedimentoExterno)
            formData.append('procedimentoExterno[procedimento]', this.entidadeAtual.procedimento)
            formData.append('procedimentoExterno[chave]', this.entidadeAtual.chave)
            formData.append('procedimentoExterno[resumo]', this.entidadeAtual.resumo)
            formData.append('procedimentoExterno[descricao]', this.entidadeAtual.descricao)
            if(this.entidadeAtual.id != null) {
                formData.append('_method', 'PUT') 
            }

            let url = this.entidadeAtual.id === null ? 
                rotas.rotas().procedimentoExterno.criar : 
                rotas.rotas().procedimentoExterno.editar + '' + this.entidadeAtual.id;

            this.$http.post(url, formData)
                .then(
                    response => {
                        this.$store.commit('sistema/mensagem', 'Procedimento Externo cadastrado com sucesso!')
                        this.$refs.crud.loadItems()
                    },
                    error => {
                        console.log(error.body)
                        this.$store.commit('sistema/alerta', error.body.message)
                    }
                )
        },
        cancelar() {
            this.$refs.crud.loadItems()
        },
        novo(item) {
            this.carregarTabelasApoio()
            this.entidadeAtual = {
                id: null
            }
        },

        carregarTiposProcedimento () {
            this.carregandoTiposProcedimento = true
            this.tiposProcedimento = []
            this.$http
                .get(rotas.rotas().tipoProcedimentoExterno.listar)
                .then(
                    response => {
                        response.body.forEach(element => {
                            this.tiposProcedimento.push(element)
                        })
                        this.carregandoTiposProcedimento = false
                    },
                    error => {
                        console.log(error)
                        this.carregandoTiposProcedimento = false
                    }
                )
        },

        carregarPolosProcedimento () {
            this.carregandoPolosProcedimento = true
            this.polosProcedimento = []
            this.$http
                .get(rotas.rotas().poloProcedimentoExterno.listar)
                .then(
                    response => {
                        response.body.forEach(element => {
                            this.polosProcedimento.push(element)
                        })
                        this.carregandoPolosProcedimento = false
                    },
                    error => {
                        console.log(error)
                        this.carregandoPolosProcedimento = false
                    }
                )
        },

        carregarDemandas() {
            this.demandas = [];
            let url = rotas.rotas().demanda.listarPorProcedimentoExterno + this.entidadeAtual.id
            this.$http.get(url)
                .then(
                    response => {
                        // console.log(response);
                        response.body.forEach(element => {
                            // console.log(element)
                            this.demandas.push(element)
                        })
                    },
                    error => {
                        console.log(error)
                    }
                )
            
        },
        isTabDemandas () {
            return this.tabAtiva == PROCEDIMENTO_TAB_DEMANDAS
        },

        isTabGeorreferenciamento () {
            return this.tabAtiva == PROCEDIMENTO_TAB_GEORREFERENCIAMENTO
        },

        mudouDeTab() {
            this.atualizarMapa = false;
            if(this.isTabDemandas()) {
                this.carregarDemandas()
            }
            if(this.isTabGeorreferenciamento()) {
                this.atualizarMapa = true;
            }
        },

        carregarTabelasApoio() {
            this.carregarTiposProcedimento()
            this.carregarPolosProcedimento()
        }
    },
    mounted() {

        // this.carregarItens([1, '25', '', '0', true]);  

        if(this.$route.params.id) {
            this.selecionarParaEdicao({ id: this.$route.params.id})
        }
    }
}
</script>
