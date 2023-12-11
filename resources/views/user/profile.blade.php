
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
   body{
    margin-top:50px;
}
/* User Cards */
.user-box {
    width: 110px;
    margin: auto;
    margin-bottom: 20px;

}

.user-box img {
    width: 100%;
    border-radius: 50%;
	padding: 3px;
	background: #fff;
	-webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    -ms-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.profile-card-2 .card {
	position:relative;
}

.profile-card-2 .card .card-body {
	z-index:1;
}

.profile-card-2 .card::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    left: 0px;
	border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    height: 112px;
    background-color: #e6e6e6;
}

.profile-card-2 .card.profile-primary::before {
	background-color: #008cff;
}
.profile-card-2 .card.profile-success::before {
	background-color: #15ca20;
}
.profile-card-2 .card.profile-danger::before {
	background-color: #fd3550;
}
.profile-card-2 .card.profile-warning::before {
	background-color: #ff9700;
}
.profile-card-2 .user-box {
	margin-top: 30px;
}

.profile-card-3 .user-fullimage {
	position:relative;
}

.profile-card-3 .user-fullimage .details{
	position: absolute;
    bottom: 0;
    left: 0px;
	width:100%;
}

.profile-card-4 .user-box {
    width: 110px;
    margin: auto;
    margin-bottom: 10px;
    margin-top: 15px;
}

.profile-card-4 .list-icon {
    display: table-cell;
    font-size: 30px;
    padding-right: 20px;
    vertical-align: middle;
    color: #223035;
}

.profile-card-4 .list-details {
	display: table-cell;
	vertical-align: middle;
	font-weight: 600;
    color: #223035;
    font-size: 15px;
    line-height: 15px;
}

.profile-card-4 .list-details small{
	display: table-cell;
	vertical-align: middle;
	font-size: 12px;
	font-weight: 400;
    color: #808080;
}

/*Nav Tabs & Pills */
.nav-tabs .nav-link {
    color: #223035;
	font-size: 12px;
    text-align: center;
	letter-spacing: 1px;
    font-weight: 600;
	margin: 2px;
    margin-bottom: 0;
	padding: 12px 20px;
    text-transform: uppercase;
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;

}
.nav-tabs .nav-link:hover{
    border: 1px solid transparent;
}
.nav-tabs .nav-link i {
    margin-right: 2px;
	font-weight: 600;
}

.top-icon.nav-tabs .nav-link i{
	margin: 0px;
	font-weight: 500;
	display: block;
    font-size: 20px;
    padding: 5px 0;
}

.nav-tabs-primary.nav-tabs{
	border-bottom: 1px solid #008cff;
}

.nav-tabs-primary .nav-link.active, .nav-tabs-primary .nav-item.show>.nav-link {
    color: #008cff;
    background-color: #fff;
    border-color: #008cff #008cff #fff;
    border-top: 3px solid #008cff;
}

.nav-tabs-success.nav-tabs{
	border-bottom: 1px solid #15ca20;
}

.nav-tabs-success .nav-link.active, .nav-tabs-success .nav-item.show>.nav-link {
    color: #15ca20;
    background-color: #fff;
    border-color: #15ca20 #15ca20 #fff;
    border-top: 3px solid #15ca20;
}

.nav-tabs-info.nav-tabs{
	border-bottom: 1px solid #0dceec;
}

.nav-tabs-info .nav-link.active, .nav-tabs-info .nav-item.show>.nav-link {
    color: #0dceec;
    background-color: #fff;
    border-color: #0dceec #0dceec #fff;
    border-top: 3px solid #0dceec;
}

.nav-tabs-danger.nav-tabs{
	border-bottom: 1px solid #fd3550;
}

.nav-tabs-danger .nav-link.active, .nav-tabs-danger .nav-item.show>.nav-link {
    color: #fd3550;
    background-color: #fff;
    border-color: #fd3550 #fd3550 #fff;
    border-top: 3px solid #fd3550;
}

.nav-tabs-warning.nav-tabs{
	border-bottom: 1px solid #ff9700;
}

.nav-tabs-warning .nav-link.active, .nav-tabs-warning .nav-item.show>.nav-link {
    color: #ff9700;
    background-color: #fff;
    border-color: #ff9700 #ff9700 #fff;
    border-top: 3px solid #ff9700;
}

.nav-tabs-dark.nav-tabs{
	border-bottom: 1px solid #223035;
}

