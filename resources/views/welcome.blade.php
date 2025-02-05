<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="{{route('genre.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Insert Genre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">

                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
        <form action="{{route('book.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Insert Book</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                @forelse ($genres as $g)
                    <input type="checkbox" name="genres[]" id="check" value="{{$g->id}}">
                    <label for="check">{{$g->name}}</label>
                    <br>
                @empty

                @endforelse
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Genres</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($books as $b)
                <tr>
                    <th scope="row">{{$b->id}}</th>
                    <td>{{$b->name}}</td>
                    <td>
                        @forelse ($b->genres as $g)
                        {{$g->name}},
                        @empty

                        @endforelse
                    </td>
                    <td>
                        <a href="{{route('book.edit.page', $b->id)}}" class="btn btn-success">Edit</a>
                        <form action="{{route('book.delete', $b->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                    </td>
                  </tr>
                @empty

                @endforelse

            </tbody>
          </table>
    </div>
</body>
</html>
