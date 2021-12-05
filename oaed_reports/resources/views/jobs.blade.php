@include('inc')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Jobs</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Jobs Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Company</th>
                                            <th>Start date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Paulos</td>
                                            <td>Accountant</td>
                                            <td>Tesla</td>
                                            <td>2021/12/28</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Mitsos</td>
                                            <td>Chief Executive Officer(CEO)</td>
                                            <td>Analog</td>
                                            <td>2021/11/09<br></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Giorgos</td>
                                            <td>Junior Technical Author</td>
                                            <td>Artlift</td>
                                            <td>2021/10/12<br></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Kostas</td>
                                            <td>Software Engineer</td>
                                            <td>Vcled</td>
                                            <td>2021/10/6<br></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Panoulis</td>
                                            <td>Software Engineer</td>
                                            <td>Samsung</td>
                                            <td>2021/09/07<br></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Eirini</td>
                                            <td>Integration Specialist</td>
                                            <td>LG</td>
                                            <td>2021/09/02<br></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Basilis<br></td>
                                            <td>Software Engineer</td>
                                            <td>Vcled</td>
                                            <td>2021/08/03<br></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Eua</td>
                                            <td>Pre-Sales Support</td>
                                            <td>Tesla</td>
                                            <td>2021/07/12<br></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Sofia</td>
                                            <td>Sales Assistant</td>
                                            <td>LG</td>
                                            <td>2021/07/06<br></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/user.png">Mpampis</td>
                                            <td>Senior JavaScript Developer</td>
                                            <td>AnalogProgrammers</td>
                                            <td>2021/06/29<br></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td><strong>Position</strong></td>
                                            <td><strong>Office</strong></td>
                                            <td><strong>Start date</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © AnalogProgrammers 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>