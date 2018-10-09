    <div class="widget-bg-transparent" ng-controller="pipelineColCtrl">
        <div class="widget-body clearfix">
            <!-- Column View -->
            <div class="row pipeline-cells" ng-show="ShowColView">
                <div class="col-md-3" ng-repeat="y in pipeline_cols">
                    <div class="pipeline-cell">
                        <div class="pipeline-head" style="border-color: #{{y.column_color}};">
                            <div class="pipeline-head-text" style="color:#{{y.column_color}};">{{y.column_name}}</div>
                            <div class="pipeline-head-info">1 item: $2,400</div>
                        </div>
                        <!-- /.pipeline-head -->
                        <!--div class="quick-add-pipeline">
                            <div class="quick_add__text">Quick add</div>
                            <div class="quick_add__pipeline_cell" style="display: none;">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="qlname" placeholder="Lead name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="qbamount" placeholder="0 $" />
                                </div>
                                <div class="form-group form-field-group">
                                    <input type="text" class="form-control border-b1" name="qccompany" placeholder="Contact or Company" />
                                    <input type="text" class="form-control" name="qmphone" placeholder="Mobile phone" />
                                    <input type="text" class="form-control" name="qpemail" placeholder="Personal email" />
                                </div>
                                <button class="btn btn-quick-add btn-primary">Add</button>
                                <button class="btn btn-link btn-quick-cancel">Cancel</button>
                            </div>
                        </div-->
                        <!-- /.quick-add-pipeline -->
                        <div class="dd">
                            <ol class="dd-list">
                                <li class="pipeline-body-cell dd-item">
                                    <div class="dd-handle">    
                                        <div class="pipeline-top-block">
                                            <div class="pipeline-top-name">Rusty Pancrazio</div>
                                            <!-- /.pipeline-top-name -->
                                            <div class="pipeline-top-date">Today 1:16pm</div>
                                            <!-- /.pipeline-top-date -->
                                        </div>
                                        <!-- /.pipeline-top-block -->
                                        <div class="pipeline-title-block">My Cool New lead</div>
                                        <!-- /.pipeline-title-block -->
                                        <div class="pipeline-bottom-block">
                                            <div class="pipeline-bottom-price">$2,400</div>
                                            <!-- /.pipeline-bottom-price -->
                                            <div class="pipeline-bottom-icon"><span class="block-notifications material-icons">notifications_none</span></div>
                                            <!-- /.pipeline-bottom-icon -->
                                        </div>
                                        <!-- /.pipeline-bottom-block -->
                                    </div>
                                    <!-- /.dd-headle -->
                                </li>
                                <!-- /.pipeline-body-cell -->
                            </ol>
                        </div>
                        <!-- ./dd -->
                    </div>
                    <!-- /.div -->
                </div>
            </div>
            
            <!-- List View-->
            <div class="row pipeline-table" ng-show="ShowListView">
                <div class="col-sm-12">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <table class="table table-editable table-bordered custom-checkbox table-lead-list table-vmiddle table-responsive">
                                <thead>
                                    <tr>
                                        <th><label for="checkmain"><input type="checkbox" id="checkmain" name=""><var></var></label></th>
                                        <th>Lead Title</th>
                                        <th>Contact</th>
                                        <th>Lead Stage</th>
                                        <th>Value</th>
                                        <th>Assigned To</th>
                                        <th>Age</th>
                                    </tr>
                                </thead>
                                <tbody ng-repeat="lView in pipeline_cols">
                                    <tr>
                                        <td>
                                            <label for="checklist{{lView.id}}">
                                                <input type="checkbox" id="checklist{{lView.id}}" name=""><var></var>
                                            </label>
                                        </td>
                                        <td>
                                            <div contenteditable="true">Miller Greenville Ave</div>
                                        </td>
                                        <td>
                                            <div contenteditable="true">Anthony Miller</div>
                                        </td>
                                        <td>
                                            <span class="leads__status-label" style="background-color: #{{lView.column_color}};">{{lView.column_name}}</span>
                                        </td>
                                        <td>$2,400</td>
                                        <td>Raymond Ruiz</td>
                                        <td>3d</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
