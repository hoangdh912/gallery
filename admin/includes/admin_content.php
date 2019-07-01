            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>

                        <?php 

                        $user = new User();

                        $user->username = "Exsusename";
                        $user->password = "as_password";
                        $user->first_name = "Easle_first_name";
                        $user->last_name = "asvple_last_name";

                        $user->create();

                        // $user = User::find_single_user(8);
                        // $user->last_name = "Williams";
                        // $user->username = "Eli";
                        // $user->first_name = "Smith";

                        // $user->update();

                        // $user = User::find_single_user(10);
                        // $user->delete();

                        // $user = User::find_single_user(10);
                        // $user->password = "justpassword";
                        // $user->save();

                        // $user = new User();
                        // $user->username = "Wow";
                        // $user->save();

                        ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->