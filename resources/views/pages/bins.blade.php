
   @extends('pages.index')


   @section('content')
        <h1>Number of Bins</h1>
        <table>
            <tr>
                <td>number</td>
                <td>location</td>
            </tr>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->number}}</td>
                <td>{{$data->location}}</td>
            
            </tr>
        @endforeach
    </table>
    @endsection('content')


