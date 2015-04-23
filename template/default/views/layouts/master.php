<?php echo $template['partials']['header'] ?>

<?php echo $template['body'];?>

<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills text-center">
                    <li><a href="">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Hotel</a></li>
                    <li><a href="">Restaurant</a></li>
                    <li><a href="">Shopping</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy 2014 by hi5Vietnam. All rights reserved</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--Include Js Common-->
<script type="text/javascript" src="/assets/js/interface.js"></script>
<script src="/assets/js/common.js" type="text/javascript"></script>

<!-- Modal Login -->
<div class="modal fade my-modal ml-login" id="ml-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="mySmallModalLabel"><i class="fa fa-key"></i> Login</h4>
            </div>
            <div class="modal-body">
                <p><input type="text" class="form-control" id="l_username" placeholder="Login or email address"/></p>

                <p><input type="password" class="form-control" id="l_pw" placeholder="Password"/></p>

                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-facebook fa-fw"></i> Connect with
                            facebook</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-key fa-fw"></i> Login</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-inline">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#" class="fg_pw">Forgot password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Register -->
<div class="modal fade my-modal ml-register" id="ml-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="mySmallModalLabel">
                    <i class="fa fa-pencil"></i> Register
                    <div class="pull-right">
                        Already registered? <a href="#" data-toggle="modal" data-target="#ml-login"
                                               onclick="$('#ml-register').modal('hide')">Sign in</a>
                    </div>
                </h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="#" class="btn btn-primary btn-sm btn-block">
                            <i class="fa fa-facebook fa-fw"></i> Connect with facebook
                        </a>

                        <div class="clearfix"></div>
                        <div class="line">
                            <span>Or</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Full name</label>

                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Full name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Email</label>

                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Password</label>

                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Birth date</label>

                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option>Day</option>
                                    </select>
                                    <select class="form-control">
                                        <option>Month</option>
                                    </select>
                                    <select class="form-control">
                                        <option>Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Location</label>

                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputEmail3"
                                           placeholder="123 Le Loi, Quang Ngai, Viet nam">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">I am a</label>

                                <div class="col-sm-8">
                                    <label class="radio-inline">
                                        <input type="radio" name="male" id="male" value="male"> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="male" id="male" value="male" checked="checked"> Famale
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <a href="#" class="btn btn-danger btn-sm">
                            Get in <span class="glyphicon glyphicon-log-out"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p>
                    You will receive email newsletters & account updates from us, which can be turned off any time. I
                    confirm that I have read and agree to the <a href="">Terms & Conditions</a> and <a href="">Privacy
                    Policy</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>