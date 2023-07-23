
<x-layout >
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>

                <h1>
                    <a href="/posts/{{$post->slug}}">
                        <h1>{!! $post->title !!}</h1>
                    </a>

                </h1>
                <p>
                    <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
                </p>
                <div>
                    <p>{{$post->excerpt}}</p>
                </div>

            </article>
        @endforeach
    </x-slot>
</x-layout>