.nav-tabs-dark .nav-link.active, .nav-tabs-dark .nav-item.show>.nav-link {
    color: #223035;
    background-color: #fff;
    border-color: #223035 #223035 #fff;
    border-top: 3px solid #223035;
}

.nav-tabs-secondary.nav-tabs{
	border-bottom: 1px solid #75808a;
}
.nav-tabs-secondary .nav-link.active, .nav-tabs-secondary .nav-item.show>.nav-link {
    color: #75808a;
    background-color: #fff;
    border-color: #75808a #75808a #fff;
    border-top: 3px solid #75808a;
}

.tabs-vertical .nav-tabs .nav-link {
    color: #223035;
    font-size: 12px;
    text-align: center;
    letter-spacing: 1px;
    font-weight: 600;
    margin: 2px;
    margin-right: -1px;
    padding: 12px 1px;
    text-transform: uppercase;
    border: 1px solid transparent;
    border-radius: 0;
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem;
}

.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #dee2e6;
}

.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    border-bottom: 1px solid #dee2e6;
    border-right: 0;
    border-left: 1px solid #dee2e6;
}

.tabs-vertical-primary.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #008cff;
}

.tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
    color: #008cff;
    background-color: #fff;
    border-color: #008cff #008cff #fff;
    border-bottom: 1px solid #008cff;
    border-right: 0;
    border-left: 3px solid #008cff;
}

.tabs-vertical-success.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #15ca20;
}

.tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
    color: #15ca20;
    background-color: #fff;
    border-color: #15ca20 #15ca20 #fff;
    border-bottom: 1px solid #15ca20;
    border-right: 0;
    border-left: 3px solid #15ca20;
}

.tabs-vertical-info.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #0dceec;
}

.tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
    color: #0dceec;
    background-color: #fff;
    border-color: #0dceec #0dceec #fff;
    border-bottom: 1px solid #0dceec;
    border-right: 0;
    border-left: 3px solid #0dceec;
}

.tabs-vertical-danger.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #fd3550;
}

.tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
    color: #fd3550;
    background-color: #fff;
    border-color: #fd3550 #fd3550 #fff;
    border-bottom: 1px solid #fd3550;
    border-right: 0;
    border-left: 3px solid #fd3550;
}

.tabs-vertical-warning.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #ff9700;
}

.tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
    color: #ff9700;
    background-color: #fff;
    border-color: #ff9700 #ff9700 #fff;
    border-bottom: 1px solid #ff9700;
    border-right: 0;
    border-left: 3px solid #ff9700;
}

.tabs-vertical-dark.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #223035;
}

.tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
    color: #223035;
    background-color: #fff;
    border-color: #223035 #223035 #fff;
    border-bottom: 1px solid #223035;
    border-right: 0;
    border-left: 3px solid #223035;
}

.tabs-vertical-secondary.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #75808a;
}

.tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
    color: #75808a;
    background-color: #fff;
    border-color: #75808a #75808a #fff;
    border-bottom: 1px solid #75808a;
    border-right: 0;
    border-left: 3px solid #75808a;
}

.nav-pills .nav-link {
    border-radius: .25rem;
    color: #223035;
    font-size: 12px;
    text-align: center;
	letter-spacing: 1px;
    font-weight: 600;
    text-transform: uppercase;
	margin: 3px;
    padding: 12px 20px;
	-webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;

}

.nav-pills .nav-link:hover {
    background-color:#f4f5fa;
}

.nav-pills .nav-link i{
	margin-right:2px;
	font-weight: 600;
}

.top-icon.nav-pills .nav-link i{
	margin: 0px;
	font-weight: 500;
	display: block;
    font-size: 20px;
    padding: 5px 0;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #008cff;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
}

.nav-pills-success .nav-link.active, .nav-pills-success .show>.nav-link {
    color: #fff;
    background-color: #15ca20;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(21, 202, 32, .5);
}

.nav-pills-info .nav-link.active, .nav-pills-info .show>.nav-link {
    color: #fff;
    background-color: #0dceec;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
}

.nav-pills-danger .nav-link.active, .nav-pills-danger .show>.nav-link{
    color: #fff;
    background-color: #fd3550;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(253, 53, 80, .5);
}

.nav-pills-warning .nav-link.active, .nav-pills-warning .show>.nav-link {
    color: #fff;
    background-color: #ff9700;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(255, 151, 0, .5);
}

.nav-pills-dark .nav-link.active, .nav-pills-dark .show>.nav-link {
    color: #fff;
    background-color: #223035;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(34, 48, 53, .5);
}

