<div class="p-5 container mt-5 shadow text-center">
  @if (session()->has('task'))
  <div class="alert alert-success">
    {{ session('task') }}
  </div>
  @endif
  <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Task</label>
      <input type="text" class="form-control" id="title" wire:model="title">
      @error('title')
      <span class="error text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <input type="text" class="form-control" id="description" wire:model="description">
      @error('description')
      <span class="error text-danger">{{$message}}</span>
      @enderror
    </div>
    <label for="category_id" class="form-label">Categoria</label>
    <select class="form-select" aria-label="Default select example" id="category_id" wire:model="category_id">
      <option selected>Seleziona categoria</option>
      @foreach($categories as $category)
      <option value="{{$category->id}}">
        {{$category->name}}
      </option>
      @endforeach
    </select>
    <div class="mt-2">
      <a href="{{route('categories.create')}}">Aggiungi categoria</a>
    </div>
    <div class="mt-3">
      <button type="submit" class="btn btn-primary">Salva</button>
    </div>
    
  </form>
</div>


