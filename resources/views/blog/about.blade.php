@extends('layouts.blog')

@section('title')
    关于同乡会
@endsection

@section('header')
    <header class="header text-white pb-80" style="background-image: url('{{asset("img/about-bg.jpg")}}');" data-overlay="9">
        <div class="container text-center">

            <div class="row h-50">
                <div class="col-lg-8 mx-auto align-self-center">

                    <h1 class="display-4 mt-7 mb-8">关于同乡会</h1>

                </div>

                <div class="col-12 align-self-end text-center">
                    <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
                </div>

            </div>

        </div>
    </header><!-- /.header -->
@endsection

@section('content')
    <main class="main-content">


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Blog content
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="section" id="section-content">
            <div class="container">

                <p>澳洲龙岩同乡会成立于1988年1月18日，2000年有会员60余人，分布在澳洲各个州。

                    “联络乡谊，温馨家庭，团结互助，共创未来”是澳洲龙岩同乡会的宗旨。同乡会理事会由一年一度的会员大会选举选产，设会长、副会长、秘书长。

                    同乡会成立以来，通过每年的新年餐会、中秋赏月晚会及各种户外活动，增添生活情趣；通过关心帮助处理同乡的红白喜事，增进同乡情谊。此外，同乡会还积极参与中国驻悉尼总领事馆及华人社团的各项活动，如“悉尼各界侨胞欢迎江泽民主席访澳晚会”、中华人民共和国50周年庆祝观礼活动等。</p>





        </div>
        </div>



        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Comments
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="section bg-gray">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 mx-auto">


                        {{--<hr>--}}


                    </div>
                </div>

            </div>
        </div>



    </main>
@endsection
