
   @extends('pages.index')


   @section('content')
   
        {{-- <table>
            <tr>
                <td>number</td>
                <td>location</td>
            </tr>
            @foreach ($bin as $bin)
            <tr>
                <td>{{$bin->number}}</td>
                <td>{{$bin->location}}</td>
            
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

        @foreach ($bin as $bin)
          <tr>
            <td>{{$bin->number}}</td>
            <td>{{$bin->location}}</td>
            <td>{{$bin->created_at}}</td>
            <td>{{$bin->updated_at}}</td>
            <td>
             <a href={{"singleBin/".$bin->id}}> <button class="btn btn-success">View</button></a>
              <button class="btn btn-primary">update</button>
              <a href={{"delete/".$bin->id}}><button class="btn btn-danger">delete</button></a>
            </td>

          </tr>
        @endforeach
         
       
        </tbody>
      </table>
      
  
     
      </table>
      
    @endsection('content')