.nav-pills-secondary .nav-link.active, .nav-pills-secondary .show>.nav-link {
    color: #fff;
    background-color: #75808a;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(117, 128, 138, .5);
}
.card .tab-content{
	padding: 1rem 0 0 0;
}

.z-depth-3 {
    -webkit-box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
    box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
}


body{
    margin-top:20px;


}

/* User Cards */
.user-box {
    width: 110px;
    margin: auto;
    margin-bottom: 20px;


}

.user-box img {
    width: 100%;
    border-radius: 50%;
	padding: 3px;
    background-color: #0b0c2a !important;
	-webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    -ms-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.profile-card-2 .card {
	position:relative;
}

.profile-card-2 .card .card-body {
	z-index:1;
}

.profile-card-2 .card::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    left: 0px;
	border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    height: 112px;
    background-color: #e6e6e6;
}

.profile-card-2 .card.profile-primary::before {
	background-color: #008cff;
}
.profile-card-2 .card.profile-success::before {
	background-color: #15ca20;
}
.profile-card-2 .card.profile-danger::before {
	background-color: #fd3550;
}
.profile-card-2 .card.profile-warning::before {
	background-color: #ff9700;
}
.profile-card-2 .user-box {
	margin-top: 30px;
}

.profile-card-3 .user-fullimage {
	position:relative;
}

.profile-card-3 .user-fullimage .details{
	position: absolute;
    bottom: 0;
    left: 0px;
	width:100%;
}

.profile-card-4 .user-box {
    width: 110px;
    margin: auto;
    margin-bottom: 10px;
    margin-top: 15px;
}

.profile-card-4 .list-icon {
    display: table-cell;
    font-size: 30px;
    padding-right: 20px;
    vertical-align: middle;
    color: #223035;
}

.profile-card-4 .list-details {
	display: table-cell;
	vertical-align: middle;
	font-weight: 600;
    color: #223035;
    font-size: 15px;
    line-height: 15px;
}

.profile-card-4 .list-details small{
	display: table-cell;
	vertical-align: middle;
	font-size: 12px;
	font-weight: 400;
    color: #808080;
}

/*Nav Tabs & Pills */
.nav-tabs .nav-link {
    color: #223035;
	font-size: 12px;
    text-align: center;
	letter-spacing: 1px;
    font-weight: 600;
	margin: 2px;
    margin-bottom: 0;
	padding: 12px 20px;
    text-transform: uppercase;
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;

}
.nav-tabs .nav-link:hover{
    border: 1px solid transparent;
}
.nav-tabs .nav-link i {
    margin-right: 2px;
	font-weight: 600;
}

.top-icon.nav-tabs .nav-link i{
	margin: 0px;
	font-weight: 500;
	display: block;
    font-size: 20px;
    padding: 5px 0;
}

.nav-tabs-primary.nav-tabs{
	border-bottom: 1px solid #008cff;
}

.nav-tabs-primary .nav-link.active, .nav-tabs-primary .nav-item.show>.nav-link {
    color: #008cff;
    background-color: #fff;
    border-color: #008cff #008cff #fff;
    border-top: 3px solid #008cff;
}

.nav-tabs-success.nav-tabs{
	border-bottom: 1px solid #15ca20;
}

.nav-tabs-success .nav-link.active, .nav-tabs-success .nav-item.show>.nav-link {
    color: #15ca20;
    background-color: #fff;
    border-color: #15ca20 #15ca20 #fff;
    border-top: 3px solid #15ca20;
}

.nav-tabs-info.nav-tabs{
	border-bottom: 1px solid #0dceec;
}

.nav-tabs-info .nav-link.active, .nav-tabs-info .nav-item.show>.nav-link {
    color: #0dceec;
    background-color: #fff;
    border-color: #0dceec #0dceec #fff;
    border-top: 3px solid #0dceec;
}

.nav-tabs-danger.nav-tabs{
	border-bottom: 1px solid #fd3550;
}

.nav-tabs-danger .nav-link.active, .nav-tabs-danger .nav-item.show>.nav-link {
    color: #fd3550;
    background-color: #fff;
    border-color: #fd3550 #fd3550 #fff;
    border-top: 3px solid #fd3550;
}

.nav-tabs-warning.nav-tabs{
	border-bottom: 1px solid #ff9700;
}

