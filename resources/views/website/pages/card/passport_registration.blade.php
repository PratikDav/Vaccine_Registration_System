<div id='regFormForPassport'>
    <form action="">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mt-3">
                    <span>Select type:</span>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>


                <div class="mt-3">
                    <span>Passport Number:</span>
                    <input type="text" class="form-control" placeholder="AC0215425">
                </div>

                <div class="mt-3">
                    <span>Date of birth (according to Passport):</span>
                    <input type="date" class="form-control" placeholder="Selet Your Birth Date">
                </div>


                <div class="border border-2 rounded mt-3">
                    <div class="container">
                        <div class="d-flex">
                            <div class="me-5 ms-4 mt-3">
                                <h3>0 5 V G E 4</h3>
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
                    <input class="w-100 btn btn-success mt-3 mb-3" type="submit" value="Verify">
                </div>

            </div>
            <div class="col-md-6">
                <div class="mt-3">
                    <span>Country:</span>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>
