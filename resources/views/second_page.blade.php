<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create new channel</div>

                <div class="card-body" style="width=100%">
                    <form action="{{ url('/second') }}" method="POST">
                        <!-- the first t-shirt image -->
                        <center>
                            <img src="{{ asset('images/design1.jpg') }}" alt="" srcset="">
                        </center>
                        <!-- the 4 t-hirts in the same row -->
                        <div class="row">
                            <div class="form-group">
                            
                            <div class="col-md-3 float-left" style="margin-right:0">
                                <div class="radio">
                                    <label for="design">
                                        <img src="{{ asset('images/design1.jpg') }}" alt="">
                                        <input type="radio" name="design" id="design1" value="" checked="">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 float-right" style="margin-left:0">
                                <div class="radio">
                                    <label for="design">
                                        <img src="{{ asset('images/design2.jpg') }}" alt="">
                                        <input type="radio" name="design" id="design1" value="" checked="">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 float-right" style="margin-right:0">
                                <div class="radio">
                                    <label for="design">
                                        <img src="{{ asset('images/design2.jpg') }}" alt="">
                                        <input type="radio" name="design" id="design1" value="" checked="">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 float-right" style="margin-right:0">
                                <div class="radio">
                                    <label for="design">
                                        <img src="{{ asset('images/design1.jpg') }}" alt="">
                                        <input type="radio" name="design" id="design1" value="" checked="">
                                    </label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- the size dropdown -->
                        <div class="row">
                            <div class="form-group col-md-7">
                                <label for="select" class="col-md-3 control-label">Selects</label>
                                <div class="col-md-5">
                                    <select name="size" id="size" class="form-control">
                                        <option value=""></option>
                                        <option value="small">Small</option>
                                        <option value="large">Large</option>
                                        <option value="XL">XL</option>
                                    </select>
                                </div>
                            </div>
                            <!-- the input field for quantity -->
                            <div class="form-group col-md-3 float-right">
                                <label for="quantity">QuantityFull Name</label>
                                <input type="number" name="quantity" class="form-control">
                            </div>
                        </div>

                        <!-- the color choosing part -->
                        <center>
                            <div class="row">
                                <label for="color">Colors</label>
                                <div class="form-group col-md-12">
                                    <div class="col-md-3 float-left" style="margin-right:0">
                                        <label for="color" class="radio_label">
                                            <input type="radio" name="color" value="White">White
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 float-right" style="margin-right:0">
                                        <label for="color" class="radio_label">
                                            <input type="radio" name="color" value="Black" >Black
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </center>

                        <!-- the checkpoint choosing part -->
                        <center>
                            <div class="row">
                                <label for="checkpoint" class>Checkpoints</label>
                                <div class="form-group col-md-12">
                                
                                <div class="col-md-4 float-right" style="margin-right:0">
                                    <div class="radio">
                                        <label for="checkpoint">
                                            <input type="radio" name="checkpoint" id="checkpoint1" value="" checked="">Mexico
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 float-right" style="margin-left:0">
                                    <div class="radio">
                                        <label for="checkpoint">
                                            <input type="radio" name="checkpoint" id="checkpoint2" value="" checked="">Megenagna
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 float-right" style="margin-right:0">
                                    <div class="radio">
                                        <label for="checkpoint">
                                            <input type="radio" name="checkpoint" id="checkpoint3" value="" checked="">Piazza
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </center>

                        <!-- the chart and purchase buttons -->
                        <div class="row">
                            <!-- <div class="form-group col-md-6">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">Chart</button>
                                </div>
                            </div> -->
                            <div class="form-group col-md-6 float-right">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">Purchase</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    </body>
</html>
