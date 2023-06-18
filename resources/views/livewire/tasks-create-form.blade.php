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
    <button type="submit" class="btn btn-primary">Salva</button>
  </form>
</div>
