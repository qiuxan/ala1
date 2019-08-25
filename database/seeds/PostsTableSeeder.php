<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $author=User::create([
            'name'=>'admin',
            'email'=>'ala@1.com',
            'password'=>Hash::make('123'),
        ]);

        $author2=User::create([
            'name'=>'admin2',
            'email'=>'qiuxam@12.com',
            'password'=>Hash::make('123321'),
        ]);

        $category1=Category::create([
            'name'=>'新闻'
        ]);

        $category2=Category::create([
            'name'=>'信息'
        ]);

        $category3=Category::create([
            'name'=>'人物'
        ]);

        $category4=Category::create([
            'name'=>'娱乐'
        ]);

        $post1=$author->posts()->create([
            'title'=>'什么是Lorem Ipsum?',
            'description'=>'Lorem Ipsum，也称乱数假文或者哑元文本， 是印刷及排版领域所常用的虚拟文字。由于曾经一台匿名的打印机刻意打乱了一盒印刷字体从而造出一本字体样品书，Lorem Ipsum从西元15世纪起就被作为此领域的标准文本使用。它不仅延续了五个世纪，还通过了电子排版的挑战，其雏形却依然保存至今。在1960年代，”Leatraset”公司发布了印刷着Lorem Ipsum段落的纸张，从而广泛普及了它的使用。最近，计算机桌面出版软件”Aldus PageMaker”也通过同样的方式使Lorem Ipsum落入大众的视野。',
            'category_id'=>$category1->id,
            'image'=>'posts/1.jpg'

        ]);

        $post2=$author2->posts()->create([
            'title'=>'它起源于哪里？',
            'description'=>'恰恰与流行观念相反，Lorem Ipsum并不是简简单单的随机文本。它追溯于一篇公元前45年的经典拉丁著作，从而使它有着两千多年的岁数。弗吉尼亚州Hampden-Sydney大学拉丁系教授Richard McClintock曾在Lorem Ipsum段落中注意到一个涵义十分隐晦的拉丁词语，“consectetur”，通过这个单词详细查阅跟其有关的经典文学著作原文，McClintock教授发掘了这个不容置疑的出处。Lorem Ipsum始于西塞罗(Cicero)在公元前45年作的“de Finibus Bonorum et Malorum”（善恶之尽）里1.10.32 和1.10.33章节。这本书是一本关于道德理论的论述，曾在文艺复兴时期非常流行。Lorem Ipsum的第一行”Lorem ipsum dolor sit amet..”节选于1.10.32章节。
以下展示了自1500世纪以来使用的标准Lorem Ipsum段落，西塞罗笔下“de Finibus Bonorum et Malorum”章节1.10.32 ， 1.10.33的原著作，以及其1914年译自H. Rackham的英文版本。',
            'category_id'=>$category2->id,
            'image'=>'posts/2.jpg'

        ]);

        $post3=$author->posts()->create([
            'title'=>'我们为何用它',
            'description'=>'无可否认，当读者在浏览一个页面的排版时，难免会被可阅读的内容所分散注意力。Lorem Ipsum的目的就是为了保持字母多多少少标准及平均的分配，而不是“此处有文本，此处有文本”，从而让内容更像可读的英语。如今，很多桌面排版软件以及网页编辑用Lorem Ipsum作为默认的示范文本，搜一搜“Lorem Ipsum”就能找到这些网站的雏形。这些年来Lorem Ipsum演变出了各式各样的版本，有些出于偶然，有些则是故意的（刻意的幽默之类的）。',
            'category_id'=>$category3->id,
            'image'=>'posts/3.jpg'


        ]);

        $post4=$author2->posts()->create([
            'title'=>'我能从哪里获取',
            'description'=>'如今互联网提供各种各样版本的Lorem Ipsum段落，但是大多数都多多少少出于刻意幽默或者其他随机插入的荒谬单词而被篡改过了。如果你想取用一段Lorem Ipsum，请确保段落中不含有令人尴尬的不恰当内容。所有网上的Lorem Ipsum生成器都倾向于在必要时重复预先准备的部分，然而这个生成器则是互联网上首个确切的生成器。它使用由超过200个拉丁单词所构造的词典，结合了几个模范句子结构，来生成看起来恰当的Lorem Ipsum。因此，生成出的结果无一例外免于重复，刻意的幽默，以及非典型的词汇等等',
            'category_id'=>$category2->id,
            'image'=>'posts/4.jpg'
        ]);

        $post6=$author2->posts()->create([
            'title'=>'我能从哪里获取',
            'description'=>'如今互联网提供各种各样版本的Lorem Ipsum段落，但是大多数都多多少少出于刻意幽默或者其他随机插入的荒谬单词而被篡改过了。如果你想取用一段Lorem Ipsum，请确保段落中不含有令人尴尬的不恰当内容。所有网上的Lorem Ipsum生成器都倾向于在必要时重复预先准备的部分，然而这个生成器则是互联网上首个确切的生成器。它使用由超过200个拉丁单词所构造的词典，结合了几个模范句子结构，来生成看起来恰当的Lorem Ipsum。因此，生成出的结果无一例外免于重复，刻意的幽默，以及非典型的词汇等等',
            'category_id'=>$category2->id,
            'image'=>'posts/4.jpg'
        ]);

        $post5=$author2->posts()->create([
            'title'=>'我能从哪里获取',
            'description'=>'如今互联网提供各种各样版本的Lorem Ipsum段落，但是大多数都多多少少出于刻意幽默或者其他随机插入的荒谬单词而被篡改过了。如果你想取用一段Lorem Ipsum，请确保段落中不含有令人尴尬的不恰当内容。所有网上的Lorem Ipsum生成器都倾向于在必要时重复预先准备的部分，然而这个生成器则是互联网上首个确切的生成器。它使用由超过200个拉丁单词所构造的词典，结合了几个模范句子结构，来生成看起来恰当的Lorem Ipsum。因此，生成出的结果无一例外免于重复，刻意的幽默，以及非典型的词汇等等',
            'category_id'=>$category2->id,
            'image'=>'posts/4.jpg'
        ]);



        $tag1=Tag::create([
            'name'=>'墨尔本'
        ]);

        $tag2=Tag::create([
            'name'=>'恳亲大会'
        ]);

        $tag3=Tag::create([
            'name'=>'悉尼'
        ]);

        $tag4=Tag::create([
            'name'=>'活动'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);

        $post3->tags()->attach([$tag1->id, $tag4->id]);

        $post4->tags()->attach([$tag1->id, $tag3->id]);

        $post5->tags()->attach([$tag1->id, $tag3->id]);

        $post6->tags()->attach([$tag1->id, $tag3->id]);


    }
}
