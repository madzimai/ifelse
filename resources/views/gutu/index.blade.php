<form action="{{ route('gutu.result') }}" name="create-measured-entity" method="POST">
  @csrf
  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="basic-addon1">How much was your Gutu contribution?</span>
  </div>
  <div>
  <input type="number" name="amount"/>
  <input class="btn btn-primary" type="submit" value="Submit">
</div>
</div>
</form>