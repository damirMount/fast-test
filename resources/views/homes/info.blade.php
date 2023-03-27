<div class="">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Build Date</th>
            <th scope="col">Floor counts</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $home->id }}</td>
            <td>{{ $home->name }}</td>
            <td>{{ $home->price }}</td>
            <td>{{ $home->year_of_build }}</td>
            <td>{{ $home->count_of_floors }}</td>
        </tr>
        </tbody>
    </table>
</div>
