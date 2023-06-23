<x-main>
    <h1>categorie</h1>
    <ul>
    @foreach ($categories as $category)
        <li>{{$category->name}}</li>
    @endforeach
    </ul>
</x-main>