<x-app-layout :title="'Blogs | Maison de l’Avenir'" :description="''">

    <div class="custom-banner">
        <img style="width:1920px" class="dd" src="{{ asset('website/assets/images/blog.png') }}"  alt="Blog" />
        <img class="md" src="{{ asset('website/assets/images/blog-mobile.png') }}"  alt="Blog" />

    </div>
    <div class="container  mt-5">
        <div class="row ">
            @foreach ($data as $list)
                <div class="col-md-6 mb-5 col-12">
                    <div class="blog">
                        <img src="{{ asset('storage/blog/' . $list->image) }}" alt="">
                        <p>{{ $list->title }}</p>
                        <a href="{{ route('blog.detail', $list->slug) }}">Read more >></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>





</x-app-layout>
