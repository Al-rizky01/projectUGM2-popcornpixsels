@extends('user.profile')


@section('container')

<div class="tab-content p-3">
    <div class="tab-pane active show" id="profile">
        <h5 class="mb-3">User Profile</h5>
        <div class="row">
            <div class="col-md-6">
                <h6>About</h6>
                <p>
                  Your bio.
                </p>
                <h6>Favorites</h6>
                <p>
                    Indie music, skiing and hiking. I love the great outdoors.
                </p>
            </div>
            <div class="col-md-6">
                <h6>Recent badges</h6>
                <a href="javascript:void();" class="badge badge-dark badge-pill">Active Member</a>
                <a href="javascript:void();" class="badge badge-dark badge-pill">Active Commentator</a>
                <a href="javascript:void();" class="badge badge-dark badge-pill">High Hour</a>

                <hr>
                <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Likes</span>
                <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Comment</span>
                <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
            </div>
            <div class="col-md-12">
                <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                <table class="table table-hover table-striped">
                    <tbody>





                        <tr>
                            <td>
                            <span class="fa fa-clock-o ion-clock float-right"></span>  <p>The Godfather</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <span class="fa fa-clock-o ion-clock float-right"></span><p>The Shawshank Redemption</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <span class="fa fa-clock-o ion-clock float-right"></span>  <p>Pulp Fiction</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <span class="fa fa-clock-o ion-clock float-right"></span><p>Schindler's List</p>
                            </td>
                        </tr>

                    </tbody>
                </table>
@endsection
