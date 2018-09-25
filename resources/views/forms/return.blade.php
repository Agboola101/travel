<form action="{{ route('trip.return') }}" method="post" class="home_search_form needs-validation" id="return" novalidate>
    <div class="alert alert-success text-center" id="success" style="display: none;"></div>
    <div class="alert alert-danger text-center" id="error" style="display: none;"></div>
    @csrf
    <div class="form-row">
        <div class="col-md-3 mb-3 input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-plane-departure" aria-hidden="true"></i></span>
            </div>
            <input required type="text" name="departure" class="form-control {{ ($errors->has('departure')) ? 'is-invalid' : '' }}" placeholder="Flying from">
        </div>
        <div class="input-group col-md-3 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-plane-arrival" aria-hidden="true"></i></span>
            </div>
            <input required type="text" class="form-control {{ ($errors->has('arrival')) ? 'is-invalid' : '' }}" name="arrival" placeholder="Flying To">
        </div>
        <div class="input-group col-md-3 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            </div>
            <input required type="text" class="form-control {{ ($errors->has('depart_date')) ? 'is-invalid' : '' }} one-way" readonly name="depart_date" placeholder="Departure" >
        </div>
        <div class="input-group col-md-3 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            </div>
            <input required type="text" class="form-control {{ ($errors->has('return_date')) ? 'is-invalid' : '' }} one-way" readonly name="return_date" placeholder="Return" >
        </div>
        <div class="col-md-3 mb-3 input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><img src="{{ asset('images/seatdrawn.svg') }}" alt=""></span>
            </div>
            <select name="class" class="form-control {{ ($errors->has('class')) ? 'is-invalid' : '' }}" style="height: 39px;">
                <option value="Economy">Economy</option>
                <option value="Buisness">Buisness</option>
                <option value="First-Class">First Class</option>
                <option value="Prenium">Prenium</option>
            </select>
        </div>
        <div class="col-md-3 mb-3 input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input required type="email" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" name="email" placeholder="Email"  style="height: 39px;">
        </div>
        <div class="ml-auto">
            <button type="submit" class="home_search_button btn-sm" style="height: 40px"><i id="loading"></i> Submit</button>
        </div>
    </div>
</form>
