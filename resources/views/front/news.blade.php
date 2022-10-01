@extends('front.layout')
  @section('content')

    <main class="main-content site-wrapper-reveal">
      <!--== Start Page Title Area ==-->
      <section class="page-title-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title-content content-style3">
                <div class="bread-crumbs bread-crumbs-style2"><a href="index.html">{{ __('messages.home') }}<span class="breadcrumb-sep">/</span></a><span class="active text-black">{{ __('messages.news') }}</span></div>
                <h4 class="title"><span>{{ __('messages.news') }}</span></h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Page Title Area ==-->

      <!--== Start Blog Area Wrapper ==-->
      <section class="blog-area section-py blog-border-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="post-items-style2">
                
                @foreach ($news as $post)
                  <!--== Start Blog Post Item ==-->
                <div class="post-item">
                  <div class="thumb">
                    <a href="{{ route('news.single', $post->id) }}"><img src="{{ asset('storage/' . $post->poster) }}" alt="news_img"></a>
                  </div>
                  <div class="content">
                    <a class="category" href="#">
                      @switch(Lang::locale())
                          @case('tm')
                            {{ $post->category->title_tm }}
                            @break
                          @case('ru')
                            {{ $post->category->title_ru }}
                            @break
                          @case('en')
                            {{ $post->category->title_en }}
                            @break
                          @default
                            {{ $post->category->title_tm }}
                        @endswitch
                    </a>
                    <h4 class="title">
                      <a href="{{ route('news.single', $post->id) }}">
                        @switch(Lang::locale())
                          @case('tm')
                            {{ $post->title_tm }}
                            @break
                          @case('ru')
                            {{ $post->title_ru }}
                            @break
                          @case('en')
                            {{ $post->title_en }}
                            @break
                          @default
                            {{ $post->title_tm }}
                        @endswitch
                      </a>
                    </h4>
                    <div class="meta">
                      @switch(Lang::locale())
                        @case('tm')
                          {{ \Carbon\Carbon::parse($post->created_at)->locale('tk')->isoFormat('MMMM D, YYYY') }}
                          @break
                        @case('ru')
                          {{ \Carbon\Carbon::parse($post->created_at)->locale('ru')->isoFormat('MMMM D, YYYY') }}
                          @break
                        @case('en')
                          {{ \Carbon\Carbon::parse($post->created_at)->locale('en')->isoFormat('MMMM D, YYYY') }}
                          @break
                        @default
                          {{ \Carbon\Carbon::parse($post->created_at)->locale('tk')->isoFormat('MMMM D, YYYY') }}
                      @endswitch
                    </div>
                  </div>
                </div>
                <!--== End Blog Post Item ==-->
                @endforeach

              </div>
              <div class="pagination-area mb-md-80">
                {{ $news->links('pagination::bootstrap-4') }}
              </div>
            </div>
            <div class="col-lg-4">
              <!--== Start Sidebar Wrapper ==-->
              <div class="sidebar-wrapper blog-sidebar-wrapper">
                <!--== Start Sidebar Item ==-->
                <div class="widget-item">
                  <h4 class="widget-title">{{ __('messages.search') }}</h4>
                  <div class="widget-search-box">
                    <form action="#" method="post">
                      <input type="text" id="search" placeholder="{{ __('news.search_term') }} ...">
                    </form>
                  </div>
                </div>
                <!--== Start Sidebar Item ==-->

                <!--== Start Sidebar Item ==-->
                <div class="widget-item">
                  <h4 class="widget-title">{{ __('messages.categories') }}</h4>
                  <div class="widget-categories">
                    <ul>
                      @foreach ($categories as $category)
                      <li>
                        <a href="{{ route('news.by.category', $category->id) }}">
                          @switch(Lang::locale())
                            @case('tm')
                              {{ $category->title_tm }}
                              @break
                            @case('ru')
                              {{ $category->title_ru }}
                              @break
                            @case('en')
                              {{ $category->title_en }}
                              @break
                            @default
                              {{ $category->title_tm }}
                          @endswitch
                          <span>{{ $category->news->count() }}</span>
                        </a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <!--== End Sidebar Item ==-->

              <!--== End Sidebar Wrapper ==-->
            </div>
          </div>
        </div>
      </section>
      <!--== End Blog Area Wrapper ==-->
    </main>

  @endsection