.nav-tabs-warning .nav-link.active, .nav-tabs-warning .nav-item.show>.nav-link {
    color: #ff9700;
    background-color: #fff;
    border-color: #ff9700 #ff9700 #fff;
    border-top: 3px solid #ff9700;
}

.nav-tabs-dark.nav-tabs{
	border-bottom: 1px solid #223035;
}

.nav-tabs-dark .nav-link.active, .nav-tabs-dark .nav-item.show>.nav-link {
    color: #223035;
    background-color: #fff;
    border-color: #223035 #223035 #fff;
    border-top: 3px solid #223035;
}

.nav-tabs-secondary.nav-tabs{
	border-bottom: 1px solid #75808a;
}
.nav-tabs-secondary .nav-link.active, .nav-tabs-secondary .nav-item.show>.nav-link {
    color: #75808a;
    background-color: #fff;
    border-color: #75808a #75808a #fff;
    border-top: 3px solid #75808a;
}

.tabs-vertical .nav-tabs .nav-link {
    color: #223035;
    font-size: 12px;
    text-align: center;
    letter-spacing: 1px;
    font-weight: 600;
    margin: 2px;
    margin-right: -1px;
    padding: 12px 1px;
    text-transform: uppercase;
    border: 1px solid transparent;
    border-radius: 0;
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem;
}

.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #dee2e6;
}

.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    border-bottom: 1px solid #dee2e6;
    border-right: 0;
    border-left: 1px solid #dee2e6;
}

.tabs-vertical-primary.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #008cff;
}

.tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
    color: #008cff;
    background-color: #fff;
    border-color: #008cff #008cff #fff;
    border-bottom: 1px solid #008cff;
    border-right: 0;
    border-left: 3px solid #008cff;
}

.tabs-vertical-success.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #15ca20;
}

.tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
    color: #15ca20;
    background-color: #fff;
    border-color: #15ca20 #15ca20 #fff;
    border-bottom: 1px solid #15ca20;
    border-right: 0;
    border-left: 3px solid #15ca20;
}

.tabs-vertical-info.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #0dceec;
}

.tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
    color: #0dceec;
    background-color: #fff;
    border-color: #0dceec #0dceec #fff;
    border-bottom: 1px solid #0dceec;
    border-right: 0;
    border-left: 3px solid #0dceec;
}

.tabs-vertical-danger.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #fd3550;
}

.tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
    color: #fd3550;
    background-color: #fff;
    border-color: #fd3550 #fd3550 #fff;
    border-bottom: 1px solid #fd3550;
    border-right: 0;
    border-left: 3px solid #fd3550;
}

.tabs-vertical-warning.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #ff9700;
}

.tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
    color: #ff9700;
    background-color: #fff;
    border-color: #ff9700 #ff9700 #fff;
    border-bottom: 1px solid #ff9700;
    border-right: 0;
    border-left: 3px solid #ff9700;
}

.tabs-vertical-dark.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #223035;
}

.tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
    color: #223035;
    background-color: #fff;
    border-color: #223035 #223035 #fff;
    border-bottom: 1px solid #223035;
    border-right: 0;
    border-left: 3px solid #223035;
}

.tabs-vertical-secondary.tabs-vertical .nav-tabs{
	border:0;
	border-right: 1px solid #75808a;
}

.tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
    color: #75808a;
    background-color: #fff;
    border-color: #75808a #75808a #fff;
    border-bottom: 1px solid #75808a;
    border-right: 0;
    border-left: 3px solid #75808a;
}

.nav-pills .nav-link {
    border-radius: .25rem;
    color: #223035;
    font-size: 12px;
    text-align: center;
	letter-spacing: 1px;
    font-weight: 600;
    text-transform: uppercase;
	margin: 3px;
    padding: 12px 20px;
	-webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;

}

.nav-pills .nav-link:hover {
    background-color:#f4f5fa;
}

.nav-pills .nav-link i{
	margin-right:2px;
	font-weight: 600;
}

.top-icon.nav-pills .nav-link i{
	margin: 0px;
	font-weight: 500;
	display: block;
    font-size: 20px;
    padding: 5px 0;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #008cff;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
}

.nav-pills-success .nav-link.active, .nav-pills-success .show>.nav-link {
    color: #fff;
    background-color: #15ca20;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(21, 202, 32, .5);
}

.nav-pills-info .nav-link.active, .nav-pills-info .show>.nav-link {
    color: #fff;
    background-color: #0dceec;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
}

