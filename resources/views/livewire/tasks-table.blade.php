<div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Task</th>
        <th scope="col">Descrizione</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>
        <th scope="row">{{$task->id}}</th>
        <td>{{$task->title}}</td>
        <td>{{$task->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
