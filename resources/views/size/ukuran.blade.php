@extends('welcome')
@section('content')
<style>
#form{
  position: fixed;
  width: auto;
  height: 450px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  left: 300px;
}

#gambar{
  position: fixed;
  width: 650px;
  height: 450px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  left: 600px;
}
</style>

<div class="container" id="form">
	<h5 class="p-2 bg-primary border text-white" >Pilih lingkar Pinggang</h5>	
    
        <div class="form-check">

            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                78-80 cm
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                80-85 cm
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                85-90 cm
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                90-95 cm
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                95-130 cm
            </label>
        </div>
      <br>

        <h5 class="p-2 bg-primary border text-white">Pilih Tinggi badan</h5>	
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            150-155
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            155-160
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            160-165
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            165-170
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            170-175
            </label>
        </div>
        
</div>
    <div id="gambar">
            
        <img src="{{ asset('admin/img/1-1.png') }}" class="img-fluid" alt="...">
        <div class="d-grid gap-1 col-2 mx-auto" >
            <br>
            <a  href="/detail">
                <button class="btn btn-primary" type="button">cari</button>
            </a>
        </div>
            
    </div>


@endsection