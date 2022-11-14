<!DOCTYPE html>
<head>
   
</head>
<body>
    <p>cvbnjmklyfghjnhgbhnj</p>
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
</body>
</html>

