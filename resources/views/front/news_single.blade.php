@extends('front.layout')

@section('content')
    
<main class="main-content site-wrapper-reveal">
  <!--== Start Page Title Area ==-->
  <div class="page-title-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-content content-style4">
            <div class="bread-crumbs bread-crumbs-style2">
              <a href="index.html">Baş sahypa<span class="breadcrumb-sep">/</span></a>
              <span class="active text-black">Täzelikler</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--== End Page Title Area ==-->

  <!--== Start Blog Area Wrapper ==-->
  <section class="blog-details-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!--== Start Post Details Item ==-->
          <div class="post-details-content">
            <div class="post-details-body">
              <div class="content">
                <h2 class="title">
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
                </h2>
                <img src="{{ asset('storage/' . $post->poster) }}" alt="hope-Blog">
                <div class="meta">
                  <a class="category" href="blog.html">Täzelikler</a>
                  <span>-</span> {{ $post->date }}
                </div>
                <div>
                  
                  @switch(Lang::locale())
                          @case('tm')
                            {!! $post->description_tm !!}
                            @break
                          @case('ru')
                            {!! $post->description_ru !!}
                            @break
                          @case('en')
                            {!! $post->description_en !!}
                            @break
                          @default
                            {!! $post->description_tm !!}
                        @endswitch
                </div>
              </div>
              <div class="related-post mt-5">
                <h2 class="title"><span>Soňky</span> Täzelikler</h2>
                <div class="post-items-style3">
                  <div class="row">
                    @foreach ($recent_posts as $post)
                      <div class="col-md-6">
                        <!--== Start Blog Post Item ==-->
                        <div class="post-item">
                          <div class="thumb">
                            <a href="blog-details.html"><img src="{{ asset('storage/' . $post->poster) }}" alt="News poster"></a>
                          </div>
                          <div class="content">
                            <a href="blog.html" class="category">
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
                                  {{ $post->category->title_tm }}
                                @default
                                  
                              @endswitch
                            </a>
                            <h4 class="title">
                              <a href="blog-details.html">
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
                          </div>
                        </div>
                        <!--== End Blog Post Item ==-->
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== End Post Details Item ==-->
        </div>
        <div class="col-lg-4">
          <!--== Start Sidebar Wrapper ==-->
          <div class="sidebar-wrapper blog-sidebar-wrapper mb-md-80 pt-md-10 pt-160">
            <!--== Start Sidebar Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">Gözleg</h4>
              <div class="widget-search-box">
                <form action="#" method="post">
                  <input type="text" id="search" placeholder="Gözleg sözi ...">
                </form>
              </div>
            </div>
            <!--== Start Sidebar Item ==-->

            <!--== Start Sidebar Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">Kategoriýalar</h4>
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
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!--== End Sidebar Item ==-->


          </div>
          <!--== End Sidebar Wrapper ==-->
        </div>
      </div>
    </div>
  </section>
  <!--== End Blog Area Wrapper ==-->

</main>

@endsection