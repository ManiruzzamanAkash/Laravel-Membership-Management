<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>

    <div id="wrapper">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                          <h2 class="float-left">Task List</h2>
                          <h2 class="float-right">
                              <a href="{{ route('tasks.create') }}" class="btn btn-outline-primary">+ New Task</a>
                          </h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" style="width: 150px">Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @foreach ($tasks as $task)
                                    <tr>
                                      <th scope="row">{{ $loop->index+1 }}</th>
                                      <td>{{ $task->title }}</td>
                                      <td>{!! $task->details !!}</td>
                                      <td>
                                        <span class="badge badge-secondary">
                                          {{ $task->created_at->diffForHumans() }}
                                        </span>
                                      </td>
                                      <td>
                                        @if ($task->status === "Open")
                                            <span class="badge badge-primary">{{ $task->status }}</span>
                                        @else
                                          <span class="badge badge-danger">{{ $task->status }}</span>
                                        @endif
                                      </td>
                                      <td>
                                          <a class="btn btn-sm btn-outline-success" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                                          
                                          <form action="{{ route('tasks.destroy', $task->id) }}" method="post" class="form-custom-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-outline-danger"  type="submit">Delete</button>
                                          </form>
                                          
                                      </td>
                                    </tr>
                                  @endforeach
                                  
                                </tbody>
                              </table>
                              <div class="d-flex justify-content-center">
                                {{ $tasks->links() }}
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>