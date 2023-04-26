<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Items</title>
</head>
<body>
<form action="{{route('items.store')}}"method="post" ecrypt="multipart/form-data">
    @csrf
    @method('PATCH');
<div class="input-group input-group-sm mb-3">
        <label for="photot_link" class="form-label"><span class="input-group-text" id="inputGroup-sizing-sm">Photo</span></label>
    <input type="file" id="photo_link" name="photo_link" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
    <div class="input-group input-group-sm mb-3">
        <label for="name" class="form-label"><span class="input-group-text" id="inputGroup-sizing-sm">Name</span></label>
    <input type="text" id="name" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
    <div class="input-group input-group-sm mb-3">
        <label for="price" class="form-label"><span class="input-group-text" id="inputGroup-sizing-sm">Price</span></label>
    <input type="text" id="price" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>


