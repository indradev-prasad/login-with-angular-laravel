@extends('layouts.frontend')
@section('content')       
        <h2>Register and login</h2>
        <div  ng-controller="registerController">
             <button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('register')">Register</button>
             <button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('login')">Login</button>
             <div class="col-md-12">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
             <div ng-class="{ 'alert': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error' }" ng-if="flash" ng-bind="flash.message"></div>
            </div>
                </div>
            <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Register</h4>
                        </div>
                        <div class="modal-body">
                    <div ng-class="{ 'alert': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error' }" ng-if="flash" ng-bind="flash.message"></div>
                            <form name="formRegister" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="name" name="name" placeholder="Fullname" value="" 
                                        ng-model="user.name" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="formRegister.name.$invalid && formRegister.name.$touched">Name field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="" 
                                        ng-model="user.email" ng-required="true" ng-email="true">
                                        <span class="help-inline" 
                                        ng-show="formRegister.email.$invalid && formRegister.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" value="" 
                                        ng-model="user.contact_number" ng-required="true" ng-number="true">
                                    <span class="help-inline" 
                                        ng-show="formRegister.contact_number.$invalid && formRegister.contact_number.$touched">Contact number field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="password" value="" 
                                        ng-model="user.password" ng-required="true">
                                    <span class="help-inline" 
                                        ng-show="formRegister.password.$invalid && formRegister.password.$touched">password field is required</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="save()" ng-disabled="formRegister.$invalid">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Login</h4>
                        </div>
                        <div class="modal-body">
             <div ng-class="{ 'alert': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error' }" ng-if="flash" ng-bind="flash.message"></div>
                            <form name="formLogin" class="form-horizontal" novalidate="">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="" 
                                        ng-model="login.email" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="formLogin.email.$invalid && formLogin.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="password" value="" 
                                        ng-model="login.password" ng-required="true">
                                    <span class="help-inline" 
                                        ng-show="formLogin.password.$invalid && formLogin.password.$touched">password field is required</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="login()" ng-disabled="formLogin.$invalid">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
