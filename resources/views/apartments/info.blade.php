<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Area</th>
        <th scope="col">Floor</th>
        <th scope="col">Count_of_rooms</th>
        <th scope="col">Home_id</th>
    </tr>
    </thead>
    <tbody>
    @foreach($apartments as $apartment)
    <tr>
        <td>{{$apartment->id}}</td>
        <td>{{$apartment->area}}</td>
        <td>{{$apartment->floor}}</td>
        <td>{{$apartment->count_of_rooms}}</td>
        <td>{{$apartment->home_id}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
