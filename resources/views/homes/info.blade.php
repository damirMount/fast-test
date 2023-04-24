<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Year of build</th>
        <th scope="col">Count of floors</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$home->id}}</td>
        <td>{{$home->name}}</td>
        <td>{{$home->price}}</td>
        <td>{{$home->year_of_build}}</td>
        <td>{{$home->count_of_floors}}</td>
    </tr>
    </tbody>
</table>
