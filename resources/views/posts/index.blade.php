<x-layouts.main>

    <x-slot:title>
        Blog page
    </x-slot>


    <x-page-header>
        Blog
    </x-page-header>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Oxirgi blog Post</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post )


                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/blog-1.jpg"  alt="">
                        {{-- <img class="img-fluid rounded w-100" src="{{$post->photo}}"  alt=""> --}}
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">{{$post->id}}</h4>
                            <small class="text-white text-uppercase">number</small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{$post->created_at}}</a>
                    </div>
                    <h5 class="font-weight-medium mb-2">{{$post->title}}</h5>
                    <p class="mb-4">{{$post->short_content}}</p>
                    <a class="btn btn-sm btn-primary py-2" href="{{route('posts.show', ['post'=> $post->id])}}">Read More</a>
                </div>

                @endforeach

                <div class="col-12">
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-lg justify-content-center mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

</x-layouts.main>
