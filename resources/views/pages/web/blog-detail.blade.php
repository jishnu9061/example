@include('pages.web.includes.header')

        <section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
            <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
            <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
            <div class="container text-center">
                <h2 class="page-header__title">Blog Details</h2><!-- /.page-title -->
                <ul class="page-header__breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Blog</span></li>
                </ul><!-- /.page-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <!-- Blog Start -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 wow fadeInRight" data-wow-delay="300ms">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="{{ route('blog-detail',$blog->id) }}" class="sidebar__search-form">
                                    <input type="search" name="title" placeholder="Type Here">
                                    <button type="submit"><span class="icon-Search"></span></button>
                                </form>
                            </div><!-- search-widget -->
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post__list list-unstyled">
                                    @foreach($posts as $post)
                                    <li>
                                        <div class="sidebar__post__image">
                                            <img src="{{ \App\Http\Helpers\BlogHelper::getBlogImagePath($post->images) }}" alt="{{ $post->title }}">
                                        </div>
                                        <div class="sidebar__post__content">
                                            <span class="sidebar__post__content__meta"><i class="icon-clock"></i>{{ $post->created_at->format('d M, Y') }}</span>
                                            <h3 class="sidebar__post__content__title"><a href="{{ route('blog-detail', $post->id) }}">{{ $post->title }}</a></h3>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div><!-- latest-post-widget -->

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__content">
                            <div class="blog-details__img">
                                <img src="{{ \App\Http\Helpers\BlogHelper::getBlogImagePath($blog->images) }}" alt=" ">
                            </div><!-- details-image -->
                            <div class="blog-details__meta">

                                <div class="blog-details__meta__date"><i class="icon-clock"></i>{{ $blog->created_at->format('d M, Y') }}</div>
                            </div><!-- /.details-meta -->
                            <h3 class="blog-details__title">{{ $blog->title }}</h3><!-- details-tiele -->
                            <p class="blog-details__text">
                                {{ strip_tags($blog->blog_details) }}
                            </p>
                        </div><!-- details-content -->

                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->
        @include('pages.web.includes.footer')
