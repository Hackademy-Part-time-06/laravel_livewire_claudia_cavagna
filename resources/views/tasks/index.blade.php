<x-main>
    <div class="container text-center">
        <div class="row">
            <div class="col-3 mt-5 me-5 bg-warning">
                <ul>
                @foreach ($categories as $category)
                    <li>
                        <a href="{{$category->id}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </div>
            <div class="col-8 mt-5">
                <livewire:tasks-table/>
            </div>
        </div>
    </div>
</x-main>