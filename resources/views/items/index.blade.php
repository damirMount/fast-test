<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
</head>
<body>

<div style="display:flex;justify-content: space-between;">
    @foreach($items as $item)
        <div style="border:solid black 1px;width:600px;height:60px;text-align:center;padding-top:50px">{{$item->photo_link}}</div>
    <div style="border:solid black 1px;width:fit-content;height: fit-content;">{{$item->name}}</div>
    <div style="border:solid black 1px;width:200px;height:60px;text-align:center;padding-top:50px">{{$item->price}}</div>
    @endforeach
</div>
     <a href="{{route('items.create')}}"><button>Add item</button></a>
</body>
</html>
