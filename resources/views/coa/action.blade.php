<form action="{{action('HomeController@download1', $coa_name)}}" method="get">
    @csrf
    <button class="btn btn-success btn-sm" type="submit">Download</button>
</form>

