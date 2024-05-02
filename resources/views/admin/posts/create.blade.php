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
            max-width: 800px;
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        nav {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ccc;
            padding: 8px 16px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center my-4">Add New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Author</label>
                <input type="text" class="form-control" id="writer" name="writer" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Author Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="mb-3">
                <label for="main_image" class="form-label">Main Image</label>
                <input type="file" class="form-control" id="main_image" name="main_image" required>
            </div>
            <div class="mb-3">
                <label for="quote" class="form-label">Quote</label>
                <textarea class="form-control" id="quote" name="quote" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="sub_images" class="form-label">Sub Images</label>
                <input type="file" class="form-control" id="sub_images" name="sub_images[]" multiple>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form> 
    </div>
</body>
</html>
