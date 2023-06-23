<div>
    @if (session()->has('category'))
  <div class="alert alert-success">
      {{ session('category') }}
  </div>
  @endif
  <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Categoria</label>
      <input type="text" class="form-control" id="name" wire:model="name">
      @error('name')
      <span class="error text-danger">{{$message}}</span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
  </form>
</div>