.nav-pills-danger .nav-link.active, .nav-pills-danger .show>.nav-link{
    color: #fff;
    background-color: #fd3550;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(253, 53, 80, .5);
}

.nav-pills-warning .nav-link.active, .nav-pills-warning .show>.nav-link {
    color: #fff;
    background-color: #ff9700;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(255, 151, 0, .5);
}

.nav-pills-dark .nav-link.active, .nav-pills-dark .show>.nav-link {
    color: #fff;
    background-color: #223035;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(34, 48, 53, .5);
}

.nav-pills-secondary .nav-link.active, .nav-pills-secondary .show>.nav-link {
    color: #fff;
    background-color: #75808a;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(117, 128, 138, .5);
}
.card .tab-content{
	padding: 1rem 0 0 0;
}

.z-depth-3 {
    -webkit-box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
    box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
}
.atu{
    display: flex;
    gap: 10px;
}
.popo{
    width: 500px;
}
.popop{
    width: 120px;

}
input[type="file"] {
    opacity: 1;
    z-index: 4;
    background-color: #008cff00;
    width: 70px;
    height: 90px;
    margin-top: -90%;

    opacity: 0;
}

.foto-button{
    width: 100px;
    margin-left: -10%;
    font-size: .7rem;
    background-color: #fd3550;
}
.foto-button p{
    font-size: 0.5rem;
    color: white;
    font-style: bold
}
.home{
    color: white;
    margin-left: -90%;
    margin-top: -5%;
    cursor: pointer;
    transition-duration: 500ms
}
.home:hover{
    color: #75808a;
}
    </style>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>



<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
    <div class="container mb-2">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <a href="{{ route('homepage') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" class="home" height="40" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                          </svg>
                    </a>
                    <h2>Your profile</h2>
                    <p>edit your bio and fotoprofile.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<div class="container mt-3">
<div class="row">
        <div class="col-lg-4">
           <div class="profile-card-4 z-depth-3">
            <div class="card">
              <div class="card-body text-center bg-primary rounded-top">
               <div class="user-box">
                @if(Auth::user()->image)
                <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="profile_image" style="width: 80px;height: 80px; margin: 0px; ">
                @endif
                <form action="{{route('home')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="btn btn-danger cendek" type="file" name="image">
                    <button class=" mt-2 foto-button" type="submit" value="Save">Upload foto</button>
                </form>
              </div>
              <h5 class="mb-1 text-white">{{ $user->username }}</h5>
              <h6 class="text-light">Your bio.</h6>
             </div>
              <div class="card-body">
                <ul class="list-group shadow-none">
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-phone-square"></i>
                  </div>
                  <div class="list-details">
                    <span>9910XXXXXX</span>
                    <small>Mobile Number</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="list-details">
                    <span>info@example.com</span>
                    <small>Email Address</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="fa fa-globe"></i>
                  </div>
                  <div class="list-details">
                    <span>www.example.com</span>
                    <small>Website Address</small>
                  </div>
                </li>
                </ul>
                <div class="row text-center mt-4">
                  <div class="col p-2">
                   <h4 class="mb-1 line-height-5">154</h4>
                    <small class="mb-0 font-weight-bold">Film</small>
                   </div>
                    <div class="col p-2">
                      <h4 class="mb-1 line-height-5">22</h4>
                     <small class="mb-0 font-weight-bold">Wishlist</small>
                    </div>
                    <div class="col p-2">
                     <h4 class="mb-1 line-height-5">9.1k</h4>
                     <small class="mb-0 font-weight-bold">Hour</small>
                    </div>

                 </div>
                 <form action="{{ route('logout') }}" method="get" class="p-3">
                        @csrf
                        <button  class="btn btn-primary px-4 " type="submit">Logout</button>
                        </form>
               </div>

             </div>
           </div>
        </div>
        <div class="col-lg-8">
           <div class="card z-depth-3">
            <div class="card-body">
                <ul class="nav nav-pills nav-pills-primary nav-justified">
                    <li class="nav-item">
                        <a href="{{ route('profile') }}" class="nav-link {{ $actived1 }}"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('edit-profile') }}" class="nav-link {{ $actived2 }}"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                    </li>
                </ul>
                            @yield('container')
                        </div>
                    </div>
                    <!--/row-->
                </div>


            </div>
        </div>
      </div>
      </div>

    </div>
</div>


<!-- Js Plugins -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{  asset('js/player.js') }}"></script>
<script src="{{  asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{  asset('js/mixitup.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/main2.js') }}"></script>

</body>
</html>

