<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Edit</title>

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
                        <h2>Edit Task - {{ $task->title }}</h2>
                      </div>
                      <div class="card-body">
                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                          @csrf
                          @method('put')
                          
                          <div class="form-group">
                            <label for="title">Title (*)</label>
                            <input type="text" class="form-control" value="{{ $task->title }}" name="title" id="title" required/>
                          </div>
                          <div class="form-group">
                            <label for="details">Details (Optional)</label>
                            <textarea class="form-control" name="details" id="details" rows="5">{!! $task->details !!}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                              <option value="Open" {{ $task->status === "Open" ? "selected" : "" }}>Open</option>
                              <option value="Closed" {{ $task->status === "Closed" ? "selected" : "" }}>Closed</option>
                            </select>
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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