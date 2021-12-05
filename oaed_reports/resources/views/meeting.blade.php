@include('inc')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Add Meeting</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-xl-10 offset-xl-1">
                            <div class="card mb-3"></div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Name</h6><input type="text" name="name" placeholder="name">
                                </div>
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Topic</h6><input type="text" name="topic" placeholder="topic">
                                </div>
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Time and Date</h6><input type="datetime-local" name="Time">
                                </div>
                                <div class="card-body"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="far fa-calendar-plus fa-sm text-white-50"></i>&nbsp;Add meeting</a></div>
                            </div>
                            <div class="card"></div>
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