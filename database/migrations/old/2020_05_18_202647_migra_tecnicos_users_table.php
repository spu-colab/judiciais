<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;
class MigraTecnicosUsersTable extends Migration
{
    public $tecnicos = array (        
        ["name" => "Nildo Azevedo", "cpf" => "48499234968", "email" => "nildo.azevedo@planejamento.gov.br", "telefone" => "(48)99828218", "situacao" => "0"],
        ["name"=>"Ari Custódio Pedro", "cpf"=>"25207792920", "email"=>"ari.pedro@planejamento.gov.br",  "telefone"=> "(48)32587509","situacao"=>"1"],
        ["name"=>"Juliano Luiz Pinzetta", "cpf"=>"03760336906", "email"=>"juliano.pinzetta@planejamento.gov.br",  "telefone"=> "(48)96269994","situacao"=>"0"],
        ["name"=>"Marco Antônio Hernandes Pessoa de Almeida", "cpf"=>"40005917115", "email"=>"marco.pessoa@planejamento.gov.br",  "telefone"=> "(48)32245399","situacao"=>"1"],
        ["name"=>"Marcelo Brasil", "cpf"=>"69299030006", "email"=>"marcelo.brasil@planejamento.gov.br",  "telefone"=> "(48)99100537","situacao"=>"1"],
        ["name"=>"Tereza Cristina Godinho Alves", "cpf"=>"45844135920", "email"=>"tereza.alves@planejamento.gov.br",  "telefone"=> "(48)99815740","situacao"=>"1"],
        ["name"=>"Clara Eugênia Westphal Ribeiro", "cpf"=>"45844402987", "email"=>"clara.ribeiro@planejamento.gov.br",  "telefone"=> "(48)99388313","situacao"=>"0"],
        ["name"=>"Rodrigo Pinto Fernandes", "cpf"=>"07716820770", "email"=>"rodrigo.fernandes@planejamento.gov.br",  "telefone"=> "(48)96434293","situacao"=>"0"],
        ["name"=>"Roberto Lopes Pedro", "cpf"=>"34218386900", "email"=>"roberto.pedro@planejamento.gov.br",  "telefone"=> "(48)99894354","situacao"=>"1"],
        ["name"=>"Isolde Espindola", "cpf"=>"34237011968", "email"=>"isolde.espindola@planejamento.gov.br",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Maria Carolina Bitu Batista Moreno", "cpf"=>"80726925004", "email"=>"maria.moreno@planejamento.gov.br",  "telefone"=> "(48)96546161","situacao"=>"0"],
        ["name"=>"Adelina Cristina Pinto", "cpf"=>"49311476072", "email"=>"",  "telefone"=> "(48)99895299","situacao"=>"1"],
        ["name"=>"Rejane dos Santos", "cpf"=>"41689798904", "email"=>"rejane.santos@planejamento.gov.br",  "telefone"=> "(48)84318681","situacao"=>"0"],
        ["name"=>"Sônia Antunes da Rosa", "cpf"=>"37590367915", "email"=>"spusc@planejamento.gov.br",  "telefone"=> "(48)84152249","situacao"=>"1"],
        ["name"=>"Carlos T. A. de Magalhães Gomes", "cpf"=>"02805693787", "email"=>"carlos.gomes@planejamento.gov.br",  "telefone"=> "(48)99477336","situacao"=>"1"],
        ["name"=>"Rosely Maria Azevedo", "cpf"=>"25212907934", "email"=>"rosely.azevedo@planejamento.gov.br",  "telefone"=> "(48)32049558","situacao"=>"0"],
        ["name"=>"Márcia Francisca F. Ribeiro", "cpf"=>"48214353904", "email"=>"marcia.ribeiro@planejamento.gov.br",  "telefone"=> "(48)99251115","situacao"=>"1"],
        ["name"=>"Airton Rosa de Oliveira", "cpf"=>"16649206091", "email"=>"airton.oliveira@planejamento.gov.br",  "telefone"=> "","situacao"=>"0"],
        ["name"=>"Daiane Marlene Meurer", "cpf"=>"05466738999", "email"=>"dai_anemeurer@hotmail.com",  "telefone"=> "(48)84267876","situacao"=>"1"],
        ["name"=>"Gelson Barbosa Medeiros", "cpf"=>"28844122715", "email"=>"Gelson.medeiros@planejamento.gov.br",  "telefone"=> "","situacao"=>"0"],
        ["name"=>"Cleusa Soely Ferreira ", "cpf"=>"41761383949", "email"=>"cleusa.ferreira@planejamento.gov.br",  "telefone"=> "(48)99530631","situacao"=>"0"],
        ["name"=>"Renilda Messias da Costa Martins", "cpf"=>"28864530991", "email"=>"renilda.martins@planejamento.gov.br",  "telefone"=> "(48)33467954","situacao"=>"0"],
        ["name"=>"Josyanne Alves de Souza", "cpf"=>"24898996272", "email"=>"josyanne.souza@planejamento.gov.br",  "telefone"=> "(48)96571532","situacao"=>"0"],
        ["name"=>"Adelita Biazus de Melo", "cpf"=>"48085626934", "email"=>"",  "telefone"=> "(49)99194962","situacao"=>"0"],
        ["name"=>"Sebastião Vieira da Silva", "cpf"=>"28905504949", "email"=>"sebastiao.silva@planejamento.gov.br",  "telefone"=> "(48)96006524","situacao"=>"1"],
        ["name"=>"Paulo Afonso Elbert", "cpf"=>"14523701920", "email"=>"paulo.elbert@planejamento.gov.br",  "telefone"=> "(48)99802235","situacao"=>"1"],
        ["name"=>"Sonia Avaloni Soares", "cpf"=>"62759655768", "email"=>"sonia.soares@planejamento.gov.br",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Cristiano Boschetto", "cpf"=>"88936899953", "email"=>"cristiano.boschetto@planejamento.gov.br",  "telefone"=> "(48)33465257","situacao"=>"1"],
        ["name"=>"Robson Castanho", "cpf"=>"69200033172", "email"=>"robson.castanho@planejamento.gov.br",  "telefone"=> "(48)99518380","situacao"=>"0"],
        ["name"=>"Sidney de Oliveira", "cpf"=>"29989663904", "email"=>"sidney.oliveira@planejamento.gov.br",  "telefone"=> "(48)84235266","situacao"=>"1"],
        ["name"=>"José Vladimir da Silva Brito", "cpf"=>"42006724304", "email"=>"jose.brito@planejamento.gov.br",  "telefone"=> "(48)99558892","situacao"=>"0"],
        ["name"=>"Laila Silva", "cpf"=>"73245089953", "email"=>"laila.pereira@planejamento.gov.br",  "telefone"=> "(48)84112997","situacao"=>"0"],
        ["name"=>"Cassio Schappo", "cpf"=>"25203380910", "email"=>"cassio.schappo@planejamento.gov.br",  "telefone"=> "(48)99828176","situacao"=>"1"],
        ["name"=>"Niarcos Wall  T. de Almeida", "cpf"=>"02338607970", "email"=>"niarcos.almeida@planejamento.gov.br",  "telefone"=> "(48)99358193","situacao"=>"0"],
        ["name"=>"Marcos Antonio Muniz da Silva", "cpf"=>"37835955920", "email"=>"marcos_antonio.silva@planejamento.gov.br",  "telefone"=> "(48)88037882","situacao"=>"0"],
        ["name"=>"Hirã Seliste dos Passos", "cpf"=>"50680510044", "email"=>"hirã.passos@planejamento.gov.br",  "telefone"=> "(48)91221551","situacao"=>"0"],
        ["name"=>"Antonio Alberto Rangel Engelkes", "cpf"=>"15543110987", "email"=>"antonio.engelkes@planejamento.gov.br",  "telefone"=> "(48)99923093","situacao"=>"1"],
        ["name"=>"Irani Eulalia dos Santos", "cpf"=>"43276431904", "email"=>"irani.santos@planejamento.gov.br",  "telefone"=> "(48)99241995","situacao"=>"1"],
        ["name"=>"Fátima Regina S. Agostinho", "cpf"=>"54349133968", "email"=>"fatima.agostinho@planejamento.gov.br",  "telefone"=> "(48)998501750","situacao"=>"0"],
        ["name"=>"Lourdes Madalena da Silva Batista", "cpf"=>"45458057953", "email"=>"lourdes.batista@planejamento.gov.br",  "telefone"=> "(48)99087877","situacao"=>"1"],
        ["name"=>"Carlos José Bauer", "cpf"=>"07069456972", "email"=>"carlos.bauer@planejamento.gov.br",  "telefone"=> "(48)99678828","situacao"=>"0"],
        ["name"=>"Gerson Dal Piva", "cpf"=>"59447184049", "email"=>"gerson.piva@planejamento.gov.br",  "telefone"=> "(48)91339954","situacao"=>"1"],
        ["name"=>"Flaris Valério", "cpf"=>"17882370991", "email"=>"flaris.valerio@planejamento.gov.br",  "telefone"=> "(48)99822377","situacao"=>"0"],
        ["name"=>"Sirlene Blos", "cpf"=>"46993797968", "email"=>"sirlene.blos@planejamento.gov.br",  "telefone"=> "(48)88185746","situacao"=>"0"],
        ["name"=>"Ari Domingos Pires", "cpf"=>"28892623915", "email"=>"ari.pires@planejamento.gov.br",  "telefone"=> "(48)84218926","situacao"=>"0"],
        ["name"=>"Berto José Costa", "cpf"=>"20224800825", "email"=>"berto.costa@planejamento.gov.br",  "telefone"=> "(48)30346608","situacao"=>"1"],
        ["name"=>"Edgar Machado", "cpf"=>"05710740900", "email"=>"edgar.machado@planejamento.gov.br",  "telefone"=> "(48)99084720","situacao"=>"1"],
        ["name"=>"Rogério Samartin Moreira", "cpf"=>"28958178809", "email"=>"rogerio.moreira@planejamento.gov.br",  "telefone"=> "(48)96172312","situacao"=>"0"],
        ["name"=>"Barbara Virginia Bond Reis", "cpf"=>"42797055934", "email"=>"barbara.reis@planejamento.gov.br",  "telefone"=> "(48)91099513","situacao"=>"0"],
        ["name"=>"Simone Farage Freitas", "cpf"=>"92920594834", "email"=>"simone.freitas@planejamento.gov.br",  "telefone"=> "(48)99219801","situacao"=>"1"],
        ["name"=>"Nilton Martins", "cpf"=>"09613668934", "email"=>"nilton.martins@planejamento.gov.br",  "telefone"=> "(48)91640660","situacao"=>"0"],
        ["name"=>"Marcia Nunes Guimarães", "cpf"=>"42936837987", "email"=>"marcia.guimarães2planejamento.gov.br",  "telefone"=> "(48)84051363","situacao"=>"1"],
        ["name"=>"Renato Ranulfo dos Santos", "cpf"=>"07422512504", "email"=>"renato.ranulfo@planejamento.gov.br",  "telefone"=> "(48)84827784","situacao"=>"1"],
        ["name"=>"Luiz Sebastião Rampinelli", "cpf"=>"22337300978", "email"=>"luiz.rampinelli@planejamento.gov.br",  "telefone"=> "(48)91467677","situacao"=>"1"],
        ["name"=>"Ricardo Nogueira Silveira", "cpf"=>"27750845836", "email"=>"ricardo.silveira@planejamento.gov.br",  "telefone"=> "(48)84063457","situacao"=>"1"],
        ["name"=>"Flávia Helena de O. Duque", "cpf"=>"54999510634", "email"=>"flavia.duque@planejamento.gov.br",  "telefone"=> "(48)99799540","situacao"=>"0"],
        ["name"=>"Marcelo Fernando G. de Campos", "cpf"=>"44753225704", "email"=>"marcelo.campos@planejamento.gov.br",  "telefone"=> "(47)99039320","situacao"=>"1"],
        ["name"=>"Jair Rodrigues de Medeiros", "cpf"=>"26201801715", "email"=>"jair.medeiros@planejamento.gov.br",  "telefone"=> "(48)91585998","situacao"=>"1"],
        ["name"=>"Daise Lúcia Alves Mafra", "cpf"=>"54204097987", "email"=>"daise.mafra@planejamento.gov.br",  "telefone"=> "(48)88229053","situacao"=>"0"],
        ["name"=>"Ramires Luz", "cpf"=>"37844148934", "email"=>"ramires.luz@planejamento.gov.br",  "telefone"=> "(48)91012170","situacao"=>"0"],
        ["name"=>"Ilza da Silva Hisse", "cpf"=>"37556886972", "email"=>"ilza.hisse@planejamento.gov.br",  "telefone"=> "(48)99094182","situacao"=>"0"],
        ["name"=>"Willian Zonato", "cpf"=>"02322141909", "email"=>"willian.zonato@planejamento.gov.br",  "telefone"=> "(48)96386948","situacao"=>"0"],
        ["name"=>"Antonio Flávio da Silva Moreira", "cpf"=>"50717138968", "email"=>"antonio.flavio@planejamento.gov.br",  "telefone"=> "(48)99057163","situacao"=>"0"],
        ["name"=>"Vera Terezinha Rodrigues Dunchatt", "cpf"=>"38018730725", "email"=>"vera.dunchatt@planejamento.gov.br",  "telefone"=> "(48)91134848","situacao"=>"0"],
        ["name"=>"José Otávio Sorato", "cpf"=>"28883799968", "email"=>"jose.sorato@planejamento.gov.br",  "telefone"=> "(48)99734824","situacao"=>"1"],
        ["name"=>"Humberto Pereira de Almeida", "cpf"=>"11765275172", "email"=>"humberto.almeida@planejamento.gov.br",  "telefone"=> "(48)99809808","situacao"=>"1"],
        ["name"=>"Luiz França Silva", "cpf"=>"11167980778", "email"=>"luiz-franca.silva@planejamento.gov.br",  "telefone"=> "(48)91155584","situacao"=>"0"],
        ["name"=>"Marco Aurélio Testoni", "cpf"=>"60769840906", "email"=>"marco.testoni@planejamento.gov.br",  "telefone"=> "(48)96001444","situacao"=>"0"],
        ["name"=>"Marina Christofidis", "cpf"=>"69062951104", "email"=>"marina.christofidis@planejamento.gov.br",  "telefone"=> "(48)91883060","situacao"=>"0"],
        ["name"=>"Eduardo Izidoro P. Saito", "cpf"=>"05381610947", "email"=>"eduardo.saito@planejamento.gov.br",  "telefone"=> "(48)91817890","situacao"=>"1"],
        ["name"=>"Hercilio da Silva", "cpf"=>"39927962991", "email"=>"hercilio.silva@planejamento.gov.br",  "telefone"=> "(48)99696505","situacao"=>"0"],
        ["name"=>"Aldanei Tereza Rosa", "cpf"=>"45995818953", "email"=>"aldanei.duarte@planejamento.gov.br",  "telefone"=> "(48)91136928","situacao"=>"1"],
        ["name"=>"Heitor Alberto Pereira", "cpf"=>"24592021991", "email"=>"heitor.pereira@planejamento.gov.br",  "telefone"=> "(48)91535505","situacao"=>"1"],
        ["name"=>"Leoni Lorenzetti", "cpf"=>"29619890949", "email"=>"leoni.lorenzetti@planejamento.gov.br",  "telefone"=> "(48)88038575","situacao"=>"1"],
        ["name"=>"Irineu Karasiak", "cpf"=>"03003477900", "email"=>"irineu.karasiak@planejamento.gov.br",  "telefone"=> "(48)99970665","situacao"=>"1"],
        ["name"=>"Túlio Cesar Amorim de Queiroz", "cpf"=>"88728889134", "email"=>"tulio.queiroz@planejamento.gov.br",  "telefone"=> "(48)96311413","situacao"=>"0"],
        ["name"=>"Maria da Graça C. Oliveira", "cpf"=>"17063647920", "email"=>"maria.capovila-oliveira@planejamento.gov.br",  "telefone"=> "(48)99622301","situacao"=>"1"],
        ["name"=>"Luismar Gonçalves Gaspar", "cpf"=>"44680368934", "email"=>"luismar.gaspar@planejamento.gov.br",  "telefone"=> "(47)96673114","situacao"=>"1"],
        ["name"=>"Elcio Tonelli Teixeira", "cpf"=>"16742850949", "email"=>"elcio.teixeira@planejamento.gov.br",  "telefone"=> "(47)99680714","situacao"=>"1"],
        ["name"=>"Osni Vieira", "cpf"=>"21221782991", "email"=>"osni.vieira@planejamento.gov.br",  "telefone"=> "(47)99802235","situacao"=>"1"],
        ["name"=>"Idinézio Francisco de Souza", "cpf"=>"66546290944", "email"=>"neziosouza20@gmail.com",  "telefone"=> "(48)91428029","situacao"=>"0"],
        ["name"=>"Crislaine Alves Borges", "cpf"=>"07912807993", "email"=>"",  "telefone"=> "(48)96635704","situacao"=>"1"],
        ["name"=>"Leandro José Negoceki", "cpf"=>"05429262960", "email"=>"",  "telefone"=> "(41)99170876","situacao"=>"1"],
        ["name"=>"Gabriela Espindola Silva", "cpf"=>"04634988950", "email"=>"",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Camila Mendes Barnabé", "cpf"=>"08930550932", "email"=>"",  "telefone"=> "(48)88021963","situacao"=>"1"],
        ["name"=>"Adriano Guerim Pienniz", "cpf"=>"03636766007", "email"=>"",  "telefone"=> "(48)32077564","situacao"=>"1"],
        ["name"=>"Maria  Ines Ferreira", "cpf"=>"39612813000", "email"=>"",  "telefone"=> "(48)32406357","situacao"=>"1"],
        ["name"=>"Rafael Nascimento Montemor", "cpf"=>"02794094947", "email"=>"rafael.montemor@planejamento.gov.br",  "telefone"=> "(48)91157097","situacao"=>"0"],
        ["name"=>"Luciana Velasquez Lopes", "cpf"=>"00383931070", "email"=>"",  "telefone"=> "(48)33046428","situacao"=>"0"],
        ["name"=>"Cristiano Trindade de Angelis", "cpf"=>"90952464004", "email"=>"cristiano.angelis@planejamento.gov.br",  "telefone"=> "(48)84058580","situacao"=>"1"],
        ["name"=>"Silvia Beatriz Rizzieri De Luca", "cpf"=>"56485689915", "email"=>"",  "telefone"=> "(48)91071137","situacao"=>"1"],
        ["name"=>"Jorge Pinheiro Neto", "cpf"=>"71554548268", "email"=>"",  "telefone"=> "(48)96423885","situacao"=>"1"],
        ["name"=>"Deize Maria dos Santos", "cpf"=>"04462952995", "email"=>"deizemaria@live.com",  "telefone"=> "(48)99505154","situacao"=>"1"],
        ["name"=>"Guilherme Brunetto de Oliveira Ribas", "cpf"=>"04831352918", "email"=>"",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Marco Diego Rachadel", "cpf"=>"06241234994", "email"=>"",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Joel Adalberto de Melo", "cpf"=>"34440674968", "email"=>"",  "telefone"=> "(48)33384773","situacao"=>"1"],
        ["name"=>"Jorge Jacob Quint", "cpf"=>"09788816134", "email"=>"",  "telefone"=> "(48)84417627","situacao"=>"1"],
        ["name"=>"Saulo João da Costa", "cpf"=>"34457003972", "email"=>"",  "telefone"=> "(48)96193641","situacao"=>"0"],
        ["name"=>"Rejane Tanira Schreiber", "cpf"=>"55171206953", "email"=>"",  "telefone"=> "(48)32330413","situacao"=>"1"],
        ["name"=>"Samuel Gasperi", "cpf"=>"00872810909", "email"=>"",  "telefone"=> "(48)88233223","situacao"=>"0"],
        ["name"=>"Roberto Lamego Mattos Junior", "cpf"=>"66173736934", "email"=>"",  "telefone"=> "(48)84670011","situacao"=>"1"],
        ["name"=>"Ester Catarina da Silva", "cpf"=>"10239283961", "email"=>"ester.catarina@hotmail.com",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Gilson Luiz da Rocha", "cpf"=>"37609866920", "email"=>"",  "telefone"=> "(48)33340995","situacao"=>"1"],
        ["name"=>"Catarina dos Santos", "cpf"=>"10040185923", "email"=>"",  "telefone"=> "(48)32596797","situacao"=>"1"],
        ["name"=>"João José dos Santos", "cpf"=>"54217024991", "email"=>"",  "telefone"=> "(48)32432523","situacao"=>"1"],
        ["name"=>"Antônio Carlos Nunes", "cpf"=>"28997441949", "email"=>"",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Aldori Pereira da Silva", "cpf"=>"82306850968", "email"=>"",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Mário Sérgio Cardoso", "cpf"=>"89556453920", "email"=>"",  "telefone"=> "","situacao"=>"0"],
        ["name"=>"Luiz Gonzaga Gerhardt", "cpf"=>"56008066987", "email"=>"",  "telefone"=> "","situacao"=>"0"],
        ["name"=>"Rayana Narcizo Nazareth da Costa", "cpf"=>"06047896960", "email"=>"",  "telefone"=> "(48)91258392","situacao"=>"1"],
        ["name"=>"Jeuid Oliveira Junior", "cpf"=>"89827341120", "email"=>"jeuid.junior@planejamento.gov.br",  "telefone"=> "(48)96812672","situacao"=>"0"],
        ["name"=>"Daniela de Araujo dos Santos", "cpf"=>"10350576700", "email"=>"daniela.santos@planejamento.gov.br",  "telefone"=> "(48)96833991","situacao"=>"0"],
        ["name"=>"Estefania del Carmen Castro Grignon", "cpf"=>"01297215907", "email"=>"",  "telefone"=> "(48)91095542","situacao"=>"1"],
        ["name"=>"Ana Paula Pazzin Curiel", "cpf"=>"39522481858", "email"=>"ana-pazzin@hotmail.com",  "telefone"=> "(48)96661406","situacao"=>"1"],
        ["name"=>"Bruna Higino Pedro", "cpf"=>"08679083941", "email"=>"",  "telefone"=> "(48)33371582","situacao"=>"1"],
        ["name"=>"Jose Carlos Fernandes Leite", "cpf"=>"24584916772", "email"=>"",  "telefone"=> "(48)32333082","situacao"=>"0"],
        ["name"=>"Gabriel Santiago da Rosa", "cpf"=>"07599490930", "email"=>"",  "telefone"=> "(48)33727226","situacao"=>"1"],
        ["name"=>"Claudia Regina da Silva Baixo", "cpf"=>"09821507921", "email"=>"claudiabaixo@hotmail.com",  "telefone"=> "(48)32478727","situacao"=>"1"],
        ["name"=>"Andre Ricardo de Souza", "cpf"=>"48958867949", "email"=>"andre.ricardo@planejamento.gov.br",  "telefone"=> "(48)32231279","situacao"=>"1"],
        ["name"=>"Lucas Henrique Viana", "cpf"=>"09276403922", "email"=>"",  "telefone"=> "(48)32581885","situacao"=>"1"],
        ["name"=>"Andress Guilhermo Silva Leal", "cpf"=>"10350670994", "email"=>"",  "telefone"=> "(48)99666520","situacao"=>"1"],
        ["name"=>"Sabrina Mirian Koch", "cpf"=>"09786372913", "email"=>"Sabrina.mirian@hotmail.com",  "telefone"=> "(48)32721383","situacao"=>"1"],
        ["name"=>"Fabricia Paula Fucini Bastos", "cpf"=>"00501370935", "email"=>"fabriciabastos@gmail.com",  "telefone"=> "(48)32069957","situacao"=>"1"],
        ["name"=>"Magno Procopio Martins", "cpf"=>"05454877905", "email"=>"",  "telefone"=> "(48)84455243","situacao"=>"1"],
        ["name"=>"André Luiz Carlesso", "cpf"=>"09832913900", "email"=>"",  "telefone"=> "(47)88536046","situacao"=>"1"],
        ["name"=>"Telesmagno Neves Teles", "cpf"=>"46608974515", "email"=>"telesmagno.teles@planejamento.gov.br",  "telefone"=> "(48)91770014","situacao"=>"1"],
        ["name"=>"Luana Laurindo", "cpf"=>"09642987910", "email"=>"luana.laurindo@planejamento.gov.br",  "telefone"=> "(48)96028784","situacao"=>"1"],
        ["name"=>"Erculis Neves", "cpf"=>"04589700778", "email"=>"",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Luiz Carlos da Costa", "cpf"=>"76822150978", "email"=>"luiz.carlos@planejamento.gov.br",  "telefone"=> "(41)88481251","situacao"=>"1"],
        ["name"=>"Nádia Coinete Hamid Pezzini", "cpf"=>"14461110249", "email"=>"nadia.pezzini@planejamento.gov.br",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Ana Antônia Gonçalves Dias", "cpf"=>"17977983249", "email"=>"antonia.dias@planejamento.gov.br",  "telefone"=> "(48)99692122","situacao"=>"1"],
        ["name"=>"Pamela Raquel Wagnitz Nepomuceno", "cpf"=>"05640341939", "email"=>"",  "telefone"=> "(49)84451094","situacao"=>"1"],
        ["name"=>"Samanta Trajano Cecy", "cpf"=>"08853171901", "email"=>"",  "telefone"=> "(48)32374556","situacao"=>"1"],
        ["name"=>"Leandra Ferreira Madruga", "cpf"=>"02225035059", "email"=>"lekinhaferrreira@hotmail.com",  "telefone"=> "(48)99173505","situacao"=>"1"],
        ["name"=>"Daiane Eckardt Derlam", "cpf"=>"09313233983", "email"=>"",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Janise Santana de Cantuária", "cpf"=>"18847927234", "email"=>"janise.cantuaria@planejameno.gov.br",  "telefone"=> "(48)99982787","situacao"=>"0"],
        ["name"=>"Marcelo Silveira Raupp", "cpf"=>"03093503019", "email"=>"marcelo.raupp@planejamento.gov.br",  "telefone"=> "(51)99748999","situacao"=>"0"],
        ["name"=>"Israel Costa Queiroz", "cpf"=>"03163891020", "email"=>"",  "telefone"=> "(48)91314607","situacao"=>"1"],
        ["name"=>"Ana Caroline da Silva Borges", "cpf"=>"09602659963", "email"=>"ana.borges@planejamento.gov.br",  "telefone"=> "(48)96015914","situacao"=>"0"],
        ["name"=>"Mateus Pauli Piazza", "cpf"=>"09628801910", "email"=>"mateus.piazza@planejamento.gov.br",  "telefone"=> "(48)99246412","situacao"=>"1"],
        ["name"=>"Alysson Marques", "cpf"=>"00715334948", "email"=>"alysson.marques@planejamento.gov.br",  "telefone"=> "(48)99282602","situacao"=>"0"],
        ["name"=>"Laureano Struck", "cpf"=>"73365424920", "email"=>"laureano.struck@planejamento.gov.br",  "telefone"=> "(61)99763407","situacao"=>"0"],
        ["name"=>"Camila Porto Fasolo", "cpf"=>"05309676937", "email"=>"camila.fasolo@planejamento.gov.br",  "telefone"=> "(48)99340039","situacao"=>"0"],
        ["name"=>"Carolina Lima Marques", "cpf"=>"09925303931", "email"=>"carolbertte@gmail.com",  "telefone"=> "(48)98113871","situacao"=>"1"],
        ["name"=>"Luiz Fernando Palin Droubi", "cpf"=>"21868016803", "email"=>"luiz.droubi@planejamento.com.br",  "telefone"=> "(48)96730389","situacao"=>"0"],
        ["name"=>"Jeoh Leal Lauda", "cpf"=>"04280090939", "email"=>"",  "telefone"=> "(48)98083357","situacao"=>"0"],
        ["name"=>"Krislaine de Moraes Ferreira", "cpf"=>"05834157920", "email"=>"",  "telefone"=> "(48)99289635","situacao"=>"0"],
        ["name"=>"Leonardo Rodrigues Muniz ", "cpf"=>"09655183963", "email"=>"munizzleo@hotmail.com",  "telefone"=> "(48)33751211","situacao"=>"1"],
        ["name"=>"Ramon Marcos Lima", "cpf"=>"09110272976", "email"=>"",  "telefone"=> "(48)91434987","situacao"=>"1"],
        ["name"=>"Marília Campos Moser", "cpf"=>"04966347980", "email"=>"",  "telefone"=> "(48)999154789","situacao"=>"0"],
        ["name"=>"Alexandre Jablonski Philippi", "cpf"=>"88773809934", "email"=>"",  "telefone"=> "(48)988087662","situacao"=>"0"],
        ["name"=>"Manglio Ortiz de Almeida", "cpf"=>"64447960087", "email"=>"",  "telefone"=> "(48)99259910","situacao"=>"0"],
        ["name"=>"Evaldo Paulino da Silva", "cpf"=>"51423065972", "email"=>"evaldo.silva@planejamento.gov.br",  "telefone"=> "(48)98062131","situacao"=>"0"],
        ["name"=>"Carine Domingues dos Santos ", "cpf"=>"00951272080", "email"=>"",  "telefone"=> "(48)999547371","situacao"=>"1"],
        ["name"=>"Tammy de Almeida Santana", "cpf"=>"11163872636", "email"=>"",  "telefone"=> "(48)988520253","situacao"=>"1"],
        ["name"=>"Julia Bellozupro Bruschi", "cpf"=>"00953358976", "email"=>"",  "telefone"=> "(49)98403536","situacao"=>"1"],
        ["name"=>"Clarissa Pereira Antunes", "cpf"=>"91079918000", "email"=>"cla.antunes2004@gmail.com",  "telefone"=> "","situacao"=>"0"],
        ["name"=>"Márcia Aparecida Ribeiro dos Santos", "cpf"=>"73236977949", "email"=>"marcia.santos@planejamento.gov.br",  "telefone"=> "(48)99967935","situacao"=>"0"],
        ["name"=>"Algemiro Ambrosi Junior", "cpf"=>"00762060760", "email"=>"",  "telefone"=> "(48)32518210","situacao"=>"1"],
        ["name"=>"Ricardo Souza Rosa Silva", "cpf"=>"85818700585", "email"=>"ricardorosa1994@gmail.com",  "telefone"=> "(48)91846464","situacao"=>"1"],
        ["name"=>"José Arthur A Francisco", "cpf"=>"43344644831", "email"=>"jose.francisco@planejamento.gov.br",  "telefone"=> "","situacao"=>"1"],
        ["name"=>"Daniel Dias Teixeira de Oliveira", "cpf"=>"07950097981", "email"=>"ddias.oliv@gmail.com",  "telefone"=> "(48)91234544","situacao"=>"1"],
        ["name"=>"Nabih Henrique Chraim", "cpf"=>"03117540903", "email"=>"",  "telefone"=> "(48)99583713","situacao"=>"0"],
        ["name"=>"Alexandre Pandino Azevedo", "cpf"=>"01795692952", "email"=>"alexandre.pandino@planejamento.gov.br",  "telefone"=> "(61)81259945","situacao"=>"0"],
        ["name"=>"Maria Alice Fernandes ", "cpf"=>"78571286949", "email"=>"maria.a.fernandes@planejamento.gov.br",  "telefone"=> "(48)99027554","situacao"=>"0"],
        ["name"=>"Luciana Mara de Oliveira", "cpf"=>"70561150125", "email"=>"oliveira.lu.mara@gmail.com",  "telefone"=> "","situacao"=>"0"],
        ["name"=>"Karen Andressa Ramos ", "cpf"=>"05346416951", "email"=>"kandressa17@gmail.com",  "telefone"=> "","situacao"=>"0"],
        ["name"=>"Claudio Fiuza de Almeida", "cpf"=>"17718289869", "email"=>"",  "telefone"=> "","situacao"=>"0"]
    );

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        foreach ($this->tecnicos as $p) {
            $user = User::where('cpf', $p['cpf'])->first();
            if (!$user){
                $deleted_at = $p['situacao']=='0'? null: date("Y-m-d H:i:s"); 
                User::insert(
                    [
                        'name'=>$p['name'],
                        'cpf'=>$p['cpf'],
                        'email'=>$p['email'] == "" ? $p['cpf'] : $p['email'] ,
                        'telefone'=>$p['telefone'],
                        'origem'=>'spu-sc-admin',
                        'deleted_at'=>$deleted_at,
                        'password'=>''
                    ]
                );
            }
        };
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::where('origem', 'spu-sc-admin')->delete();
    }
}
