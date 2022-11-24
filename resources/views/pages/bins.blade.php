
   @extends('pages.index')


   @section('content')
   
        {{-- <table>
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
    </table> --}}

    <table class="table">
        <thead class="thead-dark">
          <tr>
           
            <th scope="col">Bin_number</th>
            <th scope="col">Bin_location</th>
            <th scope="col">Bin_created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">action</th>
           
          </tr>
        </thead>
        <tbody>

        @foreach ($data as $data)
          <tr>
            <td>{{$data->number}}</td>
            <td>{{$data->location}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
            <td>
              <button class="btn btn-success"><a href="singleBin">View</a></button>
              <button class="btn btn-primary">update</button>
              <a href={{"delete/".$data->id}}><button class="btn btn-danger">delete</button></a>
            </td>

          </tr>
        @endforeach
         
       
        </tbody>
      </table>
      
  
     
      </table>
      
    @endsection('content')


