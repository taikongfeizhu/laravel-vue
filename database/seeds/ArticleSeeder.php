<?php
namespace Database\Seeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        for ($i = 1; $i < 100; $i++) {
            $rand = rand(1, 5);
            $data[] = [
                'category_id' => (int) $rand,
                'title'       => '父亲的自行车-' . $i,
                'thumbnail'   => ($i % 2 == 0) ? 'owmb1f0qu.bkt.clouddn.com/e4670a6501fc5dc69ccad59ab9386b0a5.jpg' : '',
                'auther'      => 'linlm1994',
                'content'     => '记忆里，清晰可见便是父亲的那辆自行车，五羊牌的。在九十年代里，算是家里最值钱的了。
　　小时候，每逢外婆家里有喜事，父亲就会早早地推出他那辆“宝贝”，打一桶水，用一块布，小心翼翼的，擦一擦车轮，抹一抹横梁。一会调手刹车，一会上链条油，一会调试铃铛，忙前忙后的，直到车子崭新如初了，父亲才露出满意的笑容。这时，母亲则帮我和弟弟换上漂亮的衣裳，出发了。我坐在车子的横梁上，弟弟还小，母亲背着，坐在后座上。到外婆家要两三里路，坐上车，风呼呼从耳边吹过，鸟吱吱在头上鸣叫，按几下铃铛，转两个弯，下一个长长的斜坡便就到了。我的童年也是在外婆家成长的，无忧无虑，满满的爱。
　　上了初中，我们要翻山越岭，走了两三个小时的山路，才到学校。那三年的生活，除了学会种菜，除草，铲山，砍柴……压根就没学习之事，班里唯一有位男生考上高中。那几年，龙胜中学办起补习班的热潮，大家纷纷报名，想抓住最后一棵救命草。我也看到邻居丽去复读，还考上桂林民族师范，心里羡慕极了。于是，急跑回家，跟父母说想去补习，可他们并没直接给我答复，心里觉得憋屈，哭了一夜，枕巾全湿了。父亲看到了这般执意，写了一封信给在柳州市委工作的三伯，说我想去读书，三伯很快回信了，支持我的想法。
　　于是，我如愿以偿地到县城读书，伙食费只能交家里出产的大米，没钱坐车，则由父亲骑上自行车，驼一袋米，天还没有亮，就得从家里出发了，行驶在崎岖难行的公路，坑坑洼洼的，车轮在石头上颠簸，人都快散架，花四个多小时才到县城。坐在教室里，窗外有个人影闪过，定眼一看，是我的父亲，放下手中的作业，跑出教室。只见父亲一身灰尘，连头发根都粘满了，衣服早已被汗水湿透了，没有一点松干的地方，我心里不是滋味。而那自行车呢，早已看不清模样，粘满了泥土。父亲见了我，从背包里掏出一袋煮好的鸡蛋，递给我并嘱咐尽快吃，我问父亲吃什么，他拍拍口袋，说带着母亲包的粽子。每次，父亲到学校总是帮我，称好米，买好票，才回去了。看着父亲骑着车远去的背影，泪水盈眶。心里暗暗下决心：爸，我定不会辜负你的期望。后来，母亲告诉我，父亲为了到城里一趟，就是一整天，有时为了赶路，都没吃东西。我问母亲，没听你们说过呀，是父亲不让说，怕我难过。
　　功夫不负有心人，我顺利的考上了桂林民师，领到通知书的那一天，意味着将来有份工作，是一名国家干部了，父母比谁都高兴。为了赚钱，父亲跟人合伙买了一台机子，到河边淘沙金。夏天的暴雨，公路上的泥沙被冲走了，露出大大小小的坑，坑与坑间，如一条曲折如蛇的“路中路”，打足气的轮胎啃啮路面，沙沙响。只见瘦弱的父亲，戴着手套，穿着筒鞋，轻松地绕过，一个个坑，一道道坎。夜幕降临了，父亲又骑着自行车，汗流浃背地回到家。一进门，父亲就从口袋里掏出一个小红包，打开一看，金灿灿的。这时，父亲那饱经沧桑的脸庞堆满了笑容，笑很很惬意，很灿烂，我的学费有了着落。后来，弟弟常常说，我是镀金边的，闪闪发光。
　　1994年7月，我毕业了，分配到了乡里一所完小，当了一名小学教师。上班第一天，父亲把那辆五羊牌自行车送给了我，看着有点破旧，我并没有嫌弃，反而倍加珍惜。因为它，是一名功臣，立下了汗马功劳，改变了一个家庭的命运。',
                'tag_ids'     => (string) $rand,
                'source'      => 'https://github.com/linlianmin/laravel-vue',
                'is_audit'    => 20,
                'recommend'   => 1,
                'status'      => 20,
            ];
        }
        \App\Models\Article::insert($data);
    }
}
