
   @extends('pages.index')


   @section('content')
   
      
        <div class="card">
            <div class="card-header">
                <h1>create Bin</h1>
            </div>
            <div class="card-body">
                <form action="createbin" method="post" >
                    @csrf
                    <div class="form-group">
                      <label for="BinNumber">BinNumber</label>
                      <input type="number" class="form-control" name="BinNumber" id="BinNumber" aria-describedby="BinNumberHelp" placeholder="Enter BinNumber">
                 
                    </div>
                    <div class="form-group">
                      <label for="BinLocation">BinLocation</label>
                      <input type="text" class="form-control" name="BinLocation"   id="BinLocation" placeholder="Enter BinLocation">
                    </div>

                    {{-- <div class="form-group">
                        <label for="UserId">UserId</label>
                        <input type="number" class="form-control" name="UserId"   id="UserId" placeholder="Enter UserId">
                      </div> --}}



                    <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    </div>
                  </form>
            </div>
        </div>
    
      
      
    @endsection('content')


