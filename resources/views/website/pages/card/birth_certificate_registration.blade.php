<div id='regFormForBirth'>
    <form action="">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mt-3">
                    <span>Birth Certificate Number:</span>
                    <input type="number" class="form-control" placeholder="Example- 19944587450125402">
                </div>


                <div class="border border-2 rounded mt-3">
                    <div class="container">
                        <div class="d-flex">
                            <div class="me-5 ms-4 mt-3">
                                <h3>S L 5 G 9 E</h3>
                            </div>
                            <div class="mt-3">
                                <button class="border border-0">
                                    <img id="reload" src="{{ asset('website/images/reload.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container mb-2">
                        <span>Write the letters from above here:</span>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>

                <div>
                    <input class="w-100 btn btn-success mt-3" type="submit" value="Verify">
                </div>

            </div>
            <div class="col-md-6">
                <div class="mt-3">
                    <span>Date of birth (according to national identity card):</span>
                    <input type="date" class="form-control" placeholder="Selet Your Birth Date">
                </div>
            </div>
        </div>
    </form>
</div>
