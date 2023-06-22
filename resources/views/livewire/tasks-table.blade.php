<div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Task</th>
        <th scope="col">Descrizione</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>
        <th scope="row">{{$task->id}}</th>
        <td>{{$task->title}}</td>
        <td>{{$task->description}}</td>
        <td>
          <a href="{{route('tasks.edit', $task)}}" class="btn btn-warning">
            <i class="bi bi-pencil-square"></i>
          </a>
          <button wire:click="destroy({{$task}})" class="btn btn-danger">
            <i class="bi bi-trash-fill text-dark"></i>
          </button> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
