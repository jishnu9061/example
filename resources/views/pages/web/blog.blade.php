@include('pages.web.includes.header')
<section class="page-header page-header--bg-tri" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Blog Sidebar</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Blog</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Blog Start -->
@if ($posts->isNotEmpty())
<section class="blog-page">
    <div class="container">

        <div class="row">
            <div class="col-xl-8 col-lg-7">

                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-xl-6 col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-two__item">
                                <div class="blog-two__image">
                                    <img src="{{ \App\Http\Helpers\BlogHelper::getBlogImagePath($post->images) }}"
                                        alt=" ">
                                    <a href="{{ route('blog-detail', $post->id) }}"></a>
                                </div><!-- /.blog-image -->
                                <div class="blog-two__content">
                                    <div class="blog-two__top-meta">

                                        <div class="blog-two__date">{{ $post->created_at->format('d M, Y') }}</div>
                                        <!-- /.blog-date -->
                                    </div>
                                    <h3 class="blog-two__title">
                                        <a href="{{ route('blog-detail', $post->id) }}">{{ $post->title }}</a>
                                    </h3><!-- /.blog-title -->
                                    <p>{{ strip_tags($post->blog_details) }}</p>
                                    <div class="blog-two__meta">

                                        <a class="blog-two__rm" href="{{ route('blog-detail', $post->id) }}"><span
                                                class="icon-arrow"></span></a><!-- /.read-more-btn -->
                                    </div><!-- /.blog-meta -->
                                </div><!-- /.blog-content -->
                            </div><!-- /.blog-card-one -->
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-12">
                        @if ($posts->lastPage() > 1)
                            <ul class="blog-page__pagination text-left clearfix">
                                @if ($posts->onFirstPage())
                                    <li class="disabled" aria-disabled="true"><a href="javascript:;">←</a></li>
                                @else
                                    <li><a href="{{ $posts->previousPageUrl() }}" rel="prev">←</a></li>
                                @endif
                                @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                    @if ($i == $posts->currentPage())
                                        <li><a href="javascript:;" class="active">{{ $i }}</a></li>
                                    @else
                                        <li><a href="{{ $posts->url($i) }}">{{ $i }}</a></li>
                                    @endif
                                @endfor
                                @if ($posts->hasMorePages())
                                    <li class="next"><a href="{{ $posts->nextPageUrl() }}" rel="next"><span
                                                class="icon-caret-right"></span></a></li>
                                @else
                                    <li class="disabled" aria-disabled="true"><span class="icon-caret-right"></span>
                                    </li>
                                @endif
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest posts</h3>
                        <ul class="sidebar__post__list list-unstyled">
                            @foreach ($blogs as $post)
                                <li>
                                    <div class="sidebar__post__image">
                                        <img src="{{ \App\Http\Helpers\BlogHelper::getBlogImagePath($post->images) }}"
                                            alt="{{ $post->title }}">
                                    </div>
                                    <div class="sidebar__post__content">
                                        <span class="sidebar__post__content__meta"><i
                                                class="icon-clock"></i>{{ $post->created_at->format('d M, Y') }}</span>
                                        <h3 class="sidebar__post__content__title"><a
                                                href="{{ route('blog-detail', $post->id) }}">{{ $post->title }}</a>
                                        </h3>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- latest-post-widget -->
                </div>
            </div>

        </div>
    </div>
</section>

@else
    <div class="container py-5">
        <div class="text-center">
            <h2>No blogs found</h2>
            <p>There are currently no blogs available.</p>
        </div>
    </div>
@endif
<!-- Blog End -->

@include('pages.web.includes.footer')
