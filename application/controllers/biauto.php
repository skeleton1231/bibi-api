<?php
/**
 * Created by PhpStorm.
 * User: huanghaitao
 * Date: 16/7/11
 * Time: 21:26
 */

class BiautoController extends ApiYafControllerAbstract {


    public $treeUrl = 'http://car.bitauto.com/tree_chexing';

    public $curlHandler = null;

    public $serverName = 'http://car.bitauto.com';

    public function init()
    {

        $this->curlHandler = new \Curl\Curl();

    }

    public function treeHtmlAction(){


        $url = 'http://car.bitauto.com/tree_chexing/sb_2921/';


        $str = $this->curlHandler->get($url);


        $html = \Sunra\PhpSimple\HtmlDomParser::str_get_html($str);


        $list = $html->find('#compare_sale',0);


        $trs = $list->find('tr');

        foreach ($trs as $k => $tr){
            $class = 'class';
            if(!$tr->$class){

                $key = 'id';
                echo $tr->$key;
                echo "\n";
                echo $tr->find('a',0)->innertext;
                echo "\n";
                echo "\n";

            }
        }
    }

    public function treeAction(){


        $str = '<ul><li class="root" id="letter1"><b>A</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_9/" class="mainBrand"><big>奥迪</big><span>(37)</span></a></li><li><a href="/tree_chexing/mb_97/" class="mainBrand"><big>阿斯顿·马丁</big><span>(12)</span></a></li><li><a href="/tree_chexing/mb_92/" class="mainBrand"><big>阿尔法·罗密欧</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_151/" class="mainBrand"><big>阿尔特</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_180/" class="mainBrand"><big>AC Schnitzer</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_228/" class="mainBrand"><big>Artega</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_12/" class="mainBrand"><big>奥克斯</big><span>(1)</span></a></li></ul></li><li class="root" id="letter2"><b>B</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_26/" class="mainBrand"><big>本田</big><span>(31)</span></a></li><li><a href="/tree_chexing/mb_2/" class="mainBrand"><big>奔驰</big><span>(56)</span></a></li><li><a href="/tree_chexing/mb_127/" class="mainBrand"><big>别克</big><span>(18)</span></a></li><li><a href="/tree_chexing/mb_3/" class="mainBrand"><big>宝马</big><span>(33)</span></a></li><li><a href="/tree_chexing/mb_15/" class="mainBrand"><big>比亚迪</big><span>(25)</span></a></li><li><a href="/tree_chexing/mb_5/" class="mainBrand"><big>标致</big><span>(37)</span></a></li><li><a href="/tree_chexing/mb_157/" class="mainBrand"><big>宝骏</big><span>(7)</span></a></li><li><a href="/tree_chexing/mb_82/" class="mainBrand"><big>保时捷</big><span>(8)</span></a></li><li><a href="/tree_chexing/mb_211/" class="mainBrand"><big>北汽幻速</big><span>(9)</span></a></li><li><a href="/tree_chexing/mb_59/" class="mainBrand"><big>奔腾</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_195/" class="mainBrand"><big>北汽绅宝</big><span>(13)</span></a></li><li><a href="/tree_chexing/mb_163/" class="mainBrand"><big>北京</big><span>(7)</span></a></li><li><a href="/tree_chexing/mb_85/" class="mainBrand"><big>宾利</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_168/" class="mainBrand"><big>北汽威旺</big><span>(7)</span></a></li><li><a href="/tree_chexing/mb_14/" class="mainBrand"><big>北汽制造</big><span>(14)</span></a></li><li><a href="/tree_chexing/mb_236/" class="mainBrand"><big>宝沃</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_135/" class="mainBrand"><big>布加迪</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_172/" class="mainBrand"><big>巴博斯</big><span>(7)</span></a></li><li><a href="/tree_chexing/mb_216/" class="mainBrand"><big>北汽新能源</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_184/" class="mainBrand"><big>保斐利</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_68/" class="mainBrand"><big>宝龙</big><span>(4)</span></a></li></ul></li><li class="root" id="letter3"><b>C</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_136/" class="mainBrand"><big>长安轿车</big><span>(19)</span></a></li><li><a href="/tree_chexing/mb_159/" class="mainBrand"><big>长安商用</big><span>(24)</span></a></li><li><a href="/tree_chexing/mb_21/" class="mainBrand"><big>长城</big><span>(21)</span></a></li><li><a href="/tree_chexing/mb_129/" class="mainBrand"><big>昌河</big><span>(12)</span></a></li><li><a href="/tree_chexing/mb_230/" class="mainBrand"><big>长安跨越</big><span>(9)</span></a></li><li><a href="/tree_chexing/mb_231/" class="mainBrand"><big>长城华冠</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_221/" class="mainBrand"><big>成功</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_250/" class="mainBrand"><big>长久汽车</big><span>(1)</span></a></li></ul></li><li class="root" id="letter4"><b>D</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_8/" class="mainBrand"><big>大众</big><span>(60)</span></a></li><li><a href="/tree_chexing/mb_115/" class="mainBrand"><big>东风风行</big><span>(13)</span></a></li><li><a href="/tree_chexing/mb_253/" class="mainBrand"><big>东风风光</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_141/" class="mainBrand"><big>东风风神</big><span>(11)</span></a></li><li><a href="/tree_chexing/mb_29/" class="mainBrand"><big>东南</big><span>(11)</span></a></li><li><a href="/tree_chexing/mb_179/" class="mainBrand"><big>DS</big><span>(7)</span></a></li><li><a href="/tree_chexing/mb_113/" class="mainBrand"><big>道奇</big><span>(12)</span></a></li><li><a href="/tree_chexing/mb_235/" class="mainBrand"><big>东风·郑州日产</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_205/" class="mainBrand"><big>东风小康</big><span>(17)</span></a></li><li><a href="/tree_chexing/mb_215/" class="mainBrand"><big>东风御风</big><span>(15)</span></a></li><li><a href="/tree_chexing/mb_197/" class="mainBrand"><big>东风风度</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_27/" class="mainBrand"><big>东风</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_256/" class="mainBrand"><big>东风风诺</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_192/" class="mainBrand"><big>底特律电动车</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_106/" class="mainBrand"><big>大宇</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_66/" class="mainBrand"><big>大迪</big><span>(4)</span></a></li></ul></li><li class="root" id="letter6"><b>F</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_7/" class="mainBrand"><big>丰田</big><span>(49)</span></a></li><li><a href="/tree_chexing/mb_17/" class="mainBrand"><big>福特</big><span>(35)</span></a></li><li><a href="/tree_chexing/mb_91/" class="mainBrand"><big>法拉利</big><span>(14)</span></a></li><li><a href="/tree_chexing/mb_128/" class="mainBrand"><big>福田</big><span>(35)</span></a></li><li><a href="/tree_chexing/mb_40/" class="mainBrand"><big>菲亚特</big><span>(20)</span></a></li><li><a href="/tree_chexing/mb_67/" class="mainBrand"><big>福迪</big><span>(10)</span></a></li><li><a href="/tree_chexing/mb_208/" class="mainBrand"><big>福汽启腾</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_199/" class="mainBrand"><big>飞驰商务车</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_187/" class="mainBrand"><big>Faralli Mazzanti</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_164/" class="mainBrand"><big>菲斯克</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_61/" class="mainBrand"><big>富奇</big><span>(2)</span></a></li></ul></li><li class="root" id="letter7"><b>G</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_147/" class="mainBrand"><big>广汽传祺</big><span>(10)</span></a></li><li><a href="/tree_chexing/mb_182/" class="mainBrand"><big>观致汽车</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_109/" class="mainBrand"><big>GMC</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_63/" class="mainBrand"><big>广汽吉奥</big><span>(24)</span></a></li><li><a href="/tree_chexing/mb_252/" class="mainBrand"><big>广汽中兴</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_110/" class="mainBrand"><big>光冈</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_237/" class="mainBrand"><big>GTA</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_133/" class="mainBrand"><big>广汽日野</big><span>(3)</span></a></li></ul></li><li class="root" id="letter8"><b>H</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_196/" class="mainBrand"><big>哈弗</big><span>(11)</span></a></li><li><a href="/tree_chexing/mb_32/" class="mainBrand"><big>海马</big><span>(15)</span></a></li><li><a href="/tree_chexing/mb_58/" class="mainBrand"><big>红旗</big><span>(8)</span></a></li><li><a href="/tree_chexing/mb_112/" class="mainBrand"><big>华泰</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_108/" class="mainBrand"><big>悍马</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_52/" class="mainBrand"><big>黄海</big><span>(18)</span></a></li><li><a href="/tree_chexing/mb_31/" class="mainBrand"><big>哈飞</big><span>(19)</span></a></li><li><a href="/tree_chexing/mb_251/" class="mainBrand"><big>华泰新能源</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_149/" class="mainBrand"><big>海马商用车</big><span>(8)</span></a></li><li><a href="/tree_chexing/mb_225/" class="mainBrand"><big>华颂</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_170/" class="mainBrand"><big>海格</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_45/" class="mainBrand"><big>汇众</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_44/" class="mainBrand"><big>华普</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_181/" class="mainBrand"><big>恒天汽车</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_124/" class="mainBrand"><big>黑豹</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_119/" class="mainBrand"><big>汉江</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_70/" class="mainBrand"><big>航天圆通</big><span>(1)</span></a></li></ul></li><li class="root" id="letter10"><b>J</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_34/" class="mainBrand"><big>吉利汽车</big><span>(37)</span></a></li><li><a href="/tree_chexing/mb_4/" class="mainBrand"><big>Jeep</big><span>(13)</span></a></li><li><a href="/tree_chexing/mb_35/" class="mainBrand"><big>江淮</big><span>(37)</span></a></li><li><a href="/tree_chexing/mb_98/" class="mainBrand"><big>捷豹</big><span>(10)</span></a></li><li><a href="/tree_chexing/mb_39/" class="mainBrand"><big>金杯</big><span>(25)</span></a></li><li><a href="/tree_chexing/mb_37/" class="mainBrand"><big>江铃</big><span>(10)</span></a></li><li><a href="/tree_chexing/mb_57/" class="mainBrand"><big>金龙</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_152/" class="mainBrand"><big>九龙</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_224/" class="mainBrand"><big>江铃集团轻汽</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_161/" class="mainBrand"><big>金旅客车</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_38/" class="mainBrand"><big>江南</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_74/" class="mainBrand"><big>金程</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_121/" class="mainBrand"><big>吉林江北</big><span>(1)</span></a></li></ul></li><li class="root" id="letter11"><b>K</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_107/" class="mainBrand"><big>凯迪拉克</big><span>(18)</span></a></li><li><a href="/tree_chexing/mb_220/" class="mainBrand"><big>凯翼</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_51/" class="mainBrand"><big>克莱斯勒</big><span>(15)</span></a></li><li><a href="/tree_chexing/mb_150/" class="mainBrand"><big>开瑞</big><span>(11)</span></a></li><li><a href="/tree_chexing/mb_218/" class="mainBrand"><big>科瑞斯的</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_213/" class="mainBrand"><big>卡威</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_145/" class="mainBrand"><big>科尼赛克</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_241/" class="mainBrand"><big>康迪</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_188/" class="mainBrand"><big>卡尔森</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_212/" class="mainBrand"><big>KTM</big><span>(1)</span></a></li></ul></li><li class="root" id="letter12"><b>L</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_36/" class="mainBrand"><big>陆风</big><span>(8)</span></a></li><li><a href="/tree_chexing/mb_96/" class="mainBrand"><big>路虎</big><span>(9)</span></a></li><li><a href="/tree_chexing/mb_16/" class="mainBrand"><big>铃木</big><span>(26)</span></a></li><li><a href="/tree_chexing/mb_94/" class="mainBrand"><big>雷克萨斯</big><span>(15)</span></a></li><li><a href="/tree_chexing/mb_153/" class="mainBrand"><big>猎豹汽车</big><span>(24)</span></a></li><li><a href="/tree_chexing/mb_95/" class="mainBrand"><big>林肯</big><span>(11)</span></a></li><li><a href="/tree_chexing/mb_76/" class="mainBrand"><big>力帆</big><span>(16)</span></a></li><li><a href="/tree_chexing/mb_99/" class="mainBrand"><big>雷诺</big><span>(13)</span></a></li><li><a href="/tree_chexing/mb_86/" class="mainBrand"><big>兰博基尼</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_80/" class="mainBrand"><big>劳斯莱斯</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_146/" class="mainBrand"><big>莲花</big><span>(11)</span></a></li><li><a href="/tree_chexing/mb_83/" class="mainBrand"><big>路特斯</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_200/" class="mainBrand"><big>蓝海房车</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_166/" class="mainBrand"><big>理念</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_229/" class="mainBrand"><big>雷丁电动</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_249/" class="mainBrand"><big>陆地方舟</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_223/" class="mainBrand"><big>领志</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_227/" class="mainBrand"><big>朗世</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_101/" class="mainBrand"><big>罗孚</big><span>(1)</span></a></li></ul></li><li class="root" id="letter13"><b>M</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_18/" class="mainBrand"><big>马自达</big><span>(30)</span></a></li><li><a href="/tree_chexing/mb_79/" class="mainBrand"><big>MG</big><span>(9)</span></a></li><li><a href="/tree_chexing/mb_93/" class="mainBrand"><big>玛莎拉蒂</big><span>(8)</span></a></li><li><a href="/tree_chexing/mb_81/" class="mainBrand"><big>MINI</big><span>(13)</span></a></li><li><a href="/tree_chexing/mb_183/" class="mainBrand"><big>迈凯伦</big><span>(8)</span></a></li><li><a href="/tree_chexing/mb_88/" class="mainBrand"><big>迈巴赫</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_201/" class="mainBrand"><big>摩根</big><span>(7)</span></a></li><li><a href="/tree_chexing/mb_55/" class="mainBrand"><big>美亚</big><span>(6)</span></a></li></ul></li><li class="root" id="letter14"><b>N</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_155/" class="mainBrand"><big>纳智捷</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_234/" class="mainBrand"><big>Noble</big><span>(1)</span></a></li></ul></li><li class="root" id="letter15"><b>O</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_84/" class="mainBrand"><big>讴歌</big><span>(10)</span></a></li><li><a href="/tree_chexing/mb_171/" class="mainBrand"><big>欧朗</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_104/" class="mainBrand"><big>欧宝</big><span>(12)</span></a></li><li><a href="/tree_chexing/mb_243/" class="mainBrand"><big>欧联</big><span>(1)</span></a></li></ul></li><li class="root" id="letter16"><b>P</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_185/" class="mainBrand"><big>帕加尼</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_210/" class="mainBrand"><big>皮特比尔特卡车</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_191/" class="mainBrand"><big>PGO</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_105/" class="mainBrand"><big>旁蒂克</big><span>(1)</span></a></li></ul></li><li class="root" id="letter17"><b>Q</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_28/" class="mainBrand"><big>起亚</big><span>(33)</span></a></li><li><a href="/tree_chexing/mb_42/" class="mainBrand"><big>奇瑞</big><span>(35)</span></a></li><li><a href="/tree_chexing/mb_156/" class="mainBrand"><big>启辰</big><span>(9)</span></a></li><li><a href="/tree_chexing/mb_43/" class="mainBrand"><big>庆铃</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_226/" class="mainBrand"><big>乔治·巴顿</big><span>(2)</span></a></li></ul></li><li class="root" id="letter18"><b>R</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_30/" class="mainBrand"><big>日产</big><span>(37)</span></a></li><li><a href="/tree_chexing/mb_78/" class="mainBrand"><big>荣威</big><span>(10)</span></a></li><li><a href="/tree_chexing/mb_142/" class="mainBrand"><big>瑞麒</big><span>(7)</span></a></li></ul></li><li class="root" id="letter19"><b>S</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_10/" class="mainBrand"><big>斯柯达</big><span>(16)</span></a></li><li><a href="/tree_chexing/mb_25/" class="mainBrand"><big>三菱</big><span>(23)</span></a></li><li><a href="/tree_chexing/mb_111/" class="mainBrand"><big>斯巴鲁</big><span>(9)</span></a></li><li><a href="/tree_chexing/mb_102/" class="mainBrand"><big>双龙</big><span>(10)</span></a></li><li><a href="/tree_chexing/mb_165/" class="mainBrand"><big>上汽大通MAXUS</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_89/" class="mainBrand"><big>smart</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_209/" class="mainBrand"><big>山姆</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_50/" class="mainBrand"><big>双环</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_239/" class="mainBrand"><big>赛麟SALEEN</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_242/" class="mainBrand"><big>STARTECH</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_137/" class="mainBrand"><big>世爵</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_260/" class="mainBrand"><big>斯威</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_169/" class="mainBrand"><big>陕汽通家</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_103/" class="mainBrand"><big>萨博</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_117/" class="mainBrand"><big>三星</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_244/" class="mainBrand"><big>上喆汽车</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_73/" class="mainBrand"><big>顺旅</big><span>(1)</span></a></li></ul></li><li class="root" id="letter20"><b>T</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_189/" class="mainBrand"><big>特斯拉</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_202/" class="mainBrand"><big>泰卡特</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_175/" class="mainBrand"><big>腾势</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_54/" class="mainBrand"><big>天马</big><span>(6)</span></a></li><li><a href="/tree_chexing/mb_56/" class="mainBrand"><big>通田</big><span>(1)</span></a></li></ul></li><li class="root" id="letter23"><b>W</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_48/" class="mainBrand"><big>五菱</big><span>(13)</span></a></li><li><a href="/tree_chexing/mb_19/" class="mainBrand"><big>沃尔沃</big><span>(19)</span></a></li><li><a href="/tree_chexing/mb_132/" class="mainBrand"><big>五十铃</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_207/" class="mainBrand"><big>潍柴英致</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_140/" class="mainBrand"><big>威麟</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_186/" class="mainBrand"><big>威兹曼</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_247/" class="mainBrand"><big>潍柴欧睿</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_46/" class="mainBrand"><big>万丰</big><span>(4)</span></a></li></ul></li><li class="root" id="letter24"><b>X</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_13/" class="mainBrand"><big>现代</big><span>(42)</span></a></li><li><a href="/tree_chexing/mb_49/" class="mainBrand"><big>雪佛兰</big><span>(28)</span></a></li><li><a href="/tree_chexing/mb_6/" class="mainBrand"><big>雪铁龙</big><span>(22)</span></a></li><li><a href="/tree_chexing/mb_174/" class="mainBrand"><big>星客特</big><span>(10)</span></a></li><li><a href="/tree_chexing/mb_87/" class="mainBrand"><big>西雅特</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_71/" class="mainBrand"><big>新凯</big><span>(8)</span></a></li><li><a href="/tree_chexing/mb_65/" class="mainBrand"><big>新大地</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_62/" class="mainBrand"><big>新雅途</big><span>(2)</span></a></li></ul></li><li class="root" id="letter25"><b>Y</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_100/" class="mainBrand"><big>英菲尼迪</big><span>(19)</span></a></li><li><a href="/tree_chexing/mb_53/" class="mainBrand"><big>一汽</big><span>(34)</span></a></li><li><a href="/tree_chexing/mb_258/" class="mainBrand"><big>驭胜</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_138/" class="mainBrand"><big>野马汽车</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_41/" class="mainBrand"><big>依维柯</big><span>(11)</span></a></li><li><a href="/tree_chexing/mb_178/" class="mainBrand"><big>宇通</big><span>(8)</span></a></li><li><a href="/tree_chexing/mb_75/" class="mainBrand"><big>永源</big><span>(5)</span></a></li><li><a href="/tree_chexing/mb_245/" class="mainBrand"><big>游侠汽车</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_238/" class="mainBrand"><big>御捷</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_118/" class="mainBrand"><big>云豹</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_194/" class="mainBrand"><big>扬州亚星客车</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_126/" class="mainBrand"><big>云雀</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_47/" class="mainBrand"><big>仪征</big><span>(1)</span></a></li></ul></li><li class="root" id="letter26"><b>Z</b><ul class="tree-item-box"><li><a href="/tree_chexing/mb_77/" class="mainBrand"><big>众泰</big><span>(21)</span></a></li><li><a href="/tree_chexing/mb_60/" class="mainBrand"><big>中华</big><span>(18)</span></a></li><li><a href="/tree_chexing/mb_233/" class="mainBrand"><big>知豆</big><span>(3)</span></a></li><li><a href="/tree_chexing/mb_33/" class="mainBrand"><big>中兴</big><span>(11)</span></a></li><li><a href="/tree_chexing/mb_167/" class="mainBrand"><big>中欧奔驰房车</big><span>(7)</span></a></li><li><a href="/tree_chexing/mb_214/" class="mainBrand"><big>浙江卡尔森</big><span>(2)</span></a></li><li><a href="/tree_chexing/mb_203/" class="mainBrand"><big>之诺</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_204/" class="mainBrand"><big>中通客车</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_246/" class="mainBrand"><big>重汽王牌</big><span>(1)</span></a></li><li><a href="/tree_chexing/mb_64/" class="mainBrand"><big>中客华北</big><span>(4)</span></a></li><li><a href="/tree_chexing/mb_72/" class="mainBrand"><big>中顺</big><span>(2)</span></a></li></ul></li><li id="tree-bottom" style="height:300px; overflow:hidden"></li></ul>';

        $html = \Sunra\PhpSimple\HtmlDomParser::str_get_html($str);


        $list = $html->find('li.root');


        $brands = array();

        foreach ($list as $item){

            $abbre = $item->find('b',0)->innertext;

            $abbreList = $item->find('li');

            foreach ($abbreList as $al){
                $href = 'href';
                $url = $this->serverName . $al->find('a',0)->$href;
                $title = $al->find( 'a',0)->find('big',0)->innertext;

                $temp = array();
                $temp['url'] = $url;
                $temp['title'] = $title;
                $temp['abbre'] = $abbre;

                $brands[$abbre][] = $temp;
            }
        }

        print_r($brands);

    }


    public function treeSeriesAction(){

        $url='http://car.bitauto.com/quanxinaodia4l/';
        $str = file_get_contents($url);

        $html = \Sunra\PhpSimple\HtmlDomParser::str_get_html($str);

        $id = $html->find('#data_tab_jq5_0',0);

        print_r($id);

    }
}