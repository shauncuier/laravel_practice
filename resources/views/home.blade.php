@forelse($DataKey as $CountryName)
    <ul>
        <li>{{ $CountryName }}</li>
    </ul>

@empty
    <p>No Data Found</p>
@endforelse
