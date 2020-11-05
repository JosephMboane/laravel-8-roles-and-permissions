@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Adicionar Exame</h2>
            </div>
            <div class="pull-right">
                <i class='fas fa-angle-double-left' style="color: #FEC311">
                     <a class="button-go-back-secondary mb-5" href="{{ route('exams.index') }}" style="color: #FEC311"> Voltar atrás</a>
                </i>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('exams.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="col-xs-4 col-sm-4 col-md-12">
                    <div class="form-group">
                        <input type="text" id="myInput" name="name" class="form-control" placeholder="Nome do Exame">
                    </div>
                </div>
{{--                <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                    <div class="form-group">--}}
{{--                        <textarea class="form-control" style="height:150px" name="detail"  value="Update" placeholder="Motivos que levam te a fazer o Exame"></textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-xs-12 col-sm-12 col-md-12">
{{--                    <select  name="user_id">--}}
{{--                        <option value="">Choose Company</option>--}}
{{--                        @foreach($users as $user)--}}
{{--                            <option value="{{$user->id}}">{{$user->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::select('users[]', $users,[], array('class' => 'form-control','multiple','id'=>'user_id')) !!}--}}
{{--                    </div>--}}
                    <div class="form-group">
                        {!! Form::Label('item', 'Pacientes') !!}

                        {!! Form::select('user_id', $users, null, ['class' => 'form-control','placeholder'=>'Nome do Paciente']) !!}

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submeter</button>
            </div>
        </div>
    </form>

{{--    <form autocomplete="off" action="/action_page.php">--}}
{{--        <div class="autocomplete" style="width:300px;">--}}
{{--            <input id="myInput" type="text" name="myCountry" placeholder="Country">--}}
{{--        </div>--}}
{{--        <input type="submit">--}}
{{--    </form>--}}

    <script>
        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }
            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
        }

        /*An array containing all the country names in the world:*/
        var countries = ["Electrocardiograma Simples","Espirometria Simples","Audiograma Tonal Simples","Exame de Acuidade Visual",
            "RX Torax, Pulmoes e Coração-1 incidência","Ecografia Abdominal","Teste Covid 19","Teste de Malária"];

        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
        autocomplete(document.getElementById("myInput"), countries);
        $(document).ready(function(){

            // Fetch all records
            $('#but_fetchall').click(function(){
                fetchRecords(0);
            });

            // Search by userid
            $('#but_search').click(function(){
                var userid = Number($('#search').val().trim());

                if(userid > 0){
                    fetchRecords(userid);
                }

            });

        });

    </script>

@endsection


