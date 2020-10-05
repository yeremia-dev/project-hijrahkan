<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Bootstrap Wizard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/form/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('template/form/assets/img/favicon.png') }}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('template/form/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/form/assets/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('template/form/assets/css/demo.css') }}" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('{{ asset('template/form/assets/img/wizard-book.jpg') }}')">


    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="" method="">
                            <div class="wizard-header">
                                <h3 class="wizard-title">
                                    KPR
                                </h3>
                                <h5>Lengkapi form dibawah ini</h5>
                            </div>

                            <div class="">
                                <div class="tab-pane" id="details">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="input-group">

                                                <div class="form-group label-floating">
                                                    <label class="control-label">Your Email</label>
                                                    <input name="name" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Your Password</label>
                                                    <input name="name2" type="password" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->
</div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset('template/form/assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/form/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/form/assets/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('template/form/assets/js/material-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{ asset('template/form/assets/js/jquery.validate.min.js') }}"></script>
</html>
