<div class="col-md-4 col-xl-3">
    <div class="sidebar px-4 py-md-0">

        <h6 class="sidebar-title">搜索</h6>
        <form class="input-group" target="{{route('welcome')}}" method="GET">
            <input type="text" class="form-control" name="search" placeholder="搜索" value="{{request()->query('search')}}">
            <div class="input-group-addon">
                <span class="input-group-text"><i class="ti-search"></i></span>
            </div>
        </form>

        <hr>

        <h6 class="sidebar-title">分类</h6>
        <div class="row link-color-default fs-14 lh-24">


            @foreach($categories as $category)
                <div class="col-6"><a href="{{route('blog.category',$category->id)}}">{{$category->name}}</a></div>
            @endforeach

        </div>

        <hr>

        <hr>

        <h6 class="sidebar-title">标记</h6>
        <div class="gap-multiline-items-1">

            @foreach($tags as $tag)
                <a class="badge badge-secondary" href="{{route('blog.tag',$tag->id)}}">{{$tag->name}}</a>
            @endforeach

        </div>

        <hr>

        <h6 class="sidebar-title">关于</h6>
        <p class="small-3">澳洲龙岩同乡会成立于1988年1月18日，2000年有会员60余人，分布在澳洲各个州。 “联络乡谊，温馨家庭，团结互助，共创未来”是澳洲龙岩同乡会的宗旨。同乡会理事会由一年一度的会员大会选举选产，设会长、副会长、秘书长。 同乡会成立以来，通过每年的新年餐会、中秋赏月晚会及各种户外活动，增添生活情趣；通过关心帮助处理同乡的红白喜事，增进同乡情谊。</p>


    </div>
</div>
