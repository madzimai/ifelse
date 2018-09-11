 <form action="{{ route('ifelse.result') }}" name="create-measured-entity" method="POST">
  @csrf
  <div class="input-group mb-3">
  <div class="input-group-prepend">
       
    <select class="form-control" name="Gender" >
    <option value ="gender">Gender</option>
        <option value="male">Male</option>
    <option value="female">Female</option>
</select>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">how old you are?</span>
  </div>
  <input type="text" name="Age" class="form-control" placeholder="Age" aria-label="Age" aria-describedby="basic-addon1">
  <input class="btn btn-primary" type="submit" value="Submit">

</div>
</form>

