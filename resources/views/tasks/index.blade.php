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

      {{-- Navigation Bar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
              <a class="navbar-brand" href="#">Laravel Membership Management</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
          </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center mt-5">
              <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                          <h2 class="float-left">Task List - Home</h2>
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

        <div class="bg-light p-5">
          <p class="text-center">
            &copy; 2020 all rights reserved.
          </p>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>