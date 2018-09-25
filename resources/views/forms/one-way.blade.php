<form action="{{ route('trip.request') }}" method="post" class="home_search_form needs-validation" id="trip" novalidate>
    <div class="alert alert-success text-center" id="success" style="display: none;"></div>
    <div class="alert alert-danger text-center" id="error" style="display: none;"></div>
    @csrf
    <div class="form-row">
        <div class="col-md-3 mb-3 input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-plane-departure" aria-hidden="true"></i></span>
            </div>
            <input required type="text" name="departure" class="form-control {{ ($errors->has('departure')) ? 'is-invalid' : '' }}" placeholder="Flying from" style="height: 39px;">
        </div>
        <div class="input-group col-md-3 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-plane-arrival" aria-hidden="true"></i></span>
            </div>
            <input required type="text" class="form-control {{ ($errors->has('arrival')) ? 'is-invalid' : '' }}" name="arrival" placeholder="Flying To"  style="height: 39px;">
        </div>
        <div class="input-group col-md-3 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            </div>
        <input type="text" class="form-control {{ ($errors->has('date')) ? 'is-invalid' : '' }} one-way" readonly  name="date" placeholder="Date"   style="height: 39px;">
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
            <input required type="email" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" name="email" placeholder="Email">
        </div>
        <div class="ml-auto">
            <button type="submit" class="home_search_button btn-sm" style="height: 40px"><i id="loading"></i> Submit</button>
        </div>
    </div>
</form>

@section('link-js')
<script>
    (function() {
        'use strict';
        function checkDate(form) {
            if(event.currentTarget.id === 'trip') {
               return $(form).find('input[name="date"]').val() === '' ? false : true;
            }else if(event.currentTarget.id === 'return') {
                return $(form).find('input[name="depart_date"]').val() === '' || $(form).find('input[name="return_date"]').val()  === '' ? false : true;
            }
        };
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        const validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
            if (form.checkValidity() === false || !checkDate(form)) {
                event.stopPropagation();
            }else{
                $(form).find('#loading').addClass('fas fa-spinner fa-spin fa-fw');
                $(form).find('button').attr('disabled', 'disabled');
                $.ajax({
                    url: event.currentTarget.action,
                    method: 'post',
                    data: $(form).serialize(),
                    success: function(data){
                        $(form).find('#success').text(data.msg);
                        $(form).find('#success').css("display","block");
                        $(form).find('#loading').removeClass('fas fa-spinner fa-spin fa-fw');
                        $(form).find('button').attr('disabled', false);
                        setTimeout(function() { 
                            $(form).find('#success').text();
                            $(form).find('#success').css("display","none");
                        }, 5000);
                        // $(form).trigger("reset");
                        // form.reset();
                    },
                    error: function(e) {
                        $(form).find('#error').text('Something went wrong. Please try again later');
                        $(form).find('#error').css("display","block");
                        $(form).find('#loading').removeClass('fas fa-spinner fa-spin fa-fw');
                        $(form).find('button').attr('disabled', false);
                        setTimeout(function() { 
                            $(form).find('#error').text();
                            $(form).find('#error').css("display","none");
                        }, 5000);
                    },
                });
            }
            form.classList.add('was-validated');
            }, false);
        });
        }, false);
    })();
    </script>
@endsection