<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="KHFNdKTiytTFRFdafuPemcKDITXwEID6MuyFbuGcMKU" />
     <title>Open lluna Admin panel </title>
		<link rel="icon" type="image/png" href="assets/images/logo/ol.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 1000px;
            margin: auto;
            margin-top: 20px;
        }
        .table-container {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            overflow: hidden;
        }
        nav {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 8px 16px;
        }
        .table {
            margin-bottom: 0;
        }
    </style>
    <script>
function confirmDelete() {
    return confirm('Do you really want to delete this post?');
}
</script>

</head>
<body>
    <nav class="navbar navbar-expand navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="table-container">
            <h1 class="text-center my-4">Blog Posts</h1>

            <a href="{{ route('posts.create') }}" class="btn btn-primary m-3">Add New Post</a>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Quote</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->quote }}</td>
                        <td>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
